<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" href="{{ asset('img/logo_kabinet.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/template.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- <link href="{{ asset('css/custom.scss') }}" rel="stylesheet" type="text/css"/> --}}


    <title>{{$title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        html {
  scroll-behavior: smooth;
}

.project{
    height: 200px;
   
    width: 100%;
}

.img-project{
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat
}
    </style>
</head>

<body>
    @include('layouts.loading')

    @include('layouts.navbar')
    @include('sweetalert::alert')

    <section class="jumbotron">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12 mb-5">
                    <img src="{{ asset('img/logo_kabinet.png') }}" alt="logo" width="300">
                    <h1 class="font-weight-bold">BEM Fakultas Psikologi Undip 2021</h1>
                    <h4 class="text-white mt-5">Kabinet Seroja Cita</h4>
                    <p class="col-sm text-white mt-2">Dengan tajuk Seroja Cita, BEM Fakultas Psikologi Undip 2021 hadir
                        membawa semangat adaptif untuk terus bergerak progresif dalam sinergi, mewujudkan karya-karya
                        bermanfaat seindah Seroja</p>
                    </div>
                    <div class="col-12 mt-5">
                        <a href="#section_video" class="mouse-wrap smoothscroll">
                            <span class="mouse">
                                <span class="scroll"></span>
                            </span>
                            <span class="mouse-label">Scroll</span>
                        </a>
                    </div>
            </div>
        </div>


       
    </section>
    <section id="section_video" class="section_video mb-5">
        <img class="mt-5 ornament_1" src="{{ asset('img/ornament_video.png') }}" alt="ornament">
        <img class="mt-5 ornament_2" src="{{ asset('img/ornament_video2.png') }}" alt="ornament">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="mt-5 header">
                    <h3>Video Profile</h3>
                    <h1 class="font-weight-bold ">PROFILE BEM PSIKOLOGI UNIVERSITAS DIPONEGORO</h1>
                </div>
                <div data-aos="fade-up-left" class="yt-video embed-responsive embed-responsive-16by9">
                    <iframe id="video" src="https://www.youtube.com/embed/BgPeftgmYTU" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </section>
    <section class="wrapper section_artikel mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h2 class="font-weight-bold my-5">ARTIKEL TERKINI</h2>
            </div>
            @if ($articles->isEmpty())
            <div class="row justify-content-center align-items-center">
                <h2> <span class="badge badge-secondary">Artikel Belum Ads</span></h2>
            </div>
            @endif
            <div class="row justify-content-center align-items-center my-5">
                @foreach ($articles as $post)
                <div class="col-sm-4 col-12">
                    <a href="{{route('main.detail_page',[$hash->encodeHex($post->id),Str::slug($post->slug_title)])}}">
                        <div class="card text-white card-has-bg click-col mb-3"
                            style="background-image:url('{{ url('/data_file/'.$post->thumbnail) }}');">
                            <img class="card-img d-none" src="{{ url('/data_file/'.$post->thumbnail) }}"
                                alt="{{$post->title}}">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="card-body">
                                    <small class="card-meta mb-2">{{$post->nama_kat_peng}}</small>
                                    <h4 class="card-title mt-0 ">{{$post->title}}
                                    </h4>
                                    <small><i class="far fa-clock"></i>
                                        {{$post->created_at->isoFormat('dddd, D MMMM Y')}}</small>
                                </div>
                                <div class="card-footer">
                                    <div class="media">
                                        <img class="mr-3 rounded-circle"
                                            src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png"
                                            alt="Generic placeholder image" style="max-width:50px">
                                        <div class="media-body">
                                            <h6 class="my-0 text-white d-block">Admin </h6>
                                            <small>BEM Psikologi 2021</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col-12 text-center">
                    <a href="/artikel" class="btn btn-success btn-sm">Lihat Semua</a>
                </div>



            </div>
    </section>

    {{-- seciton tampilan informasi --}}
    <section id="section_informasi" class="section_informasi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center">
                        <h2 class="font-weight-bold my-5">INFORMASI TERKINI</h2>
                    </div>
                    @if ($informations->isEmpty())
                    <div class="row justify-content-center align-items-center">
                        <h2> <span class="badge badge-secondary">Informasi Belum Ada</span></h2>
                    </div>
                    @endif
                </div>

                @foreach ($informations as $info)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img style="background-image:url('{{ url('/data_file/informasi/'.$info->thumbnail) }}')"
                            alt="" class="card-img-top project img-project">
                        <div class="card-body">
                            <h5 class="font-weight-bold card-title">{{$info->title}}</h5>
                            <p>

                                <small> {{$info->created_at->isoFormat('dddd, D MMMM Y')}}</small>
                            </p>
                            <a href="" class="btn btn-outline-success btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
                   
            </div>
        </div>
    </section>
    <section class="section_temancerita">
        <div class="container-fluid">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-sm-6 col-12 position-relative ">
                    <div class="text-white m-5">
                        <h1 class="text-uppercase font-weight-bold">Kita Teman Cerita</h1>
                        <p>
                            Kita Teman Cerita merupakan platform konseling online bersama konselor sebaya yang telah
                            mengikuti pelatihan serta pendampingan oleh para profesional. Konseling bersama konselor
                            sebaya dapat dilakukan secara gratis dengan mendaftar melalui
                        </p>
                        <a target="_blank" href="https://bit.ly/PendaftaranKTC" class="btn btn-dark button_teman">Pendaftaran KTC</a>
                        <img class="ornament_cerita position-absolute r-0" src="{{ asset('img/ornament_teman.png') }}"
                            alt="ornament">
                    </div>

                </div>
                <div class="col-sm-6 col-12  position-relative ">
                    <div class="">
                        <img style="width: 90%" class="" src="{{ asset('img/kitateman.png') }}" alt="ornament">

                        <img class="ornament_cerita2 position-absolute" src="{{ asset('img/ornament_teman1.png') }}"
                            alt="ornament">
                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- footer --}}
    @include('layouts.footermain')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>