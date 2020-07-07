@extends('layouts.index2')
@section('content')

@foreach ($data as $rs)
<h3>Form Edit Waktu</h3>
<form class="user" method="POST" action="{{ route('waktu.update',$rs->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="text" name="jam" class="form-control form-control-user @error('jam') is-invalid @enderror"
         placeholder="jam" value="{{ $rs->jam }}">
         @error('jam')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
    <a href="{{ url('waktu') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach

@endsection