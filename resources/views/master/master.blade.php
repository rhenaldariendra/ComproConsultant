<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/master/style.css">
    <link rel="icon" href="/assets/image/logokja.svg" type="image/x-icon">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- ---- --}}

    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- -------------- --}}

    {{-- JQuery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- ---------- --}}

    <title>@yield('title')</title>
</head>

<body>
    <a class="linkTo" target="_blank" href="https://wa.me/6281310133052?text=Hai,%20Saya%20ingin%20bertanya?"><img
            src="/assets/image/whatsapp.svg" alt=""> @lang('public.contactus')</a>

    <div class="header">
        <div class="left">
            <div class="logo">
                <img src="/assets/image/logokja.svg" alt="">
            </div>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>

        <div class="right-nav">
            <a href="/">@lang('public.home')</a>
            <a href="/pricing">@lang('public.service')</a>
            <a href="/aboutus">@lang('public.aboutus')</a>
            <a onclick="goToHome()">@lang('public.contactus')</a>
            <div class="radio-inputs">
                <label class="radio">
                    <input type="radio" name="radio">
                    <a href="/en" class="name {{ (Session::get('locale') == 'en') ? 'active' : '' }}">ENG</a>
                </label>
                <label class="radio">
                    <input type="radio" name="radio" checked="">
                    <a href="/id" class="name {{ (Session::get('locale') == 'id') ? 'active' : '' }}">IDN</a>
                </label>
            </div>
        </div>
    </div>
    <div class="heads"></div>

    <div class="contents-body">
        @yield('content')
    </div>

    <div class="footer">
        <div class="left">
            <p>Copyright © 2023 Basauli KJA. All rights reserved. Disclaimer. Privacy Policy</p>
        </div>
        <div class="right">
            <p>(+62) 813 10133052</p>
            <p>basaulikja@gmail.com</p>
        </div>
    </div>
</body>
<script>
    function goToHome() {
        if (window.location.pathname == "/") {
            scrollToDiv();
        } else {
            window.location.href = "/#contact";
            scrollToDiv();
        }
    }

    function scrollToDiv() {
        var div = document.getElementById("contact");
        div.scrollIntoView({
            behavior: 'smooth'
        });
    }

    function submitForm() {
        var text =
            "Nama: {nama}\nEmail: {email}\nNama Perusahaan: {perusahaan}\nDeskripsi:\n{deskripsi}\n";
    }

</script>
<script>
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('right-nav')[0]

    toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })

</script>
</html>
