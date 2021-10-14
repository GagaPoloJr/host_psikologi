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
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">



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
    </style>
</head>

<body>
    @include('layouts.loading')

    @include('layouts.navbar')
    <section class="main_artikel container mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h2 class="font-weight-bold mb-5">Artikel Terbaru</h2>
            </div>
        </div>
        @foreach ($main_artikel as $main)
          <div class="card bg-dark text-white">
            <div class="image_utama card-img" style="background-image:url('{{ url('/data_file/'.$main->thumbnail) }}');">
                <div class="image_overlay">
                </div>
            </div>
            <div class="card-img-overlay">
              <h4 class="card-title">{{$main->title}}</h4>
              <p class="card-text">{{$main->created_at->isoFormat('dddd, D MMMM Y')}}</p>
              <div class="row justify-content-center align-items-center">
                  
                  <a class="btn btn-outline-danger text-center" href="">Baca Selengkapnya</a>
            </div>  
            </div>
          </div>
          @endforeach
    </section>
    <section class="wrapper section_artikel mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h2 class="font-weight-bold my-5">ARTIKEL BEM PSIKOLOGI UNDIP</h2>
            </div>
            <div class="row justify-content-center align-items-center">
                @foreach ($kategori as $post)
               <a href="{{route('main.kategori_artikel',Str::slug($post))}}" class="btn btn-outline-danger mr-3">{{$post}}</a>
              @endforeach
             
            </div>
            @if ($articles->isEmpty())
            <div class="row justify-content-center align-items-center">
                <h2> <span class="badge badge-secondary">Artikel Belum Ada</span></h2>
            </div>
            @endif
            <div class="row mt-5">
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
            </div>
        </div>
            <div class="d-flex justify-content-center my-5">
                {{ $articles->links('pagination::bootstrap-4')}}
            </div>
    </section>


    {{-- footer --}}
    @include('layouts.footermain')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>