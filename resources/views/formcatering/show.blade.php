@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($ar_formcatering as $formcatering )
<div class="card shadow mb-4">
    
    <div class="card-body">
      
      <table class="table table-striped">
  <tbody>
    <tr>
        <th scope="col">Nama</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->nama }}</td>
    </tr>
    <tr>
        <th scope="col">No. Handphone</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->hp }}</td>
    </tr>
    <tr>
        <th scope="col">Email</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->email }}</td>
    </tr>
    <tr>
        <th scope="col">Pesanan</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->catering }}</td>
    </tr>
    <tr>
        <th scope="col">Tanggal Kirim</th>
        <th scope="col">: </th>
       <td>{{date('d-m-yy', strtotime($formcatering->tgl_kirim)) }}</td>
    </tr>
    <tr>
        <th scope="col">Waktu Kirim</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->waktu}}</td>
    </tr>
    <tr>
        <th scope="col">Jumlah</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->jumlah }}</td>
    </tr>
    <tr>
        <th scope="col">Harga per Box</th>
        <th scope="col">: </th>
        <td scope="col">Rp. {{ number_format ($formcatering->harga,0,',','.') }} </td>
    </tr>
    
    <tr>
        <th scope="col">Total Bayar</th>
        <th scope="col">: </th>
        <td scope="col">Rp. {{ number_format($formcatering->harga*$formcatering->jumlah,0,',','.') }} </td>
        
    </tr>
    <tr>
        <th scope="col">Metode Pembayaran</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->bank }}</td>
    </tr>
    <tr>
        <th scope="col">Alamat</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->alamat }} </td>
    </tr>
    <tr>
        <th scope="col">Note</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->note}} </td>
    </tr>
     <tr>
        <th scope="col">Email Konfirmasi</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->status_email}} </td>
    </tr>
    <tr>
        <th scope="col">Status Pembayaran</th>
        <th scope="col">: </th>
        <td scope="col">{{ $formcatering->status_pay}} </td>
    </tr>
    
  </tbody>
</table>
    </div>
  </div>
  <a href="{{url('formcatering')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a>       
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection