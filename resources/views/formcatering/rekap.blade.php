@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama','Pesanan','Jumlah','Tanggal Antar','Waktu Antar','Alamat','Note','Status Bayar'];        
@endphp
<a href="{{ url('datarekappdf') }}" class="btn btn-info">
  <i class="fas fa-file-pdf"></i> Unduh Pesanan Catering </a>

<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Rekap Data Pesanan Catering</div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    @foreach( $ar_judul as $jdl )
                        <th>{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    @foreach( $ar_judul as $jdl )
                        <th>{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($ar_formcatering as $formcatering)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $formcatering->nama }}</td>
                      <td>{{ $formcatering->catering }}</td>
                      <td>{{ $formcatering->jumlah }}</td>
                      <td>{{date('d-m-yy', strtotime($formcatering->tgl_kirim)) }}</td>
                      <td>{{ $formcatering->waktu }}</td>
                      <td>{{ $formcatering->alamat }}</td>
                      <td>{{ $formcatering->note }}</td>
                      <td>{{ $formcatering->status_pay }}</td>
                    </tr>
                  @endforeach  
                </tbody>
              </table>
          </div>
      </div>
  </div>
@else
    @include('auth.terlarang')
@endif 
@endsection