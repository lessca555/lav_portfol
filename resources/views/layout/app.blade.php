<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Christian</title>
    <link rel="stylesheet" href="{{ url('asset/css/app.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/css/slider.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/d508f9c7b5.js" crossorigin="anonymous"></script>

    {{-- feather icon --}}
    <script src="https://unpkg.com/feather-icons"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <header>
            @include('layout.navbar')
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="contacts" class="contacts">
            @include('layout.footer')
        </footer>
    </div>

    <script src="asset/js/app.js"></script>
    <script src="asset/bootstrap5/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        function activeMenu() {
            let len = sec.length;
            while (--len && window.scrollY + 97 < sec[len].offsetTop) {}
            li.forEach((ltx) => ltx.classList.remove("active-home"));
            li[len].classList.add("active-home");
        }

        activeMenu();
        window.addEventListener("scroll", activeMenu);

        $(function() {
            var path = window.location.href; // Mengambil data URL pada Address bar
            $(".lang a").each(function() {
                // Jika URL pada menu ini sama persis dengan path...
                if (this.href === path) {
                    // Tambahkan kelas "active" pada menu ini
                    $(this).addClass("activeL");
                } else {
                    $(this).removeClass("activeL");
                }
            });
        });
    </script>

    <script>
        feather.replace();
    </script>
</body>

</html>
