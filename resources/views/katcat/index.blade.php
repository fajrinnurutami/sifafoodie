@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama','Action'];        
@endphp
<a href="{{ route('katcat.create') }}" class="btn btn-primary">Tambah</a>
<a href="{{ url('katcatpdf') }}" class="btn btn-info">
  <i class="fas fa-file-pdf"></i> Unduh Kategori </a>
>
<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Kategori Catering</div>
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
                  @foreach($ar_katcat as $katcat)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $katcat->nama }}</td>
                      <td>
                          <form method="POST" action="{{ route('katcat.destroy',$katcat->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('katcat.show',$katcat->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('katcat.edit',$katcat->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
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