@extends('master.master')
@section('title', 'Pricing')
@section('content')
<link rel="stylesheet" href="/assets/css/main/pricingg2.css">

<div class="pric1">
    <h1>@lang('pricing.headline')</h1>
    <p>@lang('pricing.tagline')</p>
</div>

<div class="pricing_content">
    <div class="box1">
        <h1>@lang('pricing.box-1.sub-1.headline')</h1>
        <div class="lr1">
            <div class="b1">
                <h3>@lang('pricing.box-1.sub-1.subline')</h3>
                <div class="dss">
                    <div class="poin1">
                        <li>@lang('pricing.box-1.sub-1.list-1.first')</li>
                        <li>@lang('pricing.box-1.sub-1.list-1.second')</li>
                        <li>@lang('pricing.box-1.sub-1.list-1.third')</li>
                        <li>@lang('pricing.box-1.sub-1.list-1.fourth')</li>
                    </div>
                    <div class="poin1">
                        <li>@lang('pricing.box-1.sub-1.list-2.first')</li>
                        <li>@lang('pricing.box-1.sub-1.list-2.second')</li>
                        <li>@lang('pricing.box-1.sub-1.list-2.third')</li>
                        <li>@lang('pricing.box-1.sub-1.list-2.fourth')</li>
                    </div>
                </div>
            </div>
            <div class="b1">
                <h3>@lang('pricing.box-1.sub-2.headline')</h3>
                <p>@lang('pricing.box-1.sub-2.subline')</p>
                <div class="dss">
                    <div class="poin2">
                        <li>@lang('pricing.box-1.sub-2.list-1.first')</li>
                        <li>@lang('pricing.box-1.sub-2.list-1.second')</li>
                        <li>@lang('pricing.box-1.sub-2.list-1.third')</li>
                        <li>@lang('pricing.box-1.sub-2.list-1.fourth')</li>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn_box1" href="https://wa.me/6281310133052?text=Hai,%20Saya%20ingin%20bertanya%20mengenai%20pemrosesan%20bisnis%20pihak%20ketiga"><big>@lang('pricing.price') 3.000.000 / @lang('pricing.month')</big></a>


    </div>
    <div class="box2">
        <h1>@lang("pricing.box-2.headline")</h1>
        <div class="lr2">
            <div class="b2">
                <p>@lang("pricing.box-2.description")</p>
            </div>
        </div>
        <a class="btn_box1" href="https://wa.me/6281310133052?text=Hai,%20Saya%20ingin%20bertanya%20mengenai%20pemrosesan%20bisnis%20pihak%20ketiga"><big>@lang('pricing.price') 3.000.000 / @lang('pricing.month')</big></a>
    </div>

</div>
@endsection
