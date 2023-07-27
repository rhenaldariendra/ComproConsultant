@extends('master.master')
@section('title', 'About Us')
@section('content')
<link rel="stylesheet" href="/assets/css/main/aboutus.css">

{{-- <div class="ab1-top">
    <div class="ab1">
        <h1>@lang('about.title.big') <strong>@lang('about.title.small')</strong></h1>
        <p class="desc_ab1">@lang('about.title.description')</p>
    </div>
</div> --}}


<img class="img_ab1" src="/assets/image/ab1.svg" alt="">

<div class="lineab"></div>

<div class="ab2">
    <h1>@lang('about.profile.title')</h1>
    <p class="desc_ab2">@lang('about.profile.description')</p>
</div>

<div class="lineab"></div>

<div class="ab3">
    <div class="vision">
        <h2>@lang('about.vison.title')</h2>
        <p>@lang('about.vison.description')</p>
    </div>
    <div class="vision">
        <h2>@lang('about.mission.title')</h2>
        <ol>
            <li>@lang('about.mission.description.first')</li>
            <li>@lang('about.mission.description.second')</li>
            <li>@lang('about.mission.description.third')</li>
        </ol>
    </div>
</div>

<div class="lineab"></div>

<div class="ab4">
    <div class="maps">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=+(ruko%20food%20plaza)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
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
        <h1>@lang('about.findus.title')</h1>
        <div class="abs-address">
            <p>@lang('about.findus.address.first')</p>
            <p>@lang('about.findus.address.second')</p>
            <p>@lang('about.findus.address.third')</p>
        </div>
    </div>

</div>

@endsection
