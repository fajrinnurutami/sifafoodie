@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($data as $rs)
<h3>Form Edit bank</h3>
<form class="user" method="POST" action="{{ route('bank.update',$rs->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ $rs->nama }}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <input type="text" name="norek" class="form-control form-control-user @error('norek') is-invalid @enderror"
         placeholder="norek" value="{{ $rs->norek }}">
         @error('norek')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <input type="pemilik" name="pemilik" class="form-control form-control-user @error('pemilik') is-invalid @enderror"
         placeholder="pemilik" value="{{ $rs->pemilik }}">
         @error('pemilik')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
     <a href="{{ url('bank') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection