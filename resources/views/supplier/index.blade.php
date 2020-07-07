@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama', 'No Telepon', 'Alamat','Action'];        
@endphp
<a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah</a>
<a href="{{ url('supplierpdf') }}" class="btn btn-info">
  <i class="fas fa-file-pdf"></i> Unduh supplier </a>

<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data supplier</div>
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
                  @foreach($ar_supplier as $supplier)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $supplier->nama }}</td>
                      <td>{{ $supplier->no_telp }}</td>
                      <td>{{ $supplier->alamat }}</td>

                      <td>
                          <form method="POST" action="{{ route('supplier.destroy',$supplier->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('supplier.show',$supplier->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('supplier.edit',$supplier->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
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