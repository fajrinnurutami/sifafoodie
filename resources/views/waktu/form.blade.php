@extends('layouts.index2')
@section('content')

<h3>Form Input Waktu</h3>
<form class="user" method="POST" action="{{ route('waktu.store')}}">
    @csrf
    <div class="form-group">
        <input type="text" name="jam" class="form-control form-control-user @error('jam') is-invalid @enderror"
         placeholder="jam" value="{{ old('jam')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('waktu') }}" class="btn btn-warning">Batal</a>
  </form>

@endsection