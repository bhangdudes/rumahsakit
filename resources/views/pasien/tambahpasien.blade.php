<h2 style="text-align: left;">Tambah Data Pasien</h2>

@if ($errors -> any)
<div class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    - {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="/pasien/tambahpasien" method="post">
    {{ csrf_field() }}
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="id">Id Pasien:</label></td>
            </tr>
            <tr>
                <td><input type="number" class="form-control" name="id" id="id" placeholder="Id Pasien"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="nama">Nama Pasien :</label></td>
            </tr>
            <tr>
                <td><input type="nama" class="form-control" name="nama" id="nama" placeholder="Nama pasien"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="umur">Umur Pasien :</label></td>
            </tr>
            <tr>
                <td><input type="number" class="form-control" name="umur" id="umur" placeholder="Umur pasien"></td>
            </tr>
        </table>
    </div>
    <div class="form-group mt-3">
        <table>
            <tr>
                <td><label for="no">No Kamar :</label></td>
            </tr>
            <tr>
                <td><input type="number" class="form-control" name="no" id="no" placeholder="No Kamar"></td>
            </tr>
        </table>
    </div>
    </table>
    <div class="form-group mt-3">
        <input class="btn btn-primary" type="submit" value="Simpan Data">
    </div>
</form>