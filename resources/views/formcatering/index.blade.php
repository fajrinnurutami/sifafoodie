@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama','Pesanan','Jumlah','Tanggal Antar','Waktu Antar','Alamat','Email Konfirmasi','Status Bayar','Action'];        
@endphp
<br/><br/>
 <main>                                                             
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Pesanan Catering</div>
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
                      <td>{{ $formcatering->status_email }}</td>
                      <td>{{ $formcatering->status_pay }}</td>
                      <td>
                          <form method="POST" action="{{ route('formcatering.destroy',$formcatering->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('formcatering.show',$formcatering->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('formcatering.edit',$formcatering->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
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
  </div>
</main>
@else
    @include('auth.terlarang')
@endif 
@endsection