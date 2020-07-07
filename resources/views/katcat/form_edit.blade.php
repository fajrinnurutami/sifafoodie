@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($data as $rs)
<h3>Form Edit Kategori</h3>
<form class="user" method="POST" action="{{ route('katcat.update',$rs->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ $rs->nama }}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
  </form>
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection