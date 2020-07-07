@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
<h3>Form Input Supplier</h3>
<br>
<form class="user" method="POST" action="{{ route('supplier.store')}}">
    @csrf
    <div class="form-group">
        <label>Nama Supplier</label>
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ old('nama')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control form-control-user @error('no_telp') is-invalid @enderror"
         placeholder="No Telepon" value="{{ old('no_telp')}}">
         @error('no_telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror"
         placeholder="Alamat" value="{{ old('alamat')}}">
         @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('supplier') }}" class="btn btn-warning">Batal</a>
  </form>
@else
    @include('auth.terlarang')
@endif 
@endsection