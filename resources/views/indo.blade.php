@extends('layout.app')
@section('title', 'Christian')

@section('content')
    <!-- Hero section -->

    <section class="hero" id="home">
        <main class="content">
            <h1 class="display-4 head">
                Selamat <span class="waktu"></span>, <br />
                <span>Christian</span> disini
                <h1 class="display-4 head">Ada yang bisa saya bantu?</h1>
            </h1>
            <p class="body">FrontEnd Web Devoloper</p>
            <div class="socials">
                <a href="#">
                    <i data-feather="instagram"></i>
                </a>
                <a href="#">
                    <i data-feather="linkedin"></i>
                </a>
                <a href="#">
                    <i data-feather="github"></i>
                </a>
            </div>
            <div class="lang">
                <a href="{{ route('home') }}" class="cta activeL"><img src="{{ url('asset/img/us.png') }}" alt=""
                        width="20px">
                    English</a>
                <a href="{{ route('indo') }}" class="cta"><img src="{{ url('asset/img/id.png') }}" alt=""
                        width="20px">
                    Indonesia</a>
            </div>
        </main>
        <div class="image">
            <img src="{{ url('asset/img/tian.jpg') }}" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <h2>Tentang <span>saya</span></h2>

        <div class="row">
            <div class="about-img">
                <img src="{{ url('asset/img/profil.png') }}" alt="Gambar Kopi" />
            </div>
            <div class="content">
                <h3>
                    Halo, perkenalkan nama saya
                    <span style="color: var(--btn);">Christian</span>
                </h3>
                <p>
                    Saya biasa dipanggil Chris atau Tian, dan saya orang Indonesia.
                    Indonesia adalah negara besar di Asia Tenggara, jika Anda tidak
                    tahu. Saya lahir di Surabaya pada tahun 1999 dan dibesarkan di sini
                    sebagai orang Jawa. Setelah lulus dari SMK Petra pada tahun 2018,
                    saya tidak langsung mendaftar di perguruan tinggi, saya bekerja
                    hampir di semua bidang untuk mencari passion dan potensi saya yang
                    sebenarnya. Dan di sini saya akhirnya menemukan apa yang benar-benar
                    passion saya, yaitu Pemrograman dan Desain web.

                    <br />
                    <br />
                    Saya mulai belajar tentang Desain Web dan Pengembangan Web pada
                    tahun 2020 selama Pandemi Covid, saya mengambil pelajaran online
                    sebanyak yang saya bisa dan sekarang saya sudah sangat akrab dengan
                    HTML, CSS, Javascript, PHP dan Github. Bahkan, sekarang saya bisa
                    mengerjakan project dengan PHP Framework, Laravel Framework. Saya
                    juga mempelajari banyak Javascript Library seperti JQuery, AJAX,
                    SwiperJS dan ReactJS.
                </p>
            </div>
        </div>
    </section>

    <!-- end Hero section -->

    <!-- Menu section start -->

    <section class="menu" id="menu">
        <h2>Skills <span>saya</span></h2>
        <p>
            Teknologi yang saya kuasai
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="https://phantomlandscapes.files.wordpress.com/2021/04/html-css-javascript.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">HTML, CSS, Javascript</h3>
                <h3 class="menu-card-title">Level: Expert</h3>
            </div>

            <div class="menu-card">
                <img src="https://smarttips.in/wp-content/uploads/2018/03/Laravel-logo.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">PHP Framework Laravel</h3>
                <h3 class="menu-card-title">Level: Expert(FrontEnd only)</h3>
            </div>

            <div class="menu-card">
                <img src="https://florencefennel.co.in/image/cache/catalog/florencefennel/react%20js-1000x1000.jpg"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">React JS</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://cdn-images-1.medium.com/max/1600/1*qwFrTMnFkcd3U9rFKwwacw.png" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Git and Github</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://static.techspot.com/images2/downloads/topdownload/2020/01/2020-01-28-ts3_thumbs-c3e.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">MySql</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://spng.pngfind.com/pngs/s/146-1466902_php-logo-png-transparent-php-logo-png-png.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">PHP</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>

            <div class="menu-card">
                <img src="https://tse1.mm.bing.net/th?id=OIP.eY2jpFO7RHl0P7En39N6VQHaDt&pid=Api&P=0" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Flutter and Dart</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>
        </div>
    </section>

    <!-- Menu section end -->

    <!-- Project section start -->

    <section class="menu" id="project">
        <h2>Projects <span>saya</span></h2>
        <p>
            Project yang pernah saya kerjakan
        </p>

        <div class="row">
            @foreach ($projects as $project)
                <a href="{{ url('project') }}/{{ $project->id }}">
                    <div class="menu-card">
                        <img src="{{ url('images') }}/{{ $project->image }}" alt="" class="menu-card-img" />
                        <h3 class="menu-card-title">Nama Project : {{ $project->name }}</h3>
                        <h3 class="menu-card-title">Kategori: {{ $project->kategori }}</h3>
                        <h3 class="menu-card-title">Technology: {{ $project->tech }}</h3>
                    </div>
                </a>
            @endforeach

            <div class="menu-card">
                <img src="https://smarttips.in/wp-content/uploads/2018/03/Laravel-logo.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">PHP Framework Laravel</h3>
                <h3 class="menu-card-title">Level: Expert(FrontEnd only)</h3>
            </div>

            <div class="menu-card">
                <img src="https://florencefennel.co.in/image/cache/catalog/florencefennel/react%20js-1000x1000.jpg"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">React JS</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://cdn-images-1.medium.com/max/1600/1*qwFrTMnFkcd3U9rFKwwacw.png" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Git and Github</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://static.techspot.com/images2/downloads/topdownload/2020/01/2020-01-28-ts3_thumbs-c3e.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">MySql</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://spng.pngfind.com/pngs/s/146-1466902_php-logo-png-transparent-php-logo-png-png.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">PHP</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>

            <div class="menu-card">
                <img src="https://tse1.mm.bing.net/th?id=OIP.eY2jpFO7RHl0P7En39N6VQHaDt&pid=Api&P=0" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Flutter and</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>
        </div>
    </section>

    <!-- Project section end -->

    <!-- contact section start -->
    <section class="contact" id="contact">
        <h2><span>Kontak</span> saya</h2>
        <p>
            Isi form dibawah ini
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25708918163!2d112.64247084265104!3d-7.275443758055953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1679485610673!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <p>
                        <i data-feather="user"></i>
                    </p>
                    <input type="text" placeholder="Nama" />
                </div>
                <div class="input-group">
                    <p>
                        <i data-feather="mail"></i>
                    </p>
                    <input type="email" placeholder="E-mail" />
                </div>
                <div class="input-group">
                    <p>
                        <i data-feather="phone"></i>
                    </p>
                    <input type="number" placeholder="Phone Number" />
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- contact section end -->
@endsection
