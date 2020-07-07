@php
$no = 1;
$ar_judul = ['No','Nama','Pesanan','Jumlah','Tanggal Antar','Waktu Antar','Alamat','Note','Status Bayar'];        
@endphp
<h3 align="center">Data Rekap Pemesanan</h3>
        <table border="1" width="100%" cellspacing="0" align="center">
          <thead>
            <tr bgcolor="yellow">
            @foreach( $ar_judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
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
                      <td>{{ $formcatering->note }}</td>
                      <td>{{ $formcatering->status_pay }}</td>
                    </tr>
                  @endforeach  
            </tbody>
        </table>