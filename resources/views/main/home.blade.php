@extends('master.master')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="/assets/css/main/home.css">
<link rel="stylesheet" href="/assets/css/main/contactus.css">

<div class="content-1">
    <div class="container-item">
        <p>Image Slider</p>
    </div>
</div>

<div class="content-2">
    <div class="title">
        <h2>Our Services</h2>
    </div>
    <div class="content-2-body">
        <div class="content">
            <div class="images"></div>
            <div class="text">
                <p>Enterprise Digitalization</p>
            </div>
        </div>
        <div class="content">
            <div class="images"></div>
            <div class="text">
                <p>Comprehensive Solution</p>
            </div>
        </div>
        <div class="content">
            <div class="images"></div>
            <div class="text">
                <p>Excellent Support</p>
            </div>
        </div>
    </div>
</div>

<div class="content-3">
    <div class="left">
        <img src="/assets/image/imageHome.svg" alt="">
    </div>
    <div class="right">
        <h2>We Provide You The Best Services</h2>
        <p>With our attention to detail and our up-to date knowledge on current laws and regulations, we thrive to
            deliver accurate calculations and solutions, relevant to your needs.</p>
        <a href="#">Explore More <i class="bi bi-arrow-right-circle"></i></a>
    </div>
</div>

<div class="content-4">
    <div class="title">
        <h2>Our Partner</h2>
    </div>
    <div class="content-4-body">
        <div class="item">
            <img src="/assets/image/temp.svg" alt="">
            <p>Yuli Julia, S.E., M.M., BKP</p>
            <p>Partner</p>
        </div>
        <div class="item">
            <img src="/assets/image/temp.svg" alt="">
            <p>Alvin Kurniawan, S.E., M.M., BKP</p>
            <p>Partner</p>
        </div>
        <div class="item">
            <img src="/assets/image/temp.svg" alt="">
            <p>Yuli Julia, S.E., M.M., BKP</p>
            <p>Partner</p>
        </div>
    </div>
</div>

<div id="contact" class="allbody">
    <div class="container-top">
        <div class="title-top">
            <h2>30 minutes consultation</h2>
            <p>Please fill in the form below</p>
        </div>
    </div>
    <div class="container-bottom">
        <div class="left-box">
            <form action="">
                <div class="top-container">
                    <div class="input-placeholder">
                        <label for="fname">Name</label>
                        <input type="text" id="fname" name="fname" value="">
                    </div>
                    <div class="input-placeholder">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="">
                    </div>
                </div>
                <div class="input-placeholder">
                    <label for="service">Services Needed</label>
                    <input type="text" id="service" name="service" value="">
                </div>
                <div class="input-placeholder">
                    <label for="number">Whatsapp</label>
                    <input type="text" id="number" name="number" value="">
                </div>
                <div class="input-placeholder">
                    <label for="cname">Company Name</label>
                    <input type="text" id="cname" name="cname" value="">
                </div>
                <div class="input-placeholder">
                    <label for="msg">Message</label>
                    <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="right-box">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=gerobak kopi bang raden galaxy&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
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
@endsection
