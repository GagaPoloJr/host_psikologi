@extends('layouts.app')
@section('title')
    Create Post 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">New Post</h3>
            
            {{Breadcrumbs::render('kategori.create')}}

        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-12">
                       {!! Form::open(['route' => 'kategori.store','enctype' => 'multipart/form-data']) !!}
                       <div class="card">
                        <div class="card-header">
                            <h4>Tambah Kategori Artikel</h4>
                        </div>
                           <div class="card-body ">
                                        @include('post_kategori.fields')
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
