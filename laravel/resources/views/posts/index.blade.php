@extends('layouts.app')
@section('title')
    Artikel BEM Psikologi 
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>
            {{Breadcrumbs::render('posts')}}

        </div>
        <div class="section-body">
            <h2 class="section-title">List Artikel</h2>
            <p class="section-lead">Semoga Hari mu menyenangkan !</p>
            <div class="card">
              
                <div class="card-body">
                    @include('layouts.flash_message')
                    <a href="{{ route('posts.create')}}" class="btn btn-primary form-btn mb-5">Tambah Artikel <i class="fas fa-plus"></i></a>
                    @include('posts.table')
                    @include('posts.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('posts.index') }}/";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{mix('assets/js/posts/posts.js')}}"></script>
@endsection
