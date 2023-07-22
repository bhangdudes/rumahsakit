@extends('master')

@section('judul_halaman')
<h2 style="text-align: center;">Data Jenis Kamar</h2>
<p style="text-align: center;">List Jenis Kamar di Rumah Sakit</p>
@endsection

@section('konten')
    <a href="{{ route('jeniskamar.create') }}" class="btn btn-primary" style="margin-left: 65px; margin-bottom: 20px">Tambah Data Jenis Kamar</a>
    <div class="container mt-4">
        <div class="card mb-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Jenis Kamar</th>
                        <th>Kode Kelas</th>
                        <th>Kelas</th>
                        <th colspan=" 2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jeniskamar as $data_jeniskamar)
                    <tr>
                        <td>{{ $data_jeniskamar->id }}</td>
                        <td>{{ $data_jeniskamar->kode_kelas }}</td>
                        <td>{{ $data_jeniskamar->kelas }}</td>
                        <td>
                            <form action="#" method="Post">
                                <a class="btn btn-primary" href="/jeniskamar/edit/{{ $data_jeniskamar->id }}">Ubah</a>
                            </form>
                        </td>
                        <td>
                            <form action="/jeniskamar/delete/{{ $data_jeniskamar->id }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        Halaman : {{ $jeniskamar->currentPage() }}<br>
        Jumlah Data: {{ $jeniskamar->total() }}<br>
        Data perhalaman: {{ $jeniskamar->perPage() }}<br>
        <br>
        {{ $jeniskamar->links() }}
    </div>
@endsection