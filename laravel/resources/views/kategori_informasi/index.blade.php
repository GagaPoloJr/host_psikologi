@extends('layouts.app')
@section('title')
   Kategori Informasi BEM Psikologi 
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Kategori Informasi</h1>
            <div class="section-header-breadcrumb">
               
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Editor</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">List Kategori Pengurus Informasi</h2>
            <p class="section-lead">Semoga Hari mu menyenangkan !</p>
            <div class="card">
              
                <div class="card-body">
                    @include('layouts.flash_message')
                    <a href="{{ route('kategori_informasi.create')}}" class="btn btn-primary form-btn mb-5">Tambah Kategori Informasi <i class="fas fa-plus"></i></a>
                    @include('kategori_informasi.table')
                    @include('kategori_informasi.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('kategori_informasi.index') }}/";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{mix('assets/js/posts/kategori_info.js')}}"></script>
@endsection
