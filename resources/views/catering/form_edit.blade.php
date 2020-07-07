@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$rs1 = App\Katcat::all();
$rs2 = App\Supplier::all();     
@endphp
@foreach ($data as $rs)
<h3>Form Edit Catering</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('catering.update',$rs->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nama Menu</label>
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ $rs->nama }}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Harga</label>
    <div class="form-group">
        <input type="text" name="harga" class="form-control form-control-user @error('harga') is-invalid @enderror"
         placeholder="harga" value="{{ $rs->harga }}">
         @error('harga')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Kategori</label>
    <div class="form-group">
        <select name="katcat" class="form-control">
            <option value="">-- Pilih kategori --</option>
            @foreach($rs1 as $katcat)
            @php $sel = ( $katcat['id'] == $rs->idkatcat) ? 'selected' : ''; @endphp
                <option value="{{ $katcat['id']}}"{{ $sel }}> {{ $katcat['nama']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
    <label>Supplier</label>
        <select name="supplier" class="form-control">
            <option value="">-- Pilih Supplier --</option>
            @foreach($rs2 as $supplier)
            @php $sel = ( $supplier['id'] == $rs->idsupplier) ? 'selected' : ''; @endphp
                <option value="{{ $supplier['id']}}"{{ $sel }}> {{ $supplier['nama']}}</option>
            @endforeach
        </select> 
    </div>
    <label>Deskripsi</label>
    <div class="form-group">
        <input type="text" name="deskripsi" class="form-control form-control-user @error('deskripsi') is-invalid @enderror"
         placeholder="deskripsi" value="{{ $rs->deskripsi }}">
         @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>   
    <label>Bahan-Bahan</label>
    <div class="form-group">
        <input type="ingredient" name="ingredient" class="form-control form-control-user @error('ingredient') is-invalid @enderror"
         placeholder="ingredient" value="{{ $rs->ingredient }}">
         @error('kal')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Kalori</label>
    <div class="form-group">
        <input type="text" name="kal" class="form-control form-control-user @error('kal') is-invalid @enderror"
         placeholder="kalori" value="{{ $rs->kal }}">
         @error('kal')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <div class="form-group">
                  <label> Foto </label>
                  <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"/> 
              @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
    <a href="{{ url('catering') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection
