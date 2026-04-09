@extends('layout')

@section('content')

<h3>Riwayat</h3>

@foreach($data as $d)
<div class="card">
    <b>{{ $d->nama }}</b><br>
    {{ $d->tanggal_mulai }} - {{ $d->tanggal_selesai }}<br>
    {{ $d->ruangan }}<br>

    <span class="badge 
    {{ $d->status == 'disetujui' ? 'bg-success' : 
    ($d->status == 'menunggu' ? 'bg-warning' : 'bg-danger') }}">
    {{ $d->status }}
    </span>
</div>
@endforeach

@endsection