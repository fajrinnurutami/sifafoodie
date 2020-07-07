@extends('layouts.index2')
@section('content')

@foreach ($ar_catering as $catering )
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $catering->nama }}</h6>
    </div>
    <div class="card-body">
      
      <table class="table table-striped">
  <tbody>
    <tr>
        <th scope="col">Foto</th>
        <th scope="col">: </th>
        @if(!empty($catering->foto))
        <td><img src="{{asset('assets/img/catering')}}/{{ $catering->foto }}" height="50%" /></td>
      @else
      <td><img src="{{asset('assets/img')}}/nophoto.png" height="30%" /></td>
      @endif
    </tr>
    <tr>
        <th scope="col">Harga</th>
        <th scope="col">: </th>
        <td scope="col">Rp {{ number_format($catering->harga, 0, ',', '.') }}</td>
    </tr>
    <tr>
        <th scope="col">Kategori</th>
        <th scope="col">: </th>
        <td scope="col">{{ $catering->katcat }}</td>
    </tr>
    <tr>
        <th scope="col">Supplier</th>
        <th scope="col">: </th>
        <td scope="col">{{ $catering->supplier }}</td>
    </tr>
    <tr>
        <th scope="col">Deskripsi</th>
        <th scope="col">: </th>
        <td scope="col">{{ $catering->deskripsi }}</td>
    </tr>
    <tr>
        <th scope="col">Ingredient</th>
        <th scope="col">: </th>
        <td scope="col">{{ $catering->ingredient }}</td>
    </tr>
    <tr>
        <th scope="col">Kalori</th>
        <th scope="col">: </th>
        <td scope="col">{{ $catering->kal }} Kal</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
  <a href="{{url('daftar')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a>       
@endforeach

@endsection