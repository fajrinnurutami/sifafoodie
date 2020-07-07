@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($ar_bank as $bank )
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ $bank->nama }}</h6>
                </div>
                <div class="card-body">
                  Nama : {{ $bank->nama }} <br/><br/>
                  No. Rekening : {{ $bank->norek }} <br/><br/>
                  Nama Pemilik : {{ $bank->pemilik }} <br/><br/>
                 <a href="{{url('bank')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a> 
                </div>
              </div>        
@endforeach
@else
    @include('auth.terlarang')
@endif  
@endsection