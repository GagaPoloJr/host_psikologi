<!-- Name Field -->
<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pengirim:</label>
    <div  class="col-sm-12 col-md-7">
       <input readonly type="text" name="nama_pengirim" class="form-control" value="{{ $pesan->nama }}">
    </div>
</div>
<input hidden type="text" name="id" class="form-control" value="{{ $pesan->id }}">


<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email Pengirim:</label>
    <div  class="col-sm-12 col-md-7">
       <input readonly type="text" name="email_pengirim" class="form-control" value="{{ $pesan->email }}">
    </div>
</div>

<div class="form-group row">
    <label for="body"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pesan :</label>
    <div  class="col-sm-12 col-md-7">
       <textarea style="  max-width:100%;min-height:200px;height:100%;width:100%;" readonly  type="text" name="pesan_pengirim"  class="form-control">{{ $pesan->pesan }}</textarea>
    </div>
</div>

<hr>

<div class="form-group row">
<div class="card-header">
    <h4>Mengirimkan Pesan</h4>
</div>
</div>

<div class="form-group row">
    {!! Form::label('title', 'Subject Email:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div  class="col-sm-12 col-md-7">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
    </div>
</div>


<div class="form-group row">
    <label for="email"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email Penerima:</label>
    <div  class="col-sm-12 col-md-7">
       <input   type="text" name="email" class="form-control" value="{{ $pesan->email }}">
    </div>
</div>

<div class="form-group row">
    <label for="email"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pesan:</label>
    <div  class="col-sm-12 col-md-7">
       <textarea   type="text" name="pesan" class="form-control"style="  max-width:100%;min-height:200px;height:100%;width:100%;" > </textarea>
    </div>
</div>
{{-- <div class="form-group row">
    {!! Form::label('title', 'Pesan:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div  class="col-sm-12 col-md-7">
        {!! Form::text('pesan', null, ['class' => 'form-control']) !!}
    </div>
</div> --}}

<!-- Submit Field -->
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pesan.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
