@extends('master.master')
@section('title', 'About Us')
@section('content')
<link rel="stylesheet" href="/assets/css/main/aboutus.css">

<div class="ab1-top">
    <div class="ab1">
        <h1>Maksimalkan potensi keuangan Anda <strong>dengan panduan ahli kami</strong></h1>
        <p class="desc_ab1">Membantu perusahaan dari bisnis kecil hingga menengah untuk mendapatkan informasi keuangan yang mereka butuhkan untuk meningkatkan kinerja dan profitabilitas menjadi keputusan prestise.</p>
    </div>
</div>


<img class="img_ab1" src="/assets/image/ab1.svg" alt="">

<div class="lineab"></div>

<div class="ab2">
    <h1>Profil Perusahaan</h1>
    <p class="desc_ab2">Kantor Jasa Akuntan (KJA) BASAULI SIANIPAR adalah badan usaha yang telah diberi wewenang oleh Menteri Keuangan untuk menawarkan layanan akuntansi yang luar biasa kepada publik. Kantor kami berlokasi strategis di Rukan Food Plaza yang ternama, di kawasan bergengsi Grand Cibubur Country, Cikeas Bogor, Indonesia. Tim kami terdiri dari Akuntan Profesional berketerampilan tinggi yang terdaftar di Daftar Nasional, didukung oleh Kementerian Keuangan. Selain itu, BASAULI SIANIPAR dengan bangga diakui sebagai Akuntan Profesional bersertifikat di komunitas ASEAN yang terhormat.</p>
</div>

<div class="lineab"></div>

<div class="ab3">
    <div class="vision">
        <h2>Visi</h2>
        <p>Menjadi organisasi profesi terdepan dalam pengembangan pengetahuan dan praktek akuntansi, manajemen bisnis dan publik yang berorientasi pada etika dan tanggung jawab sosial, serta lingkungan hidup dalam perspektif Nasional dan Internasional

        </p>
    </div>
    <div class="vision">
        <h2>Misi</h2>
        <ol>
            <li> Memelihara integritas, komitmen dan kompetensi seluruh anggota KJA BASAULI SIANIPAR, dalam pengembangan manajemen bisnis dan public yang berorientasi pada etika, tanggung jawab dan lingkungan hidup</li>
            <li> Mengembangkan pengetahuan dan praktek bisnis, keuangan dan akuntansi bagi masyarakat</li>
            <li>Berpartisipasi aktif dalam mewujudkan good governance melalui upaya organisasi yang sah dan dalam persepektif Nasional dan Internasional.</li>
          </ol>
    </div>
</div>

<div class="lineab"></div>

<div class="ab4">
    <div class="maps">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=472&amp;hl=en&amp;q=Kantor Jasa Akuntan Cibubur Basauli Sianipar&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
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
        <h1>Lokasi Kami</h1>
        <div class="abs-address">
            <p>RUKAN Food Plaza 1  No.26</p>
            <p>Grand Cibubur Country</p>
            <p>Cikeas Bogor, Indonesia</p>
        </div>
    </div>

</div>

@endsection
