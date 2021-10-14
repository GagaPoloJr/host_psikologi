@extends('layouts.app')
@section('title')
    Edit Informasi 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Informasi</h3>
            {{Breadcrumbs::render('informasi.edit', $informasi)}}
            </div>
  <div class="content">
   
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-12">
                         {!! Form::model($informasi, ['route' => ['informasi.update', $informasi->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                         <div class="card">
                            <div class="card-header">
                                <h4>Edit Informasi</h4>
                            </div>
                             <div class="card-body ">
                                            @include('informasi.show_fields')
                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
