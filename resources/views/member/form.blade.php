@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
    $ar_role = ['Administrator'=>'admin','User'=>'user'];
    $ar_isactive = ['yes'=>'yes','no'=>'no','banned'=>'banned'];
@endphp
<h3>Form Input Member</h3>
<form class="user" method="POST" action="{{route('member.store')}}" 
    enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
         name="name" placeholder="Nama User" value="{{ old('name')}}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror"
         name="email" placeholder="Email" value="{{ old('email')}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
         name="password" placeholder="Password" value="{{ old('password')}}">
         @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="col-sm-6">
      <label>Role</label>&nbsp;&nbsp;&nbsp;&nbsp;
        @foreach ($ar_role as $label => $role)
        @php 
        $cek = ( old('role')==$role ) ? 'checked' : ''; 
        @endphp
        <div class="form-check form-check-inline @error('role') is-invalid @enderror">
          <input name="role" type="radio" class="form-check-input"{{ $cek }} value="{{ $role }}"> 
          <label class="form-check-label"> {{ $label }} </label>
          @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach
      </div>
      </div>
      <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <label>Status</label>&nbsp;&nbsp;&nbsp;&nbsp;
        @foreach ($ar_isactive as $label => $isactive)
        @php 
        $cek = ( old('isactive')==$isactive ) ? 'checked' : ''; 
        @endphp
        <div class="form-check form-check-inline @error('isactive') is-invalid @enderror">
          <input name="isactive" type="radio" class="form-check-input" {{ $cek }} value="{{ $isactive }}"> 
          <label class="form-check-label"> {{ $label }} </label>
          @error('isactive')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach
        </div>
        <div class="col-sm-6">
        <label>Foto User</label><br>
        <input type="file" name="foto"class="form-control @error('foto') is-invalid @enderror"/>
        @error('foto')<div class="alert alert-danger">{{ $message }}</div>@enderror
      </div>
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
  </form>
  @else
    @include('auth.terlarang')
@endif
@endsection