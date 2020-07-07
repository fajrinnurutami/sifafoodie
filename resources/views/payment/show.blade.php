@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($ar_payment as $payment )
<div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $payment->nama}}</h6>
        </div>
        <div class="card-body">
        @if(!empty($payment->bukti))
        <td><img src="{{asset('assets/img/bukti')}}/{{ $payment->bukti }}" width="20%" /></td>
        @else
        <td><img src="{{asset('assets/img')}}/nophoto.png" height="30%" /></td>
        @endif <br>


        <table class="table table-striped">
  <tbody>
  <tr>
        <th scope="col">Tanggal Bayar</th>
        <th scope="col">: </th>
        <td scope="col">{{date('d-m-yy', strtotime($payment->tgl_bayar)) }}</td>
    </tr>
   <tr>
        <th scope="col">Total Bayar</th>
        <th scope="col">: </th>
        <td scope="col">Rp {{ number_format($payment->total_bayar, 0, ',', '.') }}</td>
    </tr>
    <tr>
        <th scope="col">Status Bayar</th>
        <th scope="col">: </th>
        <td scope="col">{{ $payment->status_bayar }}</td>
    </tr>
     <tr>
        <th scope="col">Atas Nama</th>
        <th scope="col">: </th>
        <td scope="col">{{ $payment->an }}</td>
    </tr>
    </table>
       
      <a href="{{url('payment')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a> 
      </div>
      </div>        
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection