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
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Artikel</label>
    <div class="col-sm-12 col-md-7">
        <select name="kategori_pembagian" id="kategori_pembagian" class="form-control selectric" id="">
            <option value="">Pilih Jenis Artikel</option>
            <option value="Press Release">Press Release</option>
            <option value="Kajian">Kajian</option>


        </select>
    </div>
</div>

<div id="id_pengurus" style="display:none;" class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Pengurus</label>
    <div class="col-sm-12 col-md-7">
        <select  name="id_kat_pengurus" class="form-control selectric" id="">
            <option value="">Pilih Kategori Pengurus Artikel</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->nama_kat_peng}}</option>
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
            <option value="belum publish">Belum Publish</option>


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

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
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
</script>