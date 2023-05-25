@extends('master.master')
@section('title', 'About Us')
@section('content')
<link rel="stylesheet" href="/assets/css/main/aboutus.css">

<div class="ab1">
    <h1>Maximize your financial potential with our expert guidance</h1>
    <p class="desc_ab1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
</div>

<img class="img_ab1" src="/assets/image/ab1.svg" alt="">

<div class="lineab"></div>

<div class="ab2">
    <h1>Company Profile</h1>
    <p class="desc_ab2">Lorem ipsum dolor sit amamet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</p>
</div>

<div class="lineab"></div>

<div class="ab3">
    <div class="vision">
        <h2>Vision</h2>
        <img src="" alt="">
    </div>
    <div class="vision">
        <h2>Mission</h2>
        <img src="" alt="">
    </div>
</div>

<div class="lineab"></div>

<div class="ab4">
    <div class="maps">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=gerobak kopi bang raden galaxy&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                    href="https://capcuttemplate.org/">Capcut Templates</a></div>
            <style>
                .mapouter {
                    /* position: relative; */
                    text-align: right;
                    width: 100%;
                    height: 550px;
                    border-radius: 10px;
                }

                .gmap_canvas {
                    border-radius: 10px;
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 550px;
                }

                .gmap_iframe {
                    height: 550px !important;
                }

            </style>
        </div>
    </div>
    <div class="findus">
        <h1>Where to find us</h1>
    </div>
</div>

@endsection
