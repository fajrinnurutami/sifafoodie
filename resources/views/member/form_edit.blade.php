@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@foreach ($data as $rs)
@php
    $ar_role = ['Administrator'=>'admin','User'=>'user'];
    $ar_isactive = ['yes'=>'yes','no'=>'no','banned'=>'banned'];
@endphp

<h3>Form Edit User</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('member.update',$rs->id)}}"
    enctype="multipart/form-data"> 
    @csrf
    @method('PUT')
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        @php $val1 = ($errors->isEmpty()) ? $rs->name : old('name'); @endphp
        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
         name="name" placeholder="Nama User" value="{{ $val1 }}">
         @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="col-sm-6">
      @php $val2 = ($errors->isEmpty()) ? $rs->email : old('email'); @endphp
        <input type="text" class="form-control form-control-user @error('email') is-invalid @enderror"
         name="email" placeholder="Email" value="{{ $val2 }}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
         name="password" placeholder="Password" value="{{ $rs->password }}">
         @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
      <div class="col-sm-6">
       <label>Role</label> &nbsp;&nbsp;
        @foreach ($ar_role as $label => $role)
    
        <div class="form-check form-check-inline">
              @php
                  $cek = ($role ==  $rs->role) ? 'checked' : '';
              @endphp
          <input type="radio" class="form-check-input @error('role') is-invalid @enderror" 
          {{ $cek }} value="{{ $role }}" name="role" >
          <label class="form-check-label">{{ $label }}</label>
        </div>
        @endforeach
        @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror 
        </div>
        </div>
        <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
       <label>Status</label> &nbsp;&nbsp;
        @foreach ($ar_isactive as $label => $isactive)
              @php
                  $cek = ($isactive ==  $rs->isactive) ? 'checked' : '';
              @endphp
          <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input @error('isactive') is-invalid @enderror" 
          {{ $cek }} value="{{ $isactive }}" name="isactive" >
          <label class="form-check-label">{{ $label }}</label>
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
    <button type="submit" name="proses" value="simpan" class="btn btn-warning">
      Ubah
    </button>
  </form>
@endforeach
  @else
    @include('auth.terlarang')
@endif
@endsection