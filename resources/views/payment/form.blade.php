@extends('layouts.index2')
@section('content')
@php
$rs1 = App\FormCatering::all();
@endphp
<h3>Form Input Status Pembayaran</h3>
<form class="user" method="POST" action="{{ route('payment.store')}}" enctype="multipart/form-data">
    @csrf
    <label>Nama Pemesan</label>
    <div class="form-group">
        <select name="nama" class="form-control @error('nama') is-invalid @enderror">
            <option value="">-- Pilih Nama Pemesan --</option>
            @foreach($rs1 as $nama)
              @php $sel = ( old('nama')==$nama['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $nama['id']}}"{{ $sel }}> {{ $nama['nama']}}</option>
            @endforeach
        </select>
        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Tanggal Bayar</label>
    <div class="form-group">
        <input type="date" name="tgl_bayar" class="form-control form-control-user @error('tgl_bayar') is-invalid @enderror"
         value="{{ old('tgl_bayar')}}">
         @error('tgl_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Total Bayar</label>
    <div class="form-group">
        <input type="text" name="total_bayar" class="form-control form-control-user @error('total_bayar') is-invalid @enderror"
         placeholder="total bayar" value="{{ old('total_bayar')}}">
         @error('total_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Status Bayar</label>
    <div class="form-group">
        <input type="text" name="status_bayar" class="form-control form-control-user @error('status_bayar') is-invalid @enderror"
         placeholder="status bayar" value="{{ old('status_bayar')}}">
         @error('status_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Atas Nama</label>
    <div class="form-group">
        <input type="text" name="an" class="form-control form-control-user @error('an') is-invalid @enderror"
         placeholder="atas nama" value="{{ old('an')}}">
         @error('an')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    
    <label>Bukti Bayar</label><br>
    <div class="form-group">
    <input type="file" name="bukti"> 
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('payment') }}" class="btn btn-warning">Batal</a>
  </form>

@endsection