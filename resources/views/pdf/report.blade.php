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
        }
    </style>
    <title>{{ $range  }}</title>
</head>
<body>
    Rentang waktu: {{ $range }}
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Instansi</th>
                <th>Keperluan</th>
                <th>No Telp</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $x)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $x->name }}</td>
                    <td>{{ $x->institute  }}</td>
                    <td>{{ $x->needs }}</td>
                    <td>{{ $x->notlp  }}</td>
                    <td>{{ $x->created  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
