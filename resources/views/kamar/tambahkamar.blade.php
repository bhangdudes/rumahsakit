<h2 style="text-align: left;">Tambah Data Kamar</h2>
@if ($errors->any)
    @foreach ($errors->all() as $error)
    - {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="/kamar/tambahkamar" method="post">
    @csrf
    <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
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
                <td><input type="number" class="form-control" name="jenis" id="jenis" placeholder="Jenis Kamar"></td>
            </tr>
            <tr>
            <td>
                <button class="btn btn-primary" type="submit" value="Simpan Data">Simpan </button>
            </td>
            </tr>
            <tr><td>
            <a href="<?php echo url('/kamar') ?>"><button type="button" class="btn btn-warning">Kembali</button></a>
            </td></tr>
        </table>
    </div>
    </table>
</form>