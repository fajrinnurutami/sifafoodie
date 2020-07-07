@php
$no = 1;
$ar_judul = ['No','Nama', 'No. Telepon', 'Alamat'];        
@endphp
 <h3 align="center">Daftar Supplier</h3>
        <table border="1" width="100%" cellspacing="0" align="center">
          <thead>
            <tr bgcolor="yellow">
            @foreach( $ar_judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
          @foreach($ar_supplier as $supplier)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $supplier->nama }}</td>
              <td>{{ $supplier->no_telp }}</td>
              <td>{{ $supplier->alamat }}</td>
            </tr>
          @endforeach  
          </tbody>
        </table>