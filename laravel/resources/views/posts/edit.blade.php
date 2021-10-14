@extends('layouts.app')
@section('title')
    Edit Post 
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">Edit Post</h3>
                {{Breadcrumbs::render('posts.edit', $post)}}
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-12">
                         {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                         <div class="card">
                            <div class="card-header">
                                <h4>Edit Artikel</h4>
                            </div>
                             <div class="card-body ">
                                            @include('posts.show_fields')
                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
