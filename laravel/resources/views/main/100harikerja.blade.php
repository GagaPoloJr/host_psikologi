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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <title>Selamat Datang di Website BEM Psikologi Universitas Diponegoro</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    @include('layouts.loading')

    @include('layouts.navbar')
    <section class="jumbotron section_jumbotron">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12">
                    <img class="logo" src="{{ asset('img/logo_kabinet.png') }}" alt="logo" width="300">
                    <h1 class="font-weight-bold">PROFIL BEM PSIKOLOGI UNDIP 2021</h1>

                </div>
    </section>

    <section class="section_100harikerja">
        <img class="ornament mt-5 ornamentvideo2" src="{{ asset('img/ornament_video2.png') }}" alt="logo">
        <div class="container-fluid">
            <div class="row vh-100 justify-content-center align-items-center">
                <img class="ornament mt-5 ornamentteman" src="{{ asset('img/ornament_teman.png') }}" alt="logo">
                <div class="font-weight-bold text-center teks100harikerja">
                    <h1>100 HARI KERJA</h1>
                    <h3 class="font-weight-bold">BEM PSIKOLOGI UNDIP 2021</h3>
                </div>
                <img class="banner_100harikerja img-fluid rounded" src="{{ asset('img/100harikerja.png') }}" alt="" width="90%;">
                <div class="container text-center">
                    <div class="row">
                        <p class="" style="color:#fff;">Laporan mengenai program kerja yang sudah maupun sedang berjalan selama 100 hari kerja BEM Fakultas Psikologi Undip 2021.
                            Terhitung sejak 22 Desember 2020 hingga 29 Maret 2021.</p>
                        </div>
                    <a target="_blank" href="https://drive.google.com/file/d/16BkiOTdhTBBZD-G6PlWT4Mw7DOBeXqkc/view?usp=sharing" class="btn btn-dark button_100harikerja mt-3">Laporan 100 Hari Kerja</a>
                </div>
            </div>
        </div>




        <img class="ornament mt-5 ornamentbulet" src="{{ asset('img/ornamentbulet.png') }}" alt="ornament">
    </section>
    @include('layouts.footermain')
</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>