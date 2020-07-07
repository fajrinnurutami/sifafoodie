@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
<h3>Form Input Kategori</h3>
<form class="user" method="POST" action="{{ route('katcat.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ old('nama')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
  </form>
@else
    @include('auth.terlarang')
@endif 
@endsection