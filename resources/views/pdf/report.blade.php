<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%
        }
        th, td{
            padding: 8px;
        }
    </style>
    <title>{{ $range  }}</title>
</head>
<body>
    <center>
        <h2 class="text-center">Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Denpasar</h2>
        {{-- <hr /> --}}
        <h3>BUKU TAMU</h3>
    </center>
 
    {{ $range }}
    <br><br>
    <table style="text-align: left;" class="text-center">
        <thead>
            <tr>
                <th style="width: 25px;">No</th>
                <th style="width:80px;">Tanggal</th>
                <th>Nama Tamu</th>
                <th>Bidang</th>
                <th>Unit Kerja/Instansi</th>
                <th style="width:250px;">Keperluan</th>
                <th>No Telepon</th>  
                <th>Tanda Tangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $x)
                <tr>
                    <td style="text-align: center">{{ $loop->iteration }}</td>
                    <td>{{\Carbon\Carbon::parse($x->created)->translatedFormat('d-m-Y H:i:s')}}</td>
                    <td>{{ $x->name }}</td>
                    <td>{{ $x->sector }}</td>
                    <td>{{ $x->institute  }}</td>
                    <td>{{ $x->needs }}</td>
                    <td>{{ $x->notlp  }}</td>                   
                    <td>
                        <img src="{{ $x->signature }}" alt="ttd" style="max-width: 100px">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
