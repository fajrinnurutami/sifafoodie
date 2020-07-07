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
@foreach ($data as $rs)
<h3>Form Edit Pemesan</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('formcatering.update',$rs->id)}}">
    @csrf
    @method('PUT')
    <label>Nama Pemesan</label>
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="nama" value="{{ $rs->nama }}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
     <label>No. Handphone</label>
    <div class="form-group">
        <input type="text" name="hp" class="form-control form-control-user @error('hp') is-invalid @enderror"
         placeholder="hp" value="{{ $rs->hp }}">
         @error('hp')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Email</label>
    <div class="form-group">
        <input type="text" name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
         placeholder="email" value="{{ $rs->email }}">
         @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Pesanan</label>
    <div class="form-group">
        <select name="catering" class="form-control">
            <option value="">-- Pilih Pesanan --</option>
            @foreach($rs1 as $catering)
              @php $sel = ( $catering['id'] == $rs->idcatering ) ? 'selected' : ''; @endphp
                <option value="{{ $catering['id']}}"{{ $sel }}> {{ $catering['nama']}}</option>
            @endforeach
        </select>
      </div>
    <label>Jumlah</label>
    <div class="form-group">
        <input type="text" name="jumlah" class="form-control form-control-user @error('jumlah') is-invalid @enderror"
         placeholder="jumlah" value="{{ $rs->jumlah }}">
         @error('jumlah')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Tanggal Kirim</label>
    <div class="form-group">
        <input type="date" name="tgl_kirim" class="form-control form-control-user @error('tgl_kirim') is-invalid @enderror"
         value="{{ $rs->tgl_kirim }}">
         @error('tgl_kirim')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Jam Pengiriman</label>
    <div class="form-group">
        <select name="waktu" class="form-control @error('waktu') is-invalid @enderror">
            <option value="">-- Pilih Jam --</option>
            @foreach($rs2 as $waktu)
              @php $sel = ( $waktu['id'] == $rs->idwaktu ) ? 'selected' : ''; @endphp
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
              @php $sel = ( $bank['id'] == $rs->idbank ) ? 'selected' : ''; @endphp
                <option value="{{ $bank['id']}}"{{ $sel }}> {{ $bank['nama']}}</option>
            @endforeach
        </select>
        @error('bank')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Alamat</label>
    <div class="form-group">
        <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror"
         placeholder="alamat" value="{{ $rs->alamat }}">
         @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Note</label>
    <div class="form-group">
        <input type="text" name="note" class="form-control form-control-user @error('note') is-invalid @enderror"
         placeholder="note" value="{{ $rs->note }}">
         @error('note')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div>
    <label>Status Email Konfirmasi</label> &nbsp;&nbsp;
    <div class="form-group">
        @foreach ($ar_status_email as $label => $status_email)
              @php
                  $cek = ($status_email ==  $rs->status_email) ? 'checked' : '';
              @endphp
          <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input @error('isactive') is-invalid @enderror" 
          {{ $cek }} value="{{ $status_email }}" name="status_email" >
          <label class="form-check-label">{{ $label }}</label>
          @error('status_email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach 
        </div>
        </div>
         <div>
    <label>Status Pembayaran</label> &nbsp;&nbsp;
    <div class="form-group">
        @foreach ($ar_status_pay as $label => $status_pay)
              @php
                  $cek = ($status_pay ==  $rs->status_pay) ? 'checked' : '';
              @endphp
          <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input @error('isactive') is-invalid @enderror" 
          {{ $cek }} value="{{ $status_pay }}" name="status_pay" >
          <label class="form-check-label">{{ $label }}</label>
          @error('status_pay')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        @endforeach 
        </div>
        </div>
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
     <a href="{{ url('formcatering') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach
@else
    @include('auth.terlarang')
@endif 
@endsection