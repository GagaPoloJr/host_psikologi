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
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">



    <title>Selamat Datang di Website BEM Psikologi Universitas Diponegoro</title>

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
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form method="post" action="{{ route('contact.store') }}" class="contact100-form validate-form">
                {{ csrf_field() }}
                <span class="contact100-form-title">
                    Say Hello!
                </span>
                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Your Name</span>
                    <input class="input100" type="text" name="nama" placeholder="Enter your name">
                    <span class="focus-input100"></span>
                </div>
    
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                    <span class="focus-input100"></span>
                </div>
    
              
    
                
    
                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">Message</span>
                    <textarea class="input100" name="pesan" placeholder="Your message here..."></textarea>
                    <span class="focus-input100"></span>
                </div>
    
                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    {{-- footer --}}
    @include('layouts.footermain')

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>

