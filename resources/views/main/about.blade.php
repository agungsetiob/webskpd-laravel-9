@include ('layouts.header-page')
@section ('content')

    <!-- ====== Banner Section Start -->
    <div
      class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-secondary
        overflow-hidden
      "
    >
      <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1 class="font-semibold text-white text-4xl">RSUD dr. H. Andi Abdurrahman Noor</h1>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== About Section Start -->
    <section
      id="about"
      class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]"
    >
      <div class="container">
        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              
              <div
                class="
                  lg:flex
                  items-center
                  justify-between
                  border
                  overflow-hidden
                "
              >
                <div
                  class="
                    w-full
                    py-12
                    px-7
                    sm:px-12
                    md:p-16
                    lg:py-9 lg:px-16
                    xl:p-[70px]
                  "
                >
                  <span
                    class="
                      text-sm
                      font-medium
                      text-white
                      py-2
                      px-5
                      bg-primary
                      inline-block
                      mb-5
                    "
                  >
                    About Us
                  </span>
                  <h2
                    class="
                      text-center
                      font-bold
                      text-3xl
                      sm:text-4xl
                      2xl:text-[40px]
                      sm:leading-snug
                      text-dark
                      mb-6
                    "
                  >
                    Sekilas tentang RSUD dr. H. Andi Abdurrahman Noor
                  </h2>
                <div class="text-center">
                  <div class="relative inline-block z-10">
                    <img
                      src="{{url('storage/rsud.jpeg')}}"
                      alt="image"
                      class="mx-auto lg:ml-auto"
                    />
                  </div>
                </div>
                  <h5 class="text-lg font-semibold mb-6">
                    Visi Kabupaten Tanah Bumbu:<br>
                    Membangun Tanah Bumbu Maju, Mandiri, Religius dan Demokratis
                  </h5>
                  <h5 class="text-lg font-semibold mb-6">
                    Misi Kabupaten Tanah Bumbu:<br>
                    + Mewujudkan Sumber Daya Manusia yang Berkualitas, Produktif dan Berakhlak Mulia.<br>
                    + Mewujudkan Infrastruktur Wilayah yang Mantap untuk Menopang Daya Saing Pelayanan Publik dan Perekonomian. <br>
                    + Mewujudkan Pengelolaan Sumber Daya Alam yang Arif dengan Memperhatikan Daya Dukung dan Daya Tampung Lingkungan. <br>
                    + Mewujudkan Perekonomian Daerah Berbasis Pengembangan Potensi Maritim dan Agroindustri. Membangun Tata Kelola Pemerintahan yang Melayani, Sederhana dan Akuntabel.<br>
                  </h5>
                  <p style="text-indent: 40px;" class="text-base mb-6 leading-relaxed teks-tengah">
                    Sejak berdirinya Kabupaten Tanah Bumbu pada tanggal 8 April 2003, RSUD Amanah Husada ditetapkan sebagai RSUD Kabupaten Tanah Bumbu sesuai SK Bupati Tanah Bumbu Nomor 25 Tahun 2003 tentang Penunjukan RSUD dan SK Bupati Nomor 26 Tahun 2003 tentang Izin Operasional RSUD Amanah Husada. Kemudian, sesuai dengan Perda Nomor 10 tahun 2013 tentang pembentukan organisasi dan tata kerja rumah sakit umum, berubah namanya menjadi RSUD dr. H. Andi Abdurahman Noor.
                    <p style="text-indent: 40px;" class="text-base mb-6 leading-relaxed teks-tengah">Sejak pertama didirikan, Rumah Sakit Kabupaten yang berfungsi sebagai pusat rujukan Kabupaten yang pada saat itu masih menggunakan bangunan yang bersifat sementara karena bangunan Rumah Sakit ini berstatus kontrak dengan konstruksi yang diperuntukkan bagi sebuah hotel sehingga penataan ruangnya masih sangat jauh mengikuti tata ruang Rumah Sakit pada umumnya. Selain itu, peralatan yang digunakan sebagian besar merupakan hibah dari Rumah Sakit Daerah Kotabaru sehingga sebagian besar peralatan tersebut sudah rusak dan tidak dapat digunakan lagi. Keadaan ini mengakibatkan pelayanan kesehatan yang sangat dibutuhkan masyarakat belum dapat dilakukan secara berkualitas dan maksimal.</p>
                    <p style="text-indent: 40px;" class="text-base mb-6 leading-relaxed teks-tengah">Sejak tanggal 1 Februari 2010, Rumah Sakit Kabupaten ini pindah ke lokasinya yang baru di desa Sepunggur yang merupakan bangunan sendiri dan memenuhi standar bangunan Rumah Sakit yang didirikan diatas lahan seluas ± 6 hektar. Pembangunan dilakukan secara Multiyears dari tahun 2007 s/d 2010 yang bersumber dari dana APBD Murni Daerah Kabupaten Tanah Bumbu.</p>
                  </p>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== Footer Section Start -->
    <footer
      class="bg-secondary pt-20 lg:pt-[10px] relative z-10 wow fadeInUp"
      data-wow-delay=".15s"
    >
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12 px-4">
            <div class="w-full mb-10">
              <a
                href="javascript:void(0)"
                class="inline-block max-w-[160px] mb-6"
              >
                <img
                  src="{{url('storage/logors.png')}}"
                  alt="logo"
                  class=".max-w-\[80px\]"
                />
              </a>
              <p class="text-base text-[#f3f4fe] mb-7">
                Senyum Santun Sapa
              </p>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">Menu</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Home
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Profil
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Faq
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Dokter kami
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Kontak
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">Contact</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    08115040540/
                    (0518)6070767
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    IGD : (0518) 6070 678
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">
                Address
              </h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="
                      inline-block
                      text-base text-[#f3f4fe]
                      hover:text-primary
                      leading-loose
                      mb-2
                    "
                  >
                    Jl. HM. Amin Km.10 RT.03, Desa Sepunggur, Kecamatan Kusan Tengah, Kabupaten Tanah Bumbu
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full md:w-2/3 lg:w-6/12 xl:w-3/12 px-4">
            <div class="w-full mb-10">
              <h4 class="text-white text-lg font-semibold mb-9">Partners</h4>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a
                    href="#"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{url('storage/bpjs.png')}}"
                      alt="bpjs kesehatan"
                    />
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{url('storage/simrs.png')}}"
                      alt="SIMRSGOS"
                      title="SIMRSGOS"
                    />
                  </a>
                </li>

                <li>
                  <a
                    href="https://www.lapor.go.id/"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{url('storage/lapor.png')}}"
                      alt="Lapor"
                      title="Lapor"
                    />
                  </a>
                </li>

                <li>
                  <a
                    href="https://sirs.kemkes.go.id/fo/"
                    rel="nofollow noopner"
                    target="_blank"
                    class="
                      block
                      mb-6
                      mr-5
                      max-w-[120px]
                      xl:max-w-[100px]
                      2xl:max-w-[120px]
                    "
                  >
                    <img
                      src="{{url('storage/sirs.png')}}"
                      alt="Sirs Online"
                      title="Sirs Online"
                    />
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="border-t border-opacity-40 py-4 mt-12">
        <div class="container">
          <div class="flex flex-wrap -mx-4 justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2 px-4">
              <div class="my-1">
                <div
                  class="
                    flex
                    justify-center
                    -mx-3
                  "
                >
                  <p class="text-base text-[#f3f4fe]">
                  Developed by
                  <a
                    href="#"
                    rel="nofollow noopner"
                    target="_blank"
                    class="text-primary hover:underline"
                  >
                    Om Agung
                  </a>
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <span class="absolute left-0 top-0 z-[-1]">
          <img src="{{url('storage/shape-1.svg')}}" alt="" />
        </span>

        <span class="absolute bottom-0 right-0 z-[-1]">
          <img src="{{url('storage/shape-3.svg')}}" alt="" />
        </span>       
      </div>
    </footer>
    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="
        hidden
        items-center
        justify-center
        bg-primary
        text-white
        w-10
        h-10
        rounded-md
        fixed
        bottom-8
        right-8
        left-auto
        z-[999]
        hover:bg-dark
        back-to-top
        shadow-md
        transition
        duration-300
        ease-in-out
      "
    >
      <span
        class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="{{ url ('js/main.js') }}"></script>
  </body>
</html>
