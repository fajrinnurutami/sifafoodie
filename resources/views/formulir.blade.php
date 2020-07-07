@extends('layouts.index2')
@section('content')

<!-- Form-->
<section class="page-section" id="contact">
<div class="container">

<h2 class="section-heading text-uppercase">Formulir Pemesanan</h2>     
@php
$rs1 = App\Catering::all();
$rs2 = App\Waktu::all();      
$rs3 = App\Bank::all(); 
@endphp
<form class="user" method="POST" action="{{ route('formcatering.store')}}">
    @csrf
   <label>Nama Pemesan</label>
    <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
                    placeholder="nama lengkap *" value="{{ old('nama')}}">
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
     <label>No. Handphone</label>
    <div class="form-group">
        <input type="text" name="hp" class="form-control form-control-user @error('hp') is-invalid @enderror"
         placeholder="no. handphone*" value="{{ old('hp')}}">
         @error('hp')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <label>Email</label>
    <div class="form-group">
        <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
         placeholder="email*" value="{{ old('email')}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <label>Menu</label>
    <div class="form-group">
        <select name="catering" class="form-control @error('catering') is-invalid @enderror">
            <option value="">-- Pilih Menu --</option>
            @foreach($rs1 as $catering)
              @php $sel = ( old('catering')==$catering['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $catering['id']}}"{{ $sel }}> {{ $catering['nama']}}</option>
            @endforeach
        </select>
        @error('catering')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
     <label>Jumlah Pesanan (minimal 10 box)</label>
    <div class="form-group">
        <input type="text" name="jumlah" class="form-control form-control-user @error('jumlah') is-invalid @enderror"
         placeholder="jumlah*" value="{{ old('jumlah')}}">
         @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Tanggal Pengantaran</label>
    <div class="form-group">
        <input type="date" name="tgl_kirim" class="form-control form-control-user @error('tgl_kirim') is-invalid @enderror"
         value="{{ old('tgl_kirim')}}">
         @error('tgl_kirim')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Jam Pengantaran</label>
    <div class="form-group">
        <select name="waktu" class="form-control @error('waktu') is-invalid @enderror">
            <option value="">-- Pilih Jam --</option>
            @foreach($rs2 as $waktu)
              @php $sel = ( old('waktu')==$waktu['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $waktu['id']}}"{{ $sel }}> {{ $waktu['jam']}}</option>
            @endforeach
        </select>
        @error('waktu')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Metode Pembayaran</label>
    <div class="form-group">
        <select name="bank" class="form-control @error('bank') is-invalid @enderror">
            <option value="">-- Pilih Bank Transfer --</option>
            @foreach($rs3 as $bank)
              @php $sel = ( old('bank')==$bank['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $bank['id']}}"{{ $sel }}> {{ $bank['nama']}}</option>
            @endforeach
        </select>
        @error('bank')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
     <label>Alamat Pengantaran</label>
    <div class="form-group">
        <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror"
         placeholder="alamat*" value="{{ old('alamat')}}">
         @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <label>Note</label>
    <div class="form-group">
        <input type="text" name="note" class="form-control form-control-user @error('note') is-invalid @enderror"
         placeholder="contoh: nasi putih diganti nasi merah" value="{{ old('note')}}">
         @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-info">
      Submit
    </button>&nbsp &nbsp
    <a href="{{ url('/') }}" class="btn btn-danger">Batal</a>
 
 @endsection
