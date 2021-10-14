<!-- Name Field -->
<div class="form-group row">
    <label for="title"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul:</label>
    <div  class="col-sm-12 col-md-7">
       <input type="text" name="nama_file" class="form-control" value="{{ $file->nama_file }}">
    </div>
</div>

<div class="form-group row mb-4">
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload
        File</label>
    <div class="col-sm-12 col-md-7">
        <div class="custom-file">
            <input name="file" type="file"
                class="custom-file-input "
                id="exampleInputFile"></input>
            <label class="custom-file-label" for="exampleInputFile">Masukkan
               File</label>
           
        </div>
    </div>
    <label for="thumbnail"
        class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
    <div class="col-sm-12 col-md-7">
    <a  href="{{ url('/data_file/database/'.$file->file) }}">{{$file->file}} </a>
    </div>
    <input hidden type="text" name="old_file" value="{{$file->file}}">
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis File</label>
    <div class="col-sm-12 col-md-7">
        <select name="jenis_file" class="form-control selectric" id="">
            <option value="">Pilih Jenis File</option>
            <option value="Akademik"{{ ( $file->jenis_file == "Akademik") ? 'selected' : '' }}>Akademik</option>
            <option value="Kemahasiswaan" {{ ( $file->jenis_file == "Kemahasiswaan") ? 'selected' : '' }}>Kemahasiswaan</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori File</label>
    <div class="col-sm-12 col-md-7">
        <select name="kategori_file" class="form-control selectric" id="">
            <option value="">Pilih Kategori File</option>
            <option value="Surat Aktif Mahasiswa" {{ ( $file->kategori_file == "Surat Aktif Mahasiswa") ? 'selected' : '' }}>Surat Aktif Mahasiswa</option>
            <option value="Skripsi"{{ ( $file->kategori_file == "Skripsi") ? 'selected' : '' }}>Skripsi</option>
            <option value="Magang"{{ ( $file->kategori_file == "Magang") ? 'selected' : '' }}>Magang</option>
            <option value="Beasiswa"{{ ( $file->kategori_file == "Beasiswa") ? 'selected' : '' }}>Beasiswa</option>
            <option value="Delegasi Lomba"{{ ( $file->kategori_file == "Delegasi Lomba") ? 'selected' : '' }}>Delegasi Lomba</option>
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


