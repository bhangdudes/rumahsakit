<h2 style="text-align: left;">Tambah Data Jenis Kamar</h2>
@if ($errors->any)
<div class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    - {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="/jeniskamar/tambahjeniskamar" method="post">
    @csrf
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="id">ID Jenis Kamar </label></td>
            </tr>
            <tr>
                <td><input type="number" class="form-control" name="id" id="id" placeholder="Id Jenis Kamar"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="kode">Kode Kelas</label></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="kode_kelas" id="kode" placeholder="Kode Kelas"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="kelas">Kelas</label></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas"></td>
            </tr>
        </table>
    </div>
    </table>
    <div class="form-group mt-3">
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>
<a class="btn btn-dark" href="<?php echo url('/jeniskamar') ?>"><button>Kembali</button></a>