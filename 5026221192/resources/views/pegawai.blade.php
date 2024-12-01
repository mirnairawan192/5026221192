<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $pegawai)  <!-- Ganti $pegawais menjadi $pegawai -->
            <tr>
                <td>{{ $pegawai->pegawai_id }}</td>
                <td>{{ $pegawai->pegawai_nama }}</td>
                <td>{{ $pegawai->pegawai_jabatan }}</td>
                <td>{{ $pegawai->pegawai_umur }}</td>
                <td>{{ $pegawai->pegawai_alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
