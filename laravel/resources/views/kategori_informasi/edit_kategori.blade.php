@extends('layouts.app')
@section('title')
Kategori Informasi Detail
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Kategori Informasi Detail</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('kategori_informasi.index') }}"  class="btn btn-primary">Back</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-12">
                         {!! Form::model($kat_post, ['route' => ['kategori_informasi.update', $kat_post->id], 'method' => 'patch']) !!}
                         <div class="card">
                            <div class="card-header">
                                <h4>Edit Kategori Informasi </h4>
                            </div>
                             <div class="card-body ">
                                            @include('kategori_informasi.show_fields')
                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
