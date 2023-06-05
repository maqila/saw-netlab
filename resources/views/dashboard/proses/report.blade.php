<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Proses Perhitungan</title>

    <style>
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
    <h1>Bobot Preferensi</h1>
    <table align="center">
        <thead>
            <tr>
                <th>jam Mengajar (Benefit)</th>
                <th>Public Speaking (Benefit)</th>
                <th>Jumlah Asistensi (Benefit)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,50</td>
                <td>2,50</td>
                <td>0,90</td>
            </tr>
        </tbody>
    </table>
    <br>
    <h1>Matrik Keputusan</h1>
    <table align="center">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>A01</th>
                <th>A02</th>
                <th>A03</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maqila Sulaiman Abu Zakaria</td>
                <td>2,00</td>
                <td>4,00</td>
                <td>3,00</td>
            </tr>
            <tr>
                <td>Cornelia Luba Tara Boro</td>
                <td>3,00</td>
                <td>4,00</td>
                <td>2,00</td>
            </tr>
            <tr>
                <td>Yohanes Yudha Saputra Bangko</td>
                <td>2,00</td>
                <td>3,00</td>
                <td>4,00</td>
            </tr>
        </tbody>
    </table>
    <br>
    <h1>Matrik Ternormalisasi</h1>
    <table align="center">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>A01</th>
                <th>A02</th>
                <th>A03</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maqila Sulaiman Abu Zakaria</td>
                <td>0.66666666666667</td>
                <td>1</td>
                <td>0.75</td>
            </tr>
            <tr>
                <td>Cornelia Luba Tara Boro</td>
                <td>1</td>
                <td>1</td>
                <td>0,5</td>
            </tr>
            <tr>
                <td>Yohanes Yudha Saputra Bangko</td>
                <td>0.66666666666667</td>
                <td>0,75</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    <br>
    <h1>Perhitungan</h1>
    <table align="center">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>A01</th>
                <th>A02</th>
                <th>A03</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>0,99</td>
            <td>2,50</td>
            <td>0,67</td>
          </tr>
          <tr>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,50</td>
            <td>2,50</td>
            <td>0,45</td>
          </tr>
          <tr>
            <td>Yohanes Yudha Saputra</td>
            <td>0,99</td>
            <td>1,87</td>
            <td>0,9</td>
          </tr>
        </tbody>
    </table>
    <br>
    <h1>Preferensi</h1>
    <table align="center">
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>Preferensi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>1,3866</td>
          </tr>
          <tr>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,4833</td>
          </tr>
          <tr>
            <td>Yohanes Yudha Saputra</td>
            <td>1,2533</td>
          </tr>
        </tbody>
    </table>
    <br>
    <h1>Rangking</h1>
    <table align="center">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Alternatif</th>
                <th>Preferensi</th>
            </tr>
        </thead>
        <tbody>
           <tr>
            <td>1</td>
            <td>Cornelia Luba Tara Boro</td>
            <td>1,4833</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Maqila Sulaiman Abu Zakaria</td>
            <td>1,3866</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Yohanes Yudha Saputra</td>
            <td>1,2533</td>
          </tr>
        </tbody>
    </table>
</body>
</html>