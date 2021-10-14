<!-- Name Field -->
<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul:</label>
    <div  class="col-sm-12 col-md-7">
       <input type="text" name="title" class="form-control" value="{{ $post->title }}">
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
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    <img width="150px" src="{{ url('/data_file/'.$post->thumbnail) }}">
    </div>
    <input hidden  name="old_thumbnail" type="text" value="{{ $post->thumbnail}}">
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Artikel</label>
    <div class="col-sm-12 col-md-7">
        <select name="kategori_pembagian" class="form-control selectric" id="">
            <option value="">Pilih Jenis Artikel</option>
            <option value="Press Release"{{ ( $post->kategori_pembagian == "press-release") ? 'selected' : '' }}>Press Release</option>
            <option value="Kajian" {{ ( $post->kategori_pembagian == "Kajian") ? 'selected' : '' }}>Kajian</option>
        </select>
    </div>
</div>
@if ($post->kategori_pembagian !="Kajian")
<div id="id_pengurus"  class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Pengurus</label>
    <div class="col-sm-12 col-md-7">
        <select  name="id_kat_pengurus" class="form-control selectric" id="">
            <option value="">Pilih Kategori Pengurus Artikel</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}"{{ ( $post->id_kat_pengurus == $category->id) ? 'selected' : '' }}>{{$category->nama_kat_peng}}</option>
             @endforeach

        </select>
    </div>
</div>
@endif

<div class="form-group row">
    <label for="body"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content:</label>
    <div  class="col-sm-12 col-md-7">
       <textarea type="text" name="body" id="summernote" class="form-control">{{ $post->body }}</textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
    <div class="col-sm-12 col-md-7">
        <select name="status" class="form-control selectric" id="">
            <option value="">Pilih Status</option>
            <option value="publish" {{ ( $post->status == "publish") ? 'selected' : '' }}>Publish</option>
            <option value="draft" {{ ( $post->status == "draft") ? 'selected' : '' }}>Publish</option>
        </select>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posts.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>


{{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="kategori_pembagian"]').on('change', function() {
            var stateID = $(this).val();
            console.log(stateID)
            if(stateID =="Press Release") {
                $("#id_pengurus").show();
            }else{
                $('#id_pengurus').hide();
            }
        });
    });
</script> --}}