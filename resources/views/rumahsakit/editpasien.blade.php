<div class="d-flex justify-content-between">
    <h2>Edit Data Pasien</h2>
    <a class="btn btn-dark" href="<?php echo url('/pasien') ?>">Kembali</a>
</div>

@foreach($pasien as $data_pasien)
<form action="/pasien/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $data_pasien->id }}"> <br />
    <div class="form-group mt-3">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama_pasien" id="nama" value="{{ $data_pasien->nama_pasien }}" placeholder="Nama Pegawai">
    </div>

    <div class="row mt-3">
        <div class="col">
            <label for="umur">Umur</label>
            <input type="text" name="umur_pasien" class="form-control" value="{{ $data_pasien->umur_pasien }}">
        </div>
        <div class="col">
            <label for="no_kamar">No Kamar</label>
            <input type="text" name="no_kamar" class="form-control" value="{{ $data_pasien->no_kamar }}">
        </div>

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
