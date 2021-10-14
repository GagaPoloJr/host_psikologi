<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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

    @include('layouts.navbar')
    <section class="jumbotron section_jumbotron">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12">
                    <img class="logo" src="{{ asset('img/logo_kabinet.png') }}" alt="logo" width="300">
                    <h1 class="font-weight-bold">PROFIL BEM PSIKOLOGI UNDIP 2021</h1>
                    <h2>struktur organisasi</h2>

                </div>
    </section>

    <section class="section_pengurusharian">
        <img class="ornament mt-5 ornamentpengurus1" src="{{ asset('img/ornamentpengurus1.png') }}" alt="ornament">
        <img class="ornament mt-5 ornamentbulet" src="{{ asset('img/ornamentbulet.png') }}" alt="ornament">
        <img class="ornament mt-5 ornamentgaris3" src="{{ asset('img/ornamentgaris3.png') }}" alt="ornament">

        <div class="container-fluid">
            <div class="row  justify-content-center align-items-center ">
                <ul class="nav nav-pills mb-3 mt-5 flex-column flex-sm-row" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-ph-tab" data-toggle="pill" href="#pills-ph" role="tab"
                            aria-controls="pills-ph" aria-selected="true">PENGURUS HARIAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-biro-tab" data-toggle="pill" href="#pills-biro" role="tab"
                            aria-controls="pills-biro" aria-selected="false">BIRO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-internal-tab" data-toggle="pill" href="#pills-internal" role="tab"
                            aria-controls="pills-internal" aria-selected="false">BIDANG INTERNAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-eksternal-tab" data-toggle="pill" href="#pills-eksternal"
                            role="tab" aria-controls="pills-eksternal" aria-selected="false">BIDANG EKSTERNAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-PPM-tab" data-toggle="pill" href="#pills-PPM" role="tab"
                            aria-controls="pills-PPM" aria-selected="false">BIDANG PPM</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-ph" role="tabpanel" aria-labelledby="pills-ph-tab">
                    <div class="container pengurus mt-5">
                        {{-- <img class="ornament mt-5 garispengurus1" src="{{ asset('img/garispengurus1.png') }}"
                            alt="ornament"> --}}
                        <div class="row justify-content-center align-items-center">
                            <h2 class="header_judul font-weight-bold text-center">PIMPINAN</h2>

                            <div class="content-card text-center">
                                <!-- Card deck -->
                                <div class="card-deck row">

                                    <div class="col-xs-12 col-sm-6 ">
                                        <!-- Card -->
                                        <div class="card" style="border-style:none;">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img class="card-img-top rounded"
                                                    stlye="box-shadow: 0px 4px 23px -6px rgba(0, 0, 0, 0.25); "
                                                    src="{{ asset('img/Pengurus/PH/Ketua.png') }}" alt="Card image cap">
                                                <a href="#!">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>


                                            <!--Card content-->
                                            <div class="card-body">

                                                <!--Title-->
                                                <h4 class="card-title font-weight-bold">Yanuarisca NC Pratiwi</h4>
                                                <!--Text-->
                                                <p class="card-text">Psikologi 2018</p>
                                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                <button type="button"
                                                    class="btn btn-light-blue btn-md font-weight-bold">KETUA BEM
                                                    PSIKOLOGI 2021</button>

                                            </div>

                                        </div>
                                        <!-- Card -->
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <!-- Card -->
                                        <div class="card mb-4"
                                            style="border-style:none; background-color:transparent !important;">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img class="card-img-top rounded" style="background-image:none; "
                                                    src="{{ asset('img/Pengurus/PH/wakil.png') }}" alt="Card image cap">
                                                <a href="#!">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!--Card content-->
                                            <div class="card-body">

                                                <!--Title-->
                                                <h4 class="card-title font-weight-bold">Thalia Tresnaning Prana</h4>
                                                <!--Text-->
                                                <p class="card-text">Psikologi 2018</p>
                                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                <button type="button"
                                                    class="btn btn-light-blue btn-md font-weight-bold">WAKIL KETUA BEM
                                                    PSIKOLOGI 2021</button>

                                            </div>

                                        </div>
                                        <!-- Card -->
                                    </div>
                                </div>


                                <!-- KOORDINATOR BIDANG -->
                            </div>

                            <div class="row justify-content-center ">
                                <h2 class="header_judul font-weight-bold text-center">KOORDINATOR BIDANG</h2>
                                {{-- <img class="ornament mt-5 garispengurus2" src="{{ asset('img/garispengurus1.png') }}"
                                    alt="ornament"> --}}

                                <div class="container mt-5 junstify-content-center align-items-center text-center">

                                    <!-- Card deck -->
                                    <div class="card-deck row">

                                        <div class="col-xs-12 col-sm-6 ">
                                            <!-- Card -->
                                            <div class="card" style="border-style:none;">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img class="card-img-top"
                                                        src="{{ asset('img/Pengurus/PH/TASYA.png') }}"
                                                        alt="Card image cap">
                                                    <a href="#!">
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">

                                                    <!--Title-->
                                                    <h4 class="card-title font-weight-bold">Tasya Artia Rumiris</h4>
                                                    <!--Text-->
                                                    <p class="card-text">Psikologi 2018</p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <button type="button"
                                                        class="btn btn-light-blue btn-md font-weight-bold">KOORBID
                                                        INTERNAL BEM PSIKOLOGI 2021</button>

                                                </div>

                                            </div>
                                            <!-- Card -->
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <!-- Card -->
                                            <div class="card mb-4" style="border-style:none;">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img class="card-img-top"
                                                        src="{{ asset('img/Pengurus/PH/SHEFA.png') }}"
                                                        alt="Card image cap">
                                                    <a href="#!">
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">

                                                    <!--Title-->
                                                    <h4 class="card-title font-weight-bold">Shefa Deanisa Sekar Cahyadi
                                                    </h4>
                                                    <!--Text-->
                                                    <p class="card-text">Psikologi 2018</p>
                                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                    <button type="button"
                                                        class="btn btn-light-blue btn-md font-weight-bold">KOORBID
                                                        EKSTERNAL BEM PSIKOLOGI 2021</button>

                                                </div>

                                            </div>
                                            <!-- Card -->
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 mx-auto">
                                        <!-- Card -->
                                        <div class="card mb-4" style="border-style:none;">

                                            <!--Card image-->
                                            <div class="view overlay">
                                                <img class="card-img-top"
                                                    src="{{ asset('img/Pengurus/PH/ANINDITA.png') }}"
                                                    alt="Card image cap">
                                                <a href="#!">
                                                    <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>

                                            <!--Card content-->
                                            <div class="card-body">

                                                <!--Title-->
                                                <h4 class="card-title font-weight-bold">Anindita Hany Praditya</h4>
                                                <!--Text-->
                                                <p class="card-text">Psikologi 2018</p>
                                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                <button type="button"
                                                    class="btn btn-light-blue btn-md font-weight-bold">KOORBID PPM BEM
                                                    PSIKOLOGI 2021</button>

                                            </div>

                                        </div>
                                        <!-- Card -->
                                    </div>

                                </div>

                                <!-- TPMO  -->
                                <div class="row justify-content-center ">
                                    <h2 class="header_judul font-weight-bold text-center m-3">TPMO (Tim Penjamin Mutu
                                        Organisasi)</h2>
                                    {{-- <img class="ornament mt-5 garispengurus3"
                                        src="{{ asset('img/garispengurus1.png') }}" alt="ornament"> --}}

                                    <div class="container mt-5 junstify-content-center align-items-center text-center">

                                        <!-- Card deck -->
                                        <div class="card-deck row">

                                            <div class="col-xs-12 col-sm-6 ">
                                                <!-- Card -->
                                                <div class="card" style="border-style:none;">

                                                    <!--Card image-->
                                                    <div class="view overlay">
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/Pengurus/PH/CINTYA.png') }}"
                                                            alt="Card image cap">
                                                        <a href="#!">
                                                            <div class="mask rgba-white-slight"></div>
                                                        </a>
                                                    </div>

                                                    <!--Card content-->
                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title font-weight-bold">Ni Made Cintya Dwiyanti
                                                            Arsari</h4>
                                                        <!--Text-->
                                                        <p class="card-text">Psikologi 2018</p>
                                                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                        <button type="button"
                                                            class="btn btn-light-blue btn-md font-weight-bold">KOORDINATOR
                                                            TPMO BEM PSIKOLOGI 2021</button>

                                                    </div>

                                                </div>
                                                <!-- Card -->
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <!-- Card -->
                                                <div class="card mb-4" style="border-style:none;">

                                                    <!--Card image-->
                                                    <div class="view overlay">
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/Pengurus/PH/FILDZAH.png') }}"
                                                            alt="Card image cap">
                                                        <a href="#!">
                                                            <div class="mask rgba-white-slight"></div>
                                                        </a>
                                                    </div>

                                                    <!--Card content-->
                                                    <div class="card-body">

                                                        <!--Title-->
                                                        <h4 class="card-title font-weight-bold">Fildzah Wahyu Izzati
                                                        </h4>
                                                        <!--Text-->
                                                        <p class="card-text">Psikologi 2018</p>
                                                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                        <button type="button"
                                                            class="btn btn-light-blue btn-md font-weight-bold">TPMO
                                                            INTERNAL BEM PSIKOLOGI 2021</button>


                                                    </div>



                                                </div>
                                                <!-- Card -->
                                            </div>
                                            <div class="card-deck row">

                                                <div class="col-xs-12 col-sm-6 ">
                                                    <!-- Card -->
                                                    <div class="card" style="border-style:none;">

                                                        <!--Card image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top"
                                                                src="{{ asset('img/Pengurus/PH/EVARISTA.png') }}"
                                                                alt="Card image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                        </div>

                                                        <!--Card content-->
                                                        <div class="card-body">

                                                            <!--Title-->
                                                            <h4 class="card-title font-weight-bold">Evarista Danastri
                                                                Prabasari</h4>
                                                            <!--Text-->
                                                            <p class="card-text">Psikologi 2018</p>
                                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                            <button type="button"
                                                                class="btn btn-light-blue btn-md font-weight-bold">TPMO
                                                                EKSTERNAL BEM PSIKOLOGI 2021</button>

                                                        </div>

                                                    </div>
                                                    <!-- Card -->
                                                </div>

                                                <div class="col-xs-12 col-sm-6">
                                                    <!-- Card -->
                                                    <div class="card mb-4" style="border-style:none;">

                                                        <!--Card image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top"
                                                                src="{{ asset('img/Pengurus/PH/PRASETIANTO.png') }}"
                                                                alt="Card image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                        </div>

                                                        <!--Card content-->
                                                        <div class="card-body">

                                                            <!--Title-->
                                                            <h4 class="card-title font-weight-bold">Prasetianto Satria
                                                                Yudantoro</h4>
                                                            <!--Text-->
                                                            <p class="card-text">Psikologi 2018</p>
                                                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                                            <button type="button"
                                                                class="btn btn-light-blue btn-md font-weight-bold">TPMO
                                                                BIDANG PPM BEM PSIKOLOGI 2021</button>

                                                        </div>
                                                        <!-- Card -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progja_TPMO mt-5">
                                        <H3 class="font-weight-bold progja text-center" style="color:#890a03;">PROGRAM
                                            KERJA</H3>
                                        <h4 style="color:#890a03;">Tim Penjamin Mutu Organisasi (TPMO)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-accordion mt-4" id="accordion_13">
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">OPEN RECRUITMENT STAFF</button>
                                </h2>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Mencari dan menerima staf untuk bergabung dengan BEM sebagai sumber daya yang
                                        terikat dengan status anggota.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">FIRST GATHERING</button>
                                </h2>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Perkenalan awal dan penyambutan seluruh pengurus serta anggota BEM Psikologi
                                        Undip 2021.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">PERFOMANCE APPRASIAL (PA)</button>
                                </h2>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Memberikan evaluasi kinerja kepada seluruh pengurus selama setengah periode
                                        keberjalanan BEM.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">STAFF OF THE MONTH</button>
                                </h2>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Memberikan apresiasi rutin setiap bulan kepada salah satu staf atas kinerja yang
                                        ditunjukkan dengan publikasi melalui sosial media resmi BEM FPsi Undip.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">TRAINING TENGAH TAHUN</button>
                                </h2>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Meningkatkan kualitas kinerja sesuai dengan kebutuhan seluruh pengurus BEM FPsi
                                        Undip 2021.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item active">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">SEKOLAH ANAK SEROJA</button>
                                </h2>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordion_13" style="">
                                    <div class="accordion-body">
                                        Memberikan ruang belajar bagi seluruh pengurus BEM FPsi Undip 2021 sebelum
                                        seluruh program kerja resmi dilaksanakan dengan mengundang pembicara yang sudah
                                        berpengalaman di bidangnya.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--BIRO-->
                <div class="tab-pane fade" id="pills-biro" role="tabpanel" aria-labelledby="pills-biro-tab">
                    @include ('struktur.strukturbiro')

                </div>

                <!--INTERNAL-->
                <div class="tab-pane fade" id="pills-internal" role="tabpanel" aria-labelledby="pills-internal-tab">
                    @include ('struktur.bidanginternal')
                </div>

                <!--EKSTERNAL-->
                <div class="tab-pane fade" id="pills-eksternal" role="tabpanel" aria-labelledby="pills-eksternal-tab">
                    @include ('struktur.bidangeksternal')
                </div>

                <div class="tab-pane fade" id="pills-PPM" role="tabpanel" aria-labelledby="pills-PPM-tab">
                    @include('struktur.bidangppm')
                </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>


</html>