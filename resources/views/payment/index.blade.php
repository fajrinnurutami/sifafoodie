@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama Pemesan','Tanggal Bayar','Status Bayar','Atas Nama','Bukti Bayar','Action'];        
@endphp
<a href="{{ route('payment.create') }}" class="btn btn-primary">Tambah</a>
<a href="{{ url('paymentpdf') }}" class="btn btn-info">
  <i class="fas fa-file-pdf"></i> Unduh Pembayaran </a>

<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Pembayaran</div>
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
                  @foreach($ar_payment as $payment)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $payment->nama }}</td>
                      <td>{{date('d-m-yy', strtotime($payment->tgl_bayar)) }}</td>
                      <td>{{ $payment->status_bayar }}</td>
                      <td>{{ $payment->an }}</td>
                      @if(!empty($payment->bukti))
                      <td><img src="{{asset('assets/img/bukti')}}/{{ $payment->bukti }}" height="10%" /> </td>
                      @else
                      <td><img src="{{asset('assets/img')}}/nophoto.png" width="50%" /> </td>
                      @endif
                      <td>
                          <form method="POST" action="{{ route('payment.destroy',$payment->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('payment.show',$payment->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('payment.edit',$payment->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                            <button type="submit" onclick="return confirm('Yakin dihapus')" class="btn btn-danger">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </form>
                      </td>
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