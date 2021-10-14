<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" href="{{ asset('img/logo_kabinet.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/template.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />


    <title>Selamat Datang di Website BEM Psikologi Universitas Diponegoro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    @include('layouts.loading')

    @include('layouts.navbar')
    <section class="jumbotron  section_jumbotron">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12">
                    <img class="logo" src="{{ asset('img/logo/logo_kabinet.png') }}" alt="logo" width="300">
                    <h1 class="font-weight-bold">BEM Fakutlas Psikologi Undip 2021</h1>

                </div>
    </section>
    <section class="section_visimisi">
        <img class="ornament ornamentvisi3" src="{{ asset('img/ornamentvisi3.png') }}" alt="ornament">
        <img class="ornament mt-5 ornamentvisi1" src="{{ asset('img/ornamentvisi1.png') }}" alt="ornament">

        <img class="ornament mt-5 ornamentvisi2" src="{{ asset('img/ornamentvisi2.png') }}" alt="ornament">
        <div class="container-fluid" style="padding-bottom :10%;">
            <div class="row justify-content-center align-items-center konten_nav">
                <ul class="nav nav-pills mb-3 mt-5 mr-3 flex-column flex-sm-row" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Makna Logo</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container visi mt-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="content-card text-center">
                                <h2 class="font-weight-bold" style="color:#F8BC4C;">VISI</h2>
                                <p>Terwujudnya BEM Fakultas Psikologi Undip 2021 sebagai Seroja Cita bagi Psikologi, Undip, dan Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="container misi mt-5 mb-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="content-card">
                                <h2 class="font-weight-bold text-center" style="color:#F8BC4C;">MISI</h2>
                                <ol type="number" style=" line-height:30px; ">
                                    <li>Membangun sistem internal organisasi yang solid, peduli, dan profesional</li>
                                    <li>Mewujudkan pelayanan dan pengabdian yang bermanfaat</li>
                                    <li>Membentuk sumber daya mahasiswa yang unggul dan mampu bersaing</li>
                                    <li>Memberi wadah dalam pengembangan minat dan potensi mahasiswa Psikologi Undip</li>
                                    <li>Berpartisipasi secara aktif dan responsif dalam pengawalan isu di lingkup fakultas, universitas, regional, dan nasional</li>
                                    <li>Membangn relasi dan citra organisasi yang akrab dan bersahabat</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div  class="container misi mt-5 mb-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="content-card card_gdo">
                                <h2 class="font-weight-bold text-center" style="color:#F8BC4C;">GRAND DESAIN ORGANISASI</h2>
                                <div class="text-center">
                                    <a class="font-weight-bold" style="color:#111;" href="{{ url('https://drive.google.com/file/d/1ONbGAAb_TZSJH68ydOcEEl1nzXe7DeCc/view?usp=sharing  ') }}">SEROJA CITA 2021</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="container visi mt-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="content-card">
                                <h2 class="font-weight-bold text-center" style="color:#F8BC4C;">NILAI</h2>
                                <ul style="list-style-type:none; line-height:30px; margin-left: -30px;">
                                    <li class="font-weight-bold">Inklusif</li>
                                    <li>Penanaman nilai inklusif sebagai upaya memposisikan diri sama dengan pihak lain demi tercapainya kesepahaman dan mewujudkan BEM FPsi Undip 2021 yang mampu inklusif dalam berbagai lingkup di lingkungan kampus.
                                        Harapannya, hal ini mampu membangun kedekatan antar komponen yang terlibat</li>
                                    <li class="font-weight-bold">Sinergis</li>
                                    <li>Kompleksnya komponen pendukung dalam sebuah badan organisasi menuntut adanya keselarasan dalam bergerak, penanaman
                                        nilai sinergis dalam rangka memastikan pekerjaan sesuai dengan tupoksi masing-masing, dengan berlandaskan nilai-nilai yg sama untuk mencapai tujuan bersama.</li>
                                    <li class="font-weight-bold">Adaptif</li>
                                    <li>Perkembangan zaman menuntut adanya kemampuan penyesuaian diri dengan dengan segala bentuk dinamika yang ada.
                                        Adaptif dimaknai sebagai upaya menyeimbangkan diri dengan tuntutan zaman agar tetap dapat mencapai tujuan yang telah ditentukan</li>
                                    <li class="font-weight-bold">Bermanfaat</li>
                                    <li>Manusia sebagai makhluk sosial yang hidup saling membutuhkan dengan orang lain sudah seharusnya mampu memberi manfaat bagi diri dan orang lain.
                                        Nilai bermanfaat ditanamkan supaya dalam keberjalanan organisasi selalu dilandasi oleh semangat kebermanfaatan untuk seluruh pihak yang terlibat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="container content-card visi mt-5" style="height:100%;">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 text-center">
                                <h2 class="font-weight-bold" style="color:#F8BC4C;">Makna Logo</h2>
                            </div>
                            <div class="col-12 text-center ">
                                <img style="width:50%;" src="{{ asset('img/logo/logo_kabinet.png') }}" alt="ornament">
                            </div>
                        </div>
                       @include('main.logo')
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footermain')
</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</html>