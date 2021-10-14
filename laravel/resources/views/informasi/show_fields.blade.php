<!-- Name Field -->
<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul:</label>
    <div  class="col-sm-12 col-md-7">
       <input type="text" name="title" class="form-control" value="{{ $informasi->title }}">
    </div>
</div>

<div class="form-group row mb-4">
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload
        Thumbnail</label>
    <div class="col-sm-12 col-md-7">
        <div class="custom-file">
            <input name="thumbnail" type="file"
                class="custom-file-input"
                id="exampleInputFile"></input>
            <label class="custom-file-label" for="exampleInputFile">Masukkan
                Gambar Thumbnail</label>
        </div>
    </div>
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    <img width="150px" src="{{ url('/data_file/informasi/'.$informasi->thumbnail) }}">
    </div>
    <input hidden  name="old_thumbnail" type="text" value="{{ $informasi->thumbnail}}">
</div>


<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Informasi</label>
    <div class="col-sm-12 col-md-7">
        <select name="id_kategori" class="form-control selectric" id="">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ ( $category->id == $informasi->id_kategori) ? 'selected' : '' }} >
                    {{$category->nama_kategori}}
                </option>
            @endforeach
           
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="body"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content:</label>
    <div  class="col-sm-12 col-md-7">
       <textarea type="text" name="body" id="summernote" class="form-control">{{ $informasi->body }}</textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
    <div class="col-sm-12 col-md-7">
        <select name="status" class="form-control selectric" id="">
            <option value="">Pilih Status</option>
            <option value="publish" {{ ( $informasi->status == "publish") ? 'selected' : '' }}>Publish</option>
            <option value="draft" {{ ( $informasi->status == "draft") ? 'selected' : '' }}>Draft</option>
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


