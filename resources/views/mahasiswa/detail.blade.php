@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h2>Detail Mahasiswa</h2>

    <p>Nama: {{ $mahasiswa['nama'] }}</p>
    <p>NIM: {{ $mahasiswa['nim'] }}</p>
    <p>Program Studi: {{ $mahasiswa['prodi'] }}</p>
    <p>IPK: {{ number_format($mahasiswa['ipk'], 2) }}</p>

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke Daftar
    </a>
@endsection
