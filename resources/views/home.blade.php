@extends('layout.app')
@section('title', 'Christian')

@section('content')
    <!-- Hero section -->

    <section class="hero" id="home">
        <main class="content">
            <h1 class="display-4 head">
                Hi there, <br />
                It's me <span class="second_color">Christian</span>
                <h1 class="display-4 head">What can i help you?</h1>
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
        <h2>About <span>me</span></h2>

        <div class="row">
            <div class="about-img">
                <img src="{{ url('asset/img/profil.png') }}" alt="Gambar Kopi" />
            </div>
            <div class="content">
                <h3>
                    Hi, my name is
                    <span style="color: var(--btn);">Christian</span>
                </h3>
                <p>
                    People usually goes by Chris or Tian and I'm an Indonesian.
                    Indonesia is a big country from South East Asia, if you dont know. I
                    was born in Surabaya in 1999 and raised here as a Javanese. After
                    graduated from Petra Vacation Highschool in 2018 I'm not straightly
                    enroll the collage, I was working as almost everything to seek my
                    true passion and potential. And here I finally found what I'm trully
                    into, which is Programming and Designing web.
                    <br />
                    <br />
                    I started to learn about Web Design and Web Devolopment in 2020
                    during the Covid Pandemic, I took online lessons as much as I can
                    and now I'm well familiar with HTML, CSS, Javascript, PHP and
                    Github. In fact, now I could work on a project with PHP Framework,
                    Laravel Framework. I also learn many Javascript Library like JQuery,
                    AJAX, SwiperJS and ReactJS.
                </p>
            </div>
        </div>
    </section>

    <!-- end Hero section -->

    <!-- Menu section start -->

    <section class="menu" id="menu">
        <h2><span>My</span> Skills</h2>
        <p>
            The Technology that i use
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
        <h2><span>My</span> Projects</h2>
        <p>
            The Project that i was working on
        </p>

        <div class="row row-project">
            @foreach ($projects as $project)
                <a href="{{ url('project') }}/{{ $project->id }}">
                    <div class="menu-card">
                        <img src="{{ url('images') }}/{{ $project->image }}" alt="" class="menu-card-img" />
                        <h3 class="menu-card-title">{{ $project->name }}</h3>
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

            <div class="menu-card">
                <img src="https://tse1.mm.bing.net/th?id=OIP.eY2jpFO7RHl0P7En39N6VQHaDt&pid=Api&P=0" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Flutter and</h3>
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
        <h2>Contact <span>me</span></h2>
        <p>
            Leave your messege
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

    <script>
        const row = document.querySelector(".row-project"); // select the div row
        const menuItems = row.querySelectorAll('.menu-card'); // get all menu items in the div row
        const itemsToShow = 6; // set the maximum number of items to show
        let hiddenItems = []; // create an array to store hidden items

        for (let i = itemsToShow; i < menuItems.length; i++) {
            // loop through all items starting from the seventh item
            menuItems[i].classList.add("hidden"); // add a class to hide the item
            hiddenItems.push(menuItems[i]); // add the item to the hidden items array
        }

        if (hiddenItems.length > 0) {
            // if there are hidden items
            const loadMoreBtn = document.createElement("button"); // create a new button element
            loadMoreBtn.classList.add('load-more') // set the button text
            loadMoreBtn.textContent = "Load More"; // set the button text
            loadMoreBtn.addEventListener("click", () => {
                // add click event listener to the button
                hiddenItems.forEach((item) => item.classList.remove("hidden")); // show all hidden items
                loadMoreBtn.style.display = "none"; // hide the button
                showLessBtn.style.display = "inline-block"
            });
            row.after(loadMoreBtn); // insert the button after the div row

            const showLessBtn = document.createElement("button"); // create a new button element
            showLessBtn.textContent = "Show Less"; // set the button text
            showLessBtn.classList.add('show-less') // set the button text
            showLessBtn.style.display = "none"; // hide the "Show Less" button
            showLessBtn.addEventListener("click", () => { // add click event listener to the button
                hiddenItems.forEach(item => item.classList.add("hidden")); // hide all shown items
                loadMoreBtn.style.display = "inline-block"; // show the "Load More" button
                showLessBtn.style.display = "none"; // hide the "Show Less" button
            });
            row.after(showLessBtn); // insert the button after the div row
        }
    </script>
@endsection
