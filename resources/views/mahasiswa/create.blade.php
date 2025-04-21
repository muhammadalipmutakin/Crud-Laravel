@extends('layout')

@section('content')
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        Nama: <input name="nama" required><br>
        NIM: <input name="nim" required><br>
        Jurusan: <input name="jurusan" required><br>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection
