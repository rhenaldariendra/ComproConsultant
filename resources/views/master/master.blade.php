<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/master/style.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <a class="linkTo" target="_blank" href="https://wa.me/6282112211387?text=kontol"><img src="/assets/image/whatsapp.svg" alt="">  Contact Us</a>

    <div class="header">
        <div class="left">
            <div class="logo">
                <a href="#">
                    <img src="/assets/image/logokja.svg" alt="">
                </a>
            </div>
        </div>
        <div class="right">
            <a href="/">HOME</a>
            <a href="/pricing">SERVICES</a>
            <a href="/aboutus">ABOUT US</a>
            <a onclick="goToHome()">CONTACT US</a>
            {{-- <a href="/pricing">PLANS & PRICING</a> --}}
        </div>
        <div class="radio-inputs">
            <label class="radio">
              <input type="radio" name="radio" checked="">
              <span class="name">IDN</span>
            </label>
            <label class="radio">
              <input type="radio" name="radio">
              <span class="name">ENG</span>
            </label>
          </div>
    </div>
    <div class="heads"></div>

    <div class="contents-body">
        @yield('content')
    </div>

    <div class="footer">
        <div class="left">
            <p>Copyright © 2023 Consultant Indonesia. All rights reserved. Disclaimer. Privacy Policy</p>
        </div>
        <div class="right">
            <p>(+62) 21 29033426</p>
            <p>info@accountUli.co</p>
        </div>
    </div>
</body>
<script>

    function goToHome(){
        if(window.location.pathname == "/"){
            scrollToDiv();
        }
        else {
            window.location.href = "/#contact";
            scrollToDiv();
        }
        // console.log(window.location.pathname);
    }

  function scrollToDiv() {
    var div = document.getElementById("contact");
    div.scrollIntoView({ behavior: 'smooth' });
  }

  function submitForm(){
    var text =
    "Nama: {nama}\nEmail: {email}\nNama Perusahaan: {perusahaan}\nDeskripsi:\n{deskripsi}\n";
  }
</script>
</html>
