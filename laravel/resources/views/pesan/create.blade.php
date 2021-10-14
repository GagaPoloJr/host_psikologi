@extends('layouts.app')
@section('title')
    Halaman Balas Pesan
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">Balas Pesan</h3>
            
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-12">
                      <form method="POST" action="{{url('kirim_email')}}">
                        @csrf
                        <div class="card">
                        <div class="card-header">
                            <h4>Pesan Pengirim</h4>
                        </div>
                           <div class="card-body ">
                                        @include('pesan.fields')
                           </div>
                       </div>
                    </form>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
