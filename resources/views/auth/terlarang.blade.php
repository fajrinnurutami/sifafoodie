@extends('layouts.index2')
@section('content')
<div class="jumbotron">
    <h2> Access Denied !!! </h2>
    <p>Maaf anda terlarang akses halaman ini </p>
    <p>
    <a class="btn btn-primary" href="{{ url('catering') }}">Home</a>
    </p>
</div>
@endsection
