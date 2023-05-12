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
    <div class="header">
        <div class="left">
            <div class="logo">
                <a href="#">
                    LOGO
                </a>
            </div>
        </div>
        <div class="right">
            <a href="#">HOME</a>
            <a href="#">SERVICES</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACT US</a>
            <a href="#">PLANS & PRICING</a>
        </div>
    </div>

    <div class="contents-body">
        @yield('content')
    </div>

    <div class="footer">

    </div>
</body>
</html>
