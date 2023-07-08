@extends('master')

@section('judul_halaman')

@section('konten')

<h2 style="text-align: center;">Data Kamar</h2>
<p style="text-align: center;">List Kamar di Rumah Sakit</p>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <a href="<?php echo url('/tambahpegawai') ?>" class="btn btn-primary" style="margin-left: 65px; margin-bottom: 20px">Tambah Data Kamar</a>
    <div class="container mt-4">
        <div class="card mb-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No Kamar</th>
                        <th>Nama Kamar</th>
                        <th>Jenis Kamar</th>
                        <th colspan=" 2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kamar as $data_kamar)
                    <tr>
                        <td>{{ $data_kamar->id }}</td>
                        <td>{{ $data_kamar->nama_kamar }}</td>
                        <td>{{ $data_kamar->id_jeniskamar }}</td>
                        <td>
                            <form action="#" method="Post">
                                <a class="btn btn-primary" href="/daftarkamar/edit/{{ $data_kamar->id }}">Ubah</a>
                            </form>
                        </td>
                        <td>
                            <form action="/daftarkamar/delete/{{ $data_kamar->id }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        Halaman : {{ $kamar->currentPage() }}<br>
        Jumlah Data: {{ $kamar->total() }}<br>
        Data perhalaman: {{ $kamar->perPage() }}<br>
        <br>
        {{ $kamar->links() }}


    </div>
</body>

</tr>
</thead>
</table>
@endsection