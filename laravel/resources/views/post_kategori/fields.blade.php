<!-- Name Field -->
<div class="form-group row">
    {!! Form::label('title', 'Nama Kategori Pengurus Artikel:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div  class="col-sm-12 col-md-7">
        {!! Form::text('nama_kat_peng', null, ['class' => 'form-control']) !!}
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
