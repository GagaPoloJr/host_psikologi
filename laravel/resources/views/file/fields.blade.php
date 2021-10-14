<!-- Name Field -->
<div class="form-group row">
    {!! Form::label('nama_file', 'Nama File:', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
    <div  class="col-sm-12 col-md-7">
        {!! Form::text('nama_file', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row mb-4">
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload
        File Database</label>
    <div class="col-sm-12 col-md-7">
        <div class="custom-file">
            <input name="file" type="file"
                class="custom-file-input "
                id="exampleInputFile"></input>
            <label class="custom-file-label" for="exampleInputFile">Masukkan
               File</label>
           
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Artikel</label>
    <div class="col-sm-12 col-md-7">
        <select name="jenis_file" class="form-control selectric" id="">
            <option value="">Pilih Jenis File</option>
            <option value="Akademik">Akademik</option>
            <option value="Kemahasiswaan">Kemahasiswaan</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori File</label>
    <div class="col-sm-12 col-md-7">
        <select name="kategori_file" class="form-control selectric" id="">
            <option value="">Pilih Kategori File</option>
            <option value="Surat Aktif Mahasiswa">Surat Aktif Mahasiswa</option>
            <option value="Skripsi">Skripsi</option>
            <option value="Magang">Magang</option>
            <option value="Beasiswa">Beasiswa</option>
            <option value="Delegasi Lomba">Delegasi Lomba</option>



        </select>
    </div>
</div>






<!-- Submit Field -->
<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('file.index') }}" class="btn btn-light">Cancel</a>
    </div>
</div>
