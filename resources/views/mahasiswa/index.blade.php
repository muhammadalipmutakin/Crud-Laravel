@extends('layout')

@section('content')
    <h2>Daftar Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th>
        </tr>
        @foreach($mahasiswas as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
