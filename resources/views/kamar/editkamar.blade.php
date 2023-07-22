<div class="d-flex justify-content-between">
    <h2>Edit Data Kamar</h2>
    <a class="btn btn-dark" href="<?php echo url('/kamar') ?>">Kembali</a>
</div>

@foreach($kamar as $data_kamar)
<form action="/kamar/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $data_kamar->id }}"> <br />
    <div class="form-group mt-3">
        <label for="nama">Nama Kamar</label>
        <input type="text" class="form-control" name="nama" value="{{ $data_kamar->nama_kamar }}">
    </div>

    <div class="row mt-3">
            <label for="jenis">Jenis Kamar</label>
            <input type="text" class="form-control" name="jenis" value="{{ $data_kamar->id_jeniskamar }}">
        </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger mt-3">
        @foreach ($errors->all() as $error)
        - {{ $error }} <br>
        @endforeach
    </div>
    @endif
    <div class="form-group mt-3">
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>
@endforeach