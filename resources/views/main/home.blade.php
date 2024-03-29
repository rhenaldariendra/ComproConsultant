@extends('master.master')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="/assets/css/main/home.css">
<link rel="stylesheet" href="/assets/css/main/contactus.css">
<link rel="stylesheet" href="/assets/css/other/normalize.css">
<link rel="stylesheet" href="/assets/css/other/swiper.css">
<link rel="stylesheet" href="/assets/css/main/slider.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">

<script>
    ! function (e) {
        "undefined" == typeof module ? this.charming = e : module.exports = e
    }(function (e, n) {
        "use strict";
        n = n || {};
        var t = n.tagName || "span",
            o = null != n.classPrefix ? n.classPrefix : "char",
            r = 1,
            a = function (e) {
                for (var n = e.parentNode, a = e.nodeValue, c = a.length, l = -1; ++l < c;) {
                    var d = document.createElement(t);
                    o && (d.className = o + r, r++), d.appendChild(document.createTextNode(a[l])), n
                        .insertBefore(d, e)
                }
                n.removeChild(e)
            };
        return function c(e) {
            for (var n = [].slice.call(e.childNodes), t = n.length, o = -1; ++o < t;) c(n[o]);
            e.nodeType === Node.TEXT_NODE && a(e)
        }(e), e
    });

</script>

<div class="plceholder"></div>
<div class="content-1">
    <section>
        <div class="swiper-container slideshow">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="slide-image"
                        style="background-image: url('/assets/image/background1.jpg'); background-attachment: fixed;">
                    </div>
                    <span class="slide-title">@lang('home.slider.first')</span>
                </div>

                <div class="swiper-slide slide">
                    <div class="slide-image"
                        style="background-image: url('/assets/image/background2.jpg'); background-attachment: fixed;">
                    </div>
                    <span class="slide-title">@lang('home.slider.second')</span>
                </div>

                <div class="swiper-slide slide">
                    <div class="slide-image"
                        style="background-image: url('/assets/image/background3.jpg'); background-attachment: fixed;">
                    </div>
                    <span class="slide-title">@lang('home.slider.third')</span>
                </div>

                <div class="swiper-slide slide">
                    <div class="slide-image"
                        style="background-image: url('/assets/image/background4.jpg'); background-attachment: fixed;">
                    </div>
                    <span class="slide-title">@lang('home.slider.fourth')</span>
                </div>
            </div>
            <div class="slideshow-pagination"></div>
        </div>
    </section>
</div>
<div class="others">
    <div class="content-2">
        <div class="title">
            <h2>@lang('home.service.title')</h2>
        </div>
        <div class="content-2-body">
            <div class="content">

                <div class="images">
                    <img src="assets/image/deal.png" alt="">
                    <p>@lang("home.service.first.title")</p>
                </div>
                <div class="text">
                    <ul>
                        @foreach (trans()->get('home.service.first.draft') as $data)
                        <li>{{ $data }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="images">
                    <img src="assets/image/tax.png" alt="">
                    <p>@lang("home.service.second.title")</p>
                </div>
                <div class="text">
                    <ul>

                        @foreach (trans()->get('home.service.second.draft') as $data)
                        <li>{{ $data }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="images">
                    <img src="assets/image/evaluation.png" alt="">
                    <p>@lang("home.service.third.title")</p>
                </div>
                <div class="text">
                    <ul>
                        @foreach (trans()->get('home.service.third.draft') as $data)
                        <li>{{ $data }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="content-3">
        <div class="left">
            <img src="/assets/image/imageHome.svg" alt="">
        </div>
        <div class="right">
            <h2>@lang("home.about.title")</h2>
            <p>@lang("home.about.description")</p>
            <a href="#">@lang('home.about.button') <i class="bi bi-arrow-right-circle"></i></a>
        </div>
    </div>

    <div class="content-4">
        <div class="title">
            <h2>@lang("home.partner")</h2>
        </div>
        <div class="content-4-body">
            <div class="item">
                <div class="images">
                    <img src="/assets/image/fotobuuli.jpg" alt="">
                </div>
                <p>Basauli Sianipar, SE Ak., CA, ACPA</p>
            </div>
            <div class="item">
                <div class="images">
                    <img src="/assets/image/fotokanancroped.jpg" alt="">
                </div>
                <p>Ilias Ronald M Aritonang, SE Ak., CA</p>
            </div>
        </div>
    </div>

    <div id="contact" class="allbody">
        <div class="container-top">
            <div class="title-top">
                <h2>@lang("home.contact.title")</h2>
                <p>@lang("home.contact.fill")</p>
            </div>
        </div>
        <div class="container-bottom">
            <div class="left-box">
                <form id="myForm">
                    <div class="top-container">
                        <div class="input-placeholder">
                            <label for="fname">@lang("home.contact.form.name")</label>
                            <input type="text" id="fname" name="fname" value="">
                        </div>
                        <div class="input-placeholder">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="">
                        </div>
                    </div>
                    <div class="input-placeholder">
                        <label for="service">@lang("home.contact.form.service")</label>
                        <input type="text" id="service" name="service" value="">
                    </div>
                    <div class="input-placeholder">
                        <label for="number">Whatsapp</label>
                        <input type="text" id="number" name="number" value="">
                    </div>
                    <div class="input-placeholder">
                        <label for="cname">@lang("home.contact.form.company")</label>
                        <input type="text" id="cname" name="cname" value="">
                    </div>
                    <div class="input-placeholder">
                        <label for="msg">@lang("home.contact.form.message")</label>
                        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit">@lang("home.contact.form.submit")</button>
                </form>
            </div>

            <div class="right-box">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            {{-- src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=Kantor Jasa Akuntan Cibubur Basauli Sianipar&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a --}}
                            src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=+(ruko%20food%20plaza)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://capcuttemplate.org/">Capcut Templates</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 472px;
                            border-radius: 10px;
                        }

                        .gmap_canvas {
                            border-radius: 10px;
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 472px;
                        }

                        .gmap_iframe {
                            height: 472px !important;
                        }

                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("myForm").addEventListener("submit", function (event) {
        event.preventDefault();

        fname = document.getElementById("fname");
        email = document.getElementById("email");
        service = document.getElementById("service");
        number = document.getElementById("number");
        cname = document.getElementById("cname");
        msg = document.getElementById("msg");

        var text = "Nama:%20" + fname.value + "%0AEmail:%20" + email.value + "%0ANama%20Perusahaan:%20" + cname
            .value + "%0AKebutuhan:%20" + service.value + "%0ADeskripsi:%0A" + msg.value;

        var link = "https://wa.me/6281310133052?text=" + text
        window.open(link, "_blank");
    });

</script>

{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js'></script> --}}
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js'></script> --}}

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/swiper.js"></script>
<script src="/assets/js/tweenMax.min.js"></script>
<script src="/assets/js/script.js"></script>
@endsection
