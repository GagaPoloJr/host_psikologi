@extends('layouts.app')
@section('title')
    Create File Database 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">New File</h3>
            
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('file.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-12">
                       {!! Form::open(['route' => 'file.store','enctype' => 'multipart/form-data']) !!}
                       <div class="card">
                        <div class="card-header">
                            <h4>Tambah File Database</h4>
                        </div>
                           <div class="card-body ">
                                        @include('file.fields')
                                {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
