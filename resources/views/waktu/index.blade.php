@extends('layouts.index2')
@section('content')
@php
$no = 1;
$ar_judul = ['No','Jam','Action'];        
@endphp
<a href="{{ route('waktu.create') }}" class="btn btn-primary">Tambah</a>
<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Waktu Pengiriman</div>
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
                  @foreach($ar_waktu as $waktu)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $waktu->jam }}</td>
                      <td>
                          <form method="POST" action="{{ route('waktu.destroy',$waktu->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('waktu.show',$waktu->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('waktu.edit',$waktu->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
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


@endsection