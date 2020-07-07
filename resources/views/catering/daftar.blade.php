@extends('layouts.index2')
@section('content')
@php
$no = 1;
$ar_judul = ['No','Nama','Harga','Kategori','Foto','Detail'];        
@endphp
  <div class="card-header"><i class="fas fa-table mr-1"></i>Data Menu Catering</div>
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
                  @foreach($ar_catering as $catering)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $catering->nama }}</td>
                      <td>{{ $catering->harga }}</td>
                      <td>{{ $catering->katcat }}</td>
                      @if(!empty($catering->foto))
                      <td><img src="{{asset('assets/img/catering')}}/{{ $catering->foto }}" height="20%" /></td>
                      @else
                      <td><img src="{{asset('assets/img')}}/nophoto.png" height="80%" /></td>
                      @endif
                      <td>
                       <a href="{{ route('catering.show',$catering->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>&nbsp;
                    </td>
                    </tr>
                  @endforeach  
                </tbody>
              </table>
          </div>
      </div>
  </div>


@endsection