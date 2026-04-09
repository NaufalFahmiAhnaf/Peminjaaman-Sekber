@extends('layout')

@section('content')

<div class="card">
    <h3>Status Peminjaman</h3>

    <p>✅ Disetujui: {{ $approved }}</p>
    <p>⏳ Menunggu: {{ $waiting }}</p>
    <p>❌ Ditolak: {{ $rejected }}</p>
</div>

<div class="card">
    <button class="btn btn-primary" onclick="location.href='/cek'">📅 Cek Ketersediaan</button>
    <button class="btn btn-success" onclick="location.href='/form'">➕ Tambah Peminjaman</button>
    <button class="btn btn-danger" onclick="location.href='/riwayat'">📋 Lihat Riwayat</button>
</div>

@endsection