@php
$no = 1;
$ar_judul = ['No','Nama'];        
@endphp
 <h3 align="center">Daftar Kategori</h3>
        <table border="1" width="100%" cellspacing="0" align="center">
          <thead>
            <tr bgcolor="pink">
            @foreach( $ar_judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
          @foreach($ar_katcat as $katcat)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $katcat->nama }}</td>
            </tr>
          @endforeach  
          </tbody>
        </table>