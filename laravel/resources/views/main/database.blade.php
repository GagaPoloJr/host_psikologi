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



    <title>Dokumen BEM PSikologi Undip 2021</title>

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
    <section class="jumbotron">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-12">
                    <img src="{{ asset('img/logo_kabinet.png') }}" alt="logo" width="300">
                    <h1 class="font-weight-bold">BEM Fakultas Psikologi Undip 2021</h1>
                    <h3 class="font-weight-semibold text-white">Dokumen Pendukung</h3>
                </div>
    </section>

    <section class="tab_dokumen my-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h2 class="font-weight-bold">Dokumen</h2>
            </div>
            <div class="col-12">
                <h3 class="font-weight-bold">A. Akademik</h3>
            </div>
            <nav>
                <div class="nav nav-tabs flex-column flex-sm-row" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Surat Aktif Mahasiswa</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Skripsi</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Magang</a>

                </div>
            </nav>
            <div class="tab-content my-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Surat Aktif Mahasiswa")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-primary"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Skripsi")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-primary"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Magang")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-primary"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <h3>Tata Cara Pengiriman Surat</h3>
                <ol type="1">
                    <li>
                        Unduh surat
                    </li>
                    <li>Isi secara lengkap</li>
                    <li>Kirim via email akademikpsiundip@live.undip.ac.id dengan subjek sesuai dengan nama surat
                        (online) atau letakkan di lobby kampus Fakultas Psikologi Undip kemudian lakukan pengecekan
                        secara berkala (offline)
                    </li>
                </ol>
            </div>

            <hr>

            <div class="col-12">
                <h3 class="font-weight-bold">B. Kemahasiswaan</h3>
            </div>
            <nav>
                <div class="nav nav-tabs flex-column flex-sm-row" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Beasiswa</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Delegasi Lomba</a>
                </div>
            </nav>
            <div class="tab-content my-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Magang")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-primary"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Magang")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-primary"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="table-responsive custom-table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col"></th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumen as $item => $file)
                                @if($file->kategori_file === "Magang")
                                <tr scope="row">
                                    <td>{{$item+=1}}. </td>
                                    <td>
                                        {{$file->nama_file}}
                                    </td>
                                    <td></td>
                                    <td> <a target="_blank" class="btn btn-dark"
                                        href="{{ url('/data_file/database/'.$file->file) }}">Download File</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <h3>Tata Cara Pengiriman Surat</h3>
                <ol type="1">
                    <li>
                        Unduh surat
                    </li>
                    <li>Isi secara lengkap</li>
                    <li>Kirim via email kmhpsiundip18@gmail.com dengan subjek sesuai dengan nama surat (online) atau
                        letakkan di lobby kampus Fakultas Psikologi Undip kemudian lakukan pengecekan secara berkala
                        (offline)
                    </li>
                </ol>
            </div>
            <div class="my-5">
                <h3>Tata cara pencairan dana delegasi lomba:
                </h3>
                <ol type="1">
                    <li>
                        Buat dan kirim proposal kegiatan lomba ke email kemahasiswaan maksimal 14 hari sebelum kegiatan
                        lomba dilaksanakan.

                    </li>
                    <li>Buat surat permohonan surat tugas dan kirim ke email kemahasiswaan.</li>
                    <li>Buat Laporan Pertanggungjawaban (LPJ) dan kirim LPJ ke email kemahasiswaan maksimal 14 hari
                        setelah kegiatan lomba dilaksanakan.
                    </li>
                </ol>
            </div>
        </div>
    </section>
    @include('layouts.footermain')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>