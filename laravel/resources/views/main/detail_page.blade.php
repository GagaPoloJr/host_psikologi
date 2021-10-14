<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" href="{{ asset('img/logo_kabinet.png') }}" type="image/gif" sizes="16x16">

    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet" type="text/css" />



    <title> {{$post->title}}  | {{ config('app.name') }}</title>

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

    <section class="detail_post my-5">
        {{-- {{$view->count}} --}}
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h2 class="text-center font-weight-bold">
                        {{$post->title}}
                    </h2>
                    <img class="img-fluid" src="{{ url('/data_file/'.$post->thumbnail) }}" alt="">
                    <p>
                        {!!$post->body!!}
                    </p>
                </div>
            </div>
        </div>
    </section>

   <section class="post_related">
    <div class="container">
        <div class="row">
            <h2 class="font-weight-bold">Related Artikel</h2>
        </div>
        <div class="card-group vgr-cards">
        @foreach ($kategori_post as $pk)
          <div class="card my-5">
            <div class="card-img-body">
            <img class="card-img" src="{{ url('/data_file/'.$pk->thumbnail) }}" alt="{{$pk->thumbnail}}">
            </div>
            <div class="card-body">
                <p class="font-weight-bold">{{$pk->nama_kat_peng}} - <span style="color:#888888">{{$pk->created_at->isoFormat('dddd, D MMMM Y')}}</span></p>
              <h4 class="card-title font-weight-bold">{{$pk->title}}</h4>
              <p style="color: #888888" class="card-text"></p>
              <a href="{{route('main.detail_page',[$hash->encodeHex($pk->id),Str::slug($pk->slug_title)])}}" class="btn btn-outline-primary">Baca Selengkapnya</a>
            </div>
          </div>
          @endforeach
         
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