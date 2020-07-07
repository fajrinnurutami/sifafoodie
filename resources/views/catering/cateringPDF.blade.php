@php
$no = 1;
$ar_judul = ['No','Nama','Harga','Kategori','Foto'];        
@endphp
<h3 align="center">Daftar Menu</h3>
        <table border="1" width="100%" cellspacing="0" align="center">
          <thead>
            <tr bgcolor="yellow">
            @foreach( $ar_judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
          @foreach($ar_catering as $catering)  
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $catering->nama }}</td>
            <td>Rp {{ number_format($catering->harga, 0, ',', '.') }}</td>
            <td>{{ $catering->katcat }}</td>
            <td>
                @if(!empty($catering->foto))
                <img src="{{asset('assets/img/catering')}}/{{ $catering->foto }}" height="10%" /></td> />
                @else
                <img src="{{asset('assets/img')}}/nocover.png" />
                @endif
              </td>
          @endforeach  
          </tbody>
        </table>