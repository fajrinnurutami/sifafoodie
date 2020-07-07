@extends('layouts.index3')
@section('content')

<div class="container">
<br/><br/>
<div class="jumbotron">
    <h2> Terima kasih sudah melakukan pemesanan </h2>
    <p>Pesanan anda akan segera ditindaklanjuti, Mohon tunggu email konfirmasi pemesanan</p>
    <a href="{{ url('/') }}" class="btn btn-info">Kembali</a>
</div>
@endsection