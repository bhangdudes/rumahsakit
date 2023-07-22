<h2 style="text-align: left;">Tambah Data Kamar</h2>
@if ($errors->any)
<div class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    - {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="/kamar/tambahkamar" method="post">
    @csrf
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="id">No Kamar </label></td>
            </tr>
            <tr>
                <td><input type="number" class="form-control" name="id" id="id" placeholder="Id Kamar"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="nama">Nama Kamar </label></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama kamar"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="jenis">Jenis Kamar</label></td>
            </tr>
            <tr>
                <td><input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Kamar"></td>
            </tr>
        </table>
    </div>
    </table>
    <div class="form-group mt-3">
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>
