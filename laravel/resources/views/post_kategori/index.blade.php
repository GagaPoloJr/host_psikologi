@extends('layouts.app')
@section('title')
   Kategori Artikel BEM Psikologi 
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kategori Artikel</h1>
            {{Breadcrumbs::render('kategori')}}

        </div>
        <div class="section-body">
            <h2 class="section-title">List Kategori Pengurus Artikel</h2>
            <p class="section-lead">Semoga Hari mu menyenangkan !</p>
            <div class="card">
              
                <div class="card-body">
                    @include('layouts.flash_message')
                    <a href="{{ route('kategori.create')}}" class="btn btn-primary form-btn mb-5">Tambah Kategori Artikel <i class="fas fa-plus"></i></a>
                    @include('post_kategori.table')
                    @include('post_kategori.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('kategori.index') }}/";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{mix('assets/js/posts/kategori_posts.js')}}"></script>
@endsection
