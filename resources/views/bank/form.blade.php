@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
<h3>Form Input Metode bank</h3>
<form class="user" method="POST" action="{{ route('bank.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ old('nama')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <input type="text" name="norek" class="form-control form-control-user @error('norek') is-invalid @enderror"
         placeholder="no rekening" value="{{ old('norek')}}">
         @error('norek')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <input type="text" name="pemilik" class="form-control form-control-user @error('pemilik') is-invalid @enderror"
         placeholder="nama pemilik" value="{{ old('pemilik')}}">
         @error('pemilik')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('bank') }}" class="btn btn-warning">Batal</a>
  </form>
@else
    @include('auth.terlarang')
@endif  
@endsection