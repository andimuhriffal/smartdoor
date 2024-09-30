<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Monitoring Keamanan Kunci Pintu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 20px 0;
            font-size: 16px;
            color: #333;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: #fff;
            font-weight: bold;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
        tr:hover td {
            background-color: #e0f7fa;
        }
        table thead th {
            border-top: 2px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Monitoring Keamanan Kunci Pintu</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Dosen</th>
                    <th>ID Kartu</th>
                    <th>Data Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rfidData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->id_card }}</td>
                        <td>{{ $data->created_at }}</td> <!-- Menambahkan kolom Created At -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
