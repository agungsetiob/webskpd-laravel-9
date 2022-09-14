<?php

namespace App\Http\Controllers;

use App\Models\{Post, Doctor, User, Category};
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        foreach ($posts as $post){
            $post->content = Str::limit($post->content, 40);   
        }
        return view('main.blog', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role == 'admin') {
            $doctors = Doctor::all();
            return view('admin.doctor', compact('doctors'));
        }
    }

    //doctor for main page
    public function homeDoctor()
    {
        $doctors = Doctor::latest()
        ->limit(4)
        ->get();
        return view('main.index', compact('doctors'));
    }

    //sp doctor for doctor page for visitors
    public function doctor()
    {
        $doctors = Doctor::latest()
                ->where('category', 'spesialis')
                ->paginate(12);
        return view('main.doctor', compact('doctors'));
    }

    //general doctor for doctor page for visitors
    public function doctorGeneral()
    {
        $doctors = Doctor::latest()
                ->where('category', 'umum')
                ->paginate(12);
        return view('main.doctor', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'              => 'required',
            'category'          => 'required',
            'specialization'    => 'required'
        ]);

        //upload image
        $photo = $request->file('photo');
        $photo->storeAs('public/doctor', $photo->hashName());

        //create post
        Doctor::create([
            'photo'    => $photo->hashName(),
            'name'     => addslashes($request->name),
            'category' => $request->category,
            'specialization'   => $request->specialization
        ]);

        //redirect to index
        return redirect()->back()->with(['success' => 'Data saved succesfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post) {
            $post->view = $post->view + 1; //aktifkan nanti kalau sudah siap go live
            $post->save();
            $popularPosts = Post::latest('view')
            ->where('id', '!=', $post->id)
            ->limit(3)
            ->get();
            $relatedPosts = Post::where([
                ['category_id', '=', $post->category_id],
                ['id', '!=', $post->id]
            ])
            ->limit(3)
            ->get();
            return view('main.show', compact('post', 'relatedPosts', 'popularPosts'));
        } else {
            return view ('errors.404');
        }
        
    }

    public function rank()
    { 
        $ranks = User::with('posts')
                ->withCount('posts')
                ->where('status', 'active')
                ->orderByDesc('posts_count')
                ->paginate(6);
        return view ('main.leaderboard', compact('ranks'));
    }

    public function category($category_id, $category)
    {
        
        $posts = Post::where('category_id', $category_id)
            ->paginate(6);
        foreach ($posts as $post){
            $post->content = Str::limit($post->content, 40);   
        }
        return view ('main.blog', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->role == 'admin') {

            $doc = Doctor::findOrfail($id);
            //delete image
            Storage::delete('public/doctor/'. $doc->photo);

            //delete post
            $doc->delete();

            //redirect to index
            return redirect('doctors')->with(['success' => 'Data deleted succesfully']);
        } else{
            return redirect()->back()->with('error', 'ingatlah dunia hanya sementara');
        }
    }
}
