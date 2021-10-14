<!-- Name Field -->
<div class="form-group row">
    {!! Form::label('title', 'Judul:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div  class="col-sm-12 col-md-7">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row mb-4">
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload
        Thumbnail</label>
    <div class="col-sm-12 col-md-7">
        <div class="custom-file">
            <input name="thumbnail" type="file"
                class="custom-file-input "
                id="exampleInputFile"></input>
            <label class="custom-file-label" for="exampleInputFile">Masukkan
                Gambar Thumbnail</label>
           
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Informasi</label>
    <div class="col-sm-12 col-md-7">
        <select name="id_kategori" class="form-control selectric" id="">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
        @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    {!! Form::label('body', 'Content:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div class="col-sm-12 col-md-7">

        {!! Form::textarea('body', null, ['class' => 'form-control', 'id' =>'summernote']) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
    <div class="col-sm-12 col-md-7">
        <select name="status" class="form-control selectric" id="">
            <option value="">Pilih Status</option>
            <option value="publish">Publish</option>
            <option value="draft">Draft</option>

        </select>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('informasi.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
