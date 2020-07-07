@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$rs1 = App\Catering::all();
$rs2 = App\Waktu::all();      
$rs3 = App\Bank::all(); 
$rs4 = App\Payment::all(); 
$ar_status_email = ['terkirim'=>'terkirim','belum'=>'belum'];
$ar_status_pay = ['lunas'=>'lunas','belum'=>'belum'];
@endphp
<h3>Form Input Pemesan</h3>
@if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('formcatering.store')}}">
    @csrf
    <label>Nama Pemesan</label>
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ old('nama')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>No. Handphone</label>
    <div class="form-group">
        <input type="text" name="hp" class="form-control form-control-user @error('hp') is-invalid @enderror"
         placeholder="hp" value="{{ old('hp')}}">
         @error('hp')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Email</label>
    <div class="form-group">
        <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
         placeholder="email" value="{{ old('email')}}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Pesanan</label>
    <div class="form-group">
        <select name="catering" class="form-control @error('catering') is-invalid @enderror">
            <option value="">-- Pilih Pesanan --</option>
            @foreach($rs1 as $catering)
              @php $sel = ( old('catering')==$catering['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $catering['id']}}"{{ $sel }}> {{ $catering['nama']}}</option>
            @endforeach
        </select>
        @error('catering')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Jumlah</label>
    <div class="form-group">
        <input type="text" name="jumlah" class="form-control form-control-user @error('jumlah') is-invalid @enderror"
         placeholder="jumlah" value="{{ old('jumlah')}}">
         @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Tanggal Kirim</label>
    <div class="form-group">
        <input type="date" name="tgl_kirim" class="form-control form-control-user @error('tgl_kirim') is-invalid @enderror"
         value="{{ old('tgl_kirim')}}">
         @error('tgl_kirim')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Jam Pengiriman</label>
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
    <label>Alamat</label>
    <div class="form-group">
        <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror"
         placeholder="alamat" value="{{ old('alamat')}}">
         @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Note</label>
    <div class="form-group">
        <input type="text" name="note" class="form-control form-control-user @error('note') is-invalid @enderror"
         placeholder="note" value="{{ old('note')}}">
         @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Email Konfirmasi</label>&nbsp;&nbsp;&nbsp;&nbsp;
        @foreach ($ar_status as $label => $status)
        @php 
        $cek = ( old('status')==$status ) ? 'checked' : ''; 
        @endphp
        <div class="form-check form-check-inline @error('status') is-invalid @enderror">
          <input name="status" type="radio" class="form-check-input" {{ $cek }} value="{{ $status }}"> 
          <label class="form-check-label"> {{ $label }} </label>
          @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach
      <label>Status Bayar</label>&nbsp;&nbsp;&nbsp;&nbsp;
        @foreach ($ar_status_pay as $label => $status_pay)
        @php 
        $cek = ( old('status_pay')==$status_pay ) ? 'checked' : ''; 
        @endphp
        <div class="form-check form-check-inline @error('status_pay') is-invalid @enderror">
          <input name="status_pay" type="radio" class="form-check-input" {{ $cek }} value="{{ $status_pay }}"> 
          <label class="form-check-label"> {{ $label }} </label>
          @error('status_pay')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('formcatering') }}" class="btn btn-warning">Batal</a>
  </form>
@else
    @include('auth.terlarang')
@endif 
@endsection