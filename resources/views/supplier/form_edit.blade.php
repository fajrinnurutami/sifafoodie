@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($data as $rs)
<h3>Form Edit Supplier</h3>
<form class="user" method="POST" action="{{ route('supplier.update',$rs->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Supplier</label>
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ $rs->nama }}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control form-control-user @error('no_telp') is-invalid @enderror"
         placeholder="no_telp" value="{{ $rs->no_telp }}">
         @error('no_telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror"
         placeholder="Alamat" value="{{ $rs->alamat }}">
         @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
    <a href="{{ url('supplier') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection