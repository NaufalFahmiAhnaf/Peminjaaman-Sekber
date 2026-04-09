@extends('layout')

@section('content')

<div class="card">
<h3>Form Peminjaman</h3>

<form method="POST" action="/store">
@csrf

<input class="input" name="nama" placeholder="Nama">

<label>Tanggal Mulai</label>
<input type="date" class="input" name="tanggal_mulai">

<label>Tanggal Selesai</label>
<input type="date" class="input" name="tanggal_selesai">

<select class="input" name="ruangan">
    <option>Sekber Utama Lt.1</option>
    <option>Sekber Unit 1 Lt.2</option>
    <option>Sekber Unit 2 Lt.2</option>
</select>

<input class="input" name="jam" placeholder="Jam">

<textarea class="input" name="deskripsi" placeholder="Deskripsi"></textarea>

<button class="btn btn-danger">Kirim</button>

</form>
</div>

@endsection