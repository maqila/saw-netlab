<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Asisten Laboratorium</title>

    <style>
        @page {
            size: landscape;
        }
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Asisten Laboratorium</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">NIM</th>
                <th>NAMA</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
                <th>EMAIL</th>
                <th>No. Handphone</th>
                <th>Laboratorium</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->nim }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tempat }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->no_hp }}</td>
                    <td>{{ $row->lab->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>