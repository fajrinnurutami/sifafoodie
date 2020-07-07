@extends('layouts.index2')
@section('content')
@php
$rs1 = App\Katcat::all();
$rs2 = App\Supplier::all();      
@endphp
<h3>Form Input Menu Catering</h3>
<form class="user" method="POST" action="{{ route('catering.store')}}" enctype="multipart/form-data">
    @csrf
    <label>Nama Menu</label>
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror"
         placeholder="menu" value="{{ old('nama')}}">
         @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Harga</label>
    <div class="form-group">
        <input type="text" name="harga" class="form-control form-control-user @error('harga') is-invalid @enderror"
         placeholder="harga" value="{{ old('harga')}}">
         @error('harga')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Kategori</label>
    <div class="form-group">
        <select name="katcat" class="form-control @error('katcat') is-invalid @enderror">
            <option value="">-- Pilih Kategori --</option>
            @foreach($rs1 as $kat)
              @php $sel = ( old('katcat')==$kat['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $kat['id']}}"{{ $sel }}> {{ $kat['nama']}}</option>
            @endforeach
        </select>
        @error('katcat')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Supplier</label>
    <div class="form-group">
        <select name="supplier" class="form-control @error('supplier') is-invalid @enderror">
            <option value="">-- Pilih Supplier --</option>
            @foreach($rs2 as $sup)
              @php $sel = ( old('supplier')==$sup['id'] ) ? 'selected' : ''; @endphp
                <option value="{{ $sup['id']}}"{{ $sel }}> {{ $sup['nama']}}</option>
            @endforeach
        </select>
        @error('sup')<div class="invalid-feedback">{{ $message }}</div>@enderror    
      </div>
    <label>Deskripsi</label>
    <div class="form-group">
        <input type="text" name="deskripsi" class="form-control form-control-user @error('deskripsi') is-invalid @enderror"
         placeholder="deskripsi" value="{{ old('deskripsi')}}">
         @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Bahan-Bahan</label>
    <div class="form-group">
        <input type="ingredient" name="ingredient" class="form-control form-control-user @error('ingredient') is-invalid @enderror"
         placeholder="ingredient" value="{{ old('ingredient')}}">
         @error('ingredient')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <label>Kalori</label>
    <div class="form-group">
        <input type="text" name="kal" class="form-control form-control-user @error('kal') is-invalid @enderror"
         placeholder="kalori" value="{{ old('kal')}}">
         @error('kal')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>Foto Menu</label><br>
        <input type="file" name="foto"class="form-control @error('foto') is-invalid @enderror"/>
        @error('foto')<div class="alert alert-danger">{{ $message }}</div>@enderror
      </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-primary">
      Simpan
    </button>
    <a href="{{ url('catering') }}" class="btn btn-warning">Batal</a>
  </form>
@endsection