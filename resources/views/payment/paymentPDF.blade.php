@php
$no = 1;
$ar_judul = ['No','Nama Pemesan','Tanggal Bayar','Total Bayar','Status Bayar','Atas Nama'];        
@endphp
<h3 align="center">Daftar Pembayaran</h3>
        <table border="1" width="100%" cellspacing="0" align="center">
          <thead>
            <tr bgcolor="yellow">
            @foreach( $ar_judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
            </tr>
          </thead>
          <tbody>
          @foreach($ar_payment as $payment)  
            <tr>
             <td>{{ $no++ }}</td>
            <td>{{ $payment->nama }}</td>
            <td>{{date('d-m-yy', strtotime($payment->tgl_bayar)) }}</td>
            <td>Rp {{ number_format($payment->total_bayar, 0, ',', '.') }}</td>
            <td>{{ $payment->status_bayar }}</td>
            <td>{{ $payment->an }}</td>
            </tr>
          @endforeach  
          </tbody>
        </table>