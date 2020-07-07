@extends('layouts.index2')
@section('content')
@php
$rs1 = App\FormCatering::all();
@endphp
@foreach ($data as $rs)
<h3>Form Edit Pembayaran</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="user" method="POST" action="{{ route('payment.update',$rs->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label>Nama Pemesan</label>
    <div class="form-group">
        <select name="nama" class="form-control">
            <option value="">-- Pilih Nama Pemesan --</option>
            @foreach($rs1 as $nama)
            @php $sel = ( $nama['id'] == $rs->idformcatering) ? 'selected' : ''; @endphp
                <option value="{{ $nama['id']}}"{{ $sel }}> {{ $nama['nama']}}</option>
            @endforeach
        </select>
    </div>
    <label>Tanggal Bayar</label>
    <div class="form-group">
        <input type="date" name="tgl_bayar" class="form-control form-control-user @error('tgl_bayar') is-invalid @enderror"
         value="{{ $rs->tgl_bayar }}">
         @error('tgl_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Total Bayar</label>
    <div class="form-group">
        <input type="text" name="total_bayar" class="form-control form-control-user @error('total_bayar') is-invalid @enderror"
         value="{{ $rs->total_bayar }}">
         @error('total_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Status Bayar</label>
    <div class="form-group">
        <input type="text" name="status_bayar" class="form-control form-control-user @error('status_bayar') is-invalid @enderror"
         value="{{ $rs->status_bayar }}">
         @error('status_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Atas Nama</label>
    <div class="form-group">
        <input type="text" name="an" class="form-control form-control-user @error('an') is-invalid @enderror"
         value="{{ $rs->an }}">
         @error('status_bayar')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
    <label>Bukti Bayar</label><br>
        <input type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti"> 
          @error('bukti')<div class="invalid-feedback">{{ $message }}</div>@enderror
      </div>
    
    <button type="submit" name="proses" value="ubah" class="btn btn-primary">
      Ubah
    </button>
     <a href="{{ url('payment') }}" class="btn btn-warning">Batal</a>
  </form>
@endforeach

@endsection