<form method="POST" action="/cek">
@csrf
<input type="date" name="tanggal">
<button>Cek</button>
</form>

@if(isset($cek))
    @if(count($cek) == 0)
        <p>Tersedia</p>
    @else
        <p>Tidak tersedia</p>
    @endif
@endif