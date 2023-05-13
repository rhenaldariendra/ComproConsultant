@extends('master.master')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="/assets/css/main/home.css">

<div class="content-1">
    <p>Image Slider</p>
    <div class="container-item">
        <div class="top"></div>
        <div class="bottom"></div>
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
        <p>With our attention to detail and our up-to date knowledge on current laws and regulations, we thrive to deliver accurate calculations and solutions, relevant to your needs.</p>
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


@endsection
