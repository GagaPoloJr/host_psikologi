<!-- Name Field -->
<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategori Pengurus:</label>
    <div  class="col-sm-12 col-md-7">
       <input type="text" name="nama_kat_peng" class="form-control" value="{{ $kat_post->nama_kat_peng }}">
    </div>
</div>




<!-- Submit Field -->
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kategori.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>


