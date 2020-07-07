@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($ar_katcat as $katcat )
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">{{ $katcat->nama }}</h6>
                </div>
                <div class="card-body">
                  Nama : {{ $katcat->nama }} <br/><br/>
                  <a href="{{url('katcat')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Kembali</a>    
                </div>
              </div>        
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection