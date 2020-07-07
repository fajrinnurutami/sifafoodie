@extends('layouts.index2')
@section('content')

@foreach ($ar_waktu as $waktu )
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ $waktu->jam }}</h6>
                </div>
                <div class="card-body">
                  Waktu pengiriman : {{ $waktu->jam }} <br/><br/>
                  <a href="{{url('waktu')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a> 
                </div>
              </div>        
@endforeach

@endsection