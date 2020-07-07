@extends('layouts.index2')
@section('content')
@if(Auth::user()->role == 'admin')
@php
$no = 1;
$ar_judul = ['No','Nama Bank','No. Rekening','Nama Pemilik','Action'];        
@endphp
<a href="{{ route('bank.create') }}" class="btn btn-primary">Tambah</a>
<br/><br/>
<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Bank bank</div>
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
                  @foreach($ar_bank as $bank)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $bank->nama }}</td>
                      <td>{{ $bank->norek }}</td>
                      <td>{{ $bank->pemilik }}</td>
                      <td>
                          <form method="POST" action="{{ route('bank.destroy',$bank->id)}}">
                          @csrf
                          @method('DELETE')
                            <a href="{{ route('bank.show',$bank->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{ route('bank.edit',$bank->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
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