@extends('layout')

@section('content')
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf @method('PUT')
        Nama: <input name="nama" value="{{ $mahasiswa->nama }}" required><br>
        NIM: <input name="nim" value="{{ $mahasiswa->nim }}" required><br>
        Jurusan: <input name="jurusan" value="{{ $mahasiswa->jurusan }}" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection
