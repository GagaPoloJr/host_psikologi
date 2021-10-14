@extends('layouts.app')
@section('title')
Kategori Artikel Detail
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Kategori Artikel Detail</h3>
                {{Breadcrumbs::render('kategori.edit', $kat_post)}}
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-12">
                         {!! Form::model($kat_post, ['route' => ['kategori.update', $kat_post->id], 'method' => 'patch']) !!}
                         <div class="card">
                            <div class="card-header">
                                <h4>Edit Kategori Artikel </h4>
                            </div>
                             <div class="card-body ">
                                            @include('post_kategori.show_fields')
                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
