<div class="d-flex justify-content-between">
    <h2>Edit Data Jenis Kamar</h2>
    <a class="btn btn-dark" href="<?php echo url('/jeniskamar') ?>">Kembali</a>
</div>

@foreach($jeniskamar as $data_jeniskamar)
<form action="/jeniskamar/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $data_jeniskamar->id }}"> <br />
    <div class="form-group mt-3">
        <label for="nama">Kode Kelas</label>
        <input type="text" class="form-control" name="kode_kelas" value="{{ $data_jeniskamar->kode_kelas }}">
    </div>

    <div class="row mt-3">
            <label for="jenis">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{ $data_jeniskamar->kelas }}">
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