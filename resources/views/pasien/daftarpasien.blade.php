@extends('master')

@section('judul_halaman')
<h2 style="text-align: center;">Data Pasien</h2>
<p style="text-align: center;">List Pasien di Rumah Sakit</p>
@endsection

@section('konten')

<a href="{{ route('pasien.create') }}" class="btn btn-primary" style="margin-left: 65px; margin-bottom: 20px">Tambah Data Pasien</a>
<div class="container mt-4">
    <div class="card mb-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Umur Pasien</th>
                    <th>Nomor Kamar</th>
                    <th colspan=" 2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasien as $data_pasien)
                <tr>
                    <td>{{ $data_pasien->id }}</td>
                    <td>{{ $data_pasien->nama_pasien }}</td>
                    <td>{{ $data_pasien->umur_pasien }}</td>
                    <td>{{ $data_pasien->no_kamar }}</td>
                    <td>
                        <form action="#" method="Post">
                            <a class="btn btn-primary" href="/pasien/edit/{{ $data_pasien->id }}">Ubah</a>
                        </form>
                    </td>
                    <td>
                        <form action="/pasien/delete/{{ $data_pasien->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    Halaman : {{ $pasien->currentPage() }}<br>
    Jumlah Data: {{ $pasien->total() }}<br>
    Data perhalaman: {{ $pasien->perPage() }}<br>
    <br>
    {{ $pasien->links() }}
</div>
@endsection