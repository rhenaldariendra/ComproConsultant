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
    <p class="desc_ab2">Kantor Jasa Akuntan (KJA) BASAULI SIANIPAR adalah Badan Usaha yang telah mendapat izin dari Menteri Keuangan untuk memberikan Jasa Akuntansi bagi publik yang Berlokasi di Rukan Food Plaza, Grand Cibubur Country, Cikeas Bogor Indonesia. Terdiri dari para Akuntan Profesional yang telah terdaftar di Register Negara. Akuntan yang diselengaarakan oleh Kementerian Keuangan. BASAULI SIANIPAR juga terdaftar menjadi Akuntan Profesional ASEAN.</p>
</div>

<div class="lineab"></div>

<div class="ab3">
    <div class="vision">
        <h2>Vision</h2>
        <p>Menjadi organisasi profesi terdepan dalam pengembangan pengetahuan dan praktek akuntansi, manajemen bisnis dan publik yang berorientasi pada etika dan tanggung jawab sosial, serta lingkungan hidup dalam perspektif Nasional dan Internasional</p>
    </div>
    <div class="vision">
        <h2>Mission</h2>
        <ol>
            <li>Memelihara integritas, komitmen dan kompetensi seluruh anggota KJA BASAULI SIANIPAR, dalam pengembangan manajemen bisnis dan public yang berorientasi pada etika, tanggung jawab dan lingkungan hidup</li>
            <li>Mengembangkan pengetahuan dan praktek bisnis, keuangan dan akuntansi bagi masyarakat</li>
            <li> Berpartisipasi aktif dalam mewujudkan good governance melalui upaya organisasi yang sah dan dalam persepektif Nasional dan Internasional.

            </li>
          </ol> 
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
