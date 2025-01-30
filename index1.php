<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM-SAN Dashboard</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #1e90ff;
            color: white;
            padding: 1rem;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            margin: 0 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header img {
            width: 100px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #1e90ff;
            color: white;
        }

        .action-buttons button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 0.2rem;
            color: white;
        }

        .btn-tarik {
            background-color: #ff6347;
        }

        .btn-tabung {
            background-color: #4caf50;
        }

        .btn-riwayat {
            background-color: #1e90ff;
        }

        .btn-edit {
            background-color: #ffa500;
        }

        .btn-hapus {
            background-color: #d32f2f;
        }

        .search {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 1rem;
        }

        .search input {
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-button {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>



<div class="container">
    <div class="header">
        <img src="" alt="">
        
    </div>
    <div class="navbar">
        <a href="#">Dashboard</a>
        <a href="#">Data Siswa</a>
        <a href="#">Cek Riwayat Nasabah</a>
    </div>
    <h1>Data Siswa</h1>
    <a href="#" class="add-button">+</a>

    <div class="search">
        <input type="text" placeholder="Search">
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>No. Induk</th>
                    <th>Kelas</th>
                    <th>Saldo</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="profile1.jpg" alt="Foto" width="40"></td>
                    <td>Devinda Amelia</td>
                    <td>10</td>
                    <td>10</td>
                    <td>150,000.00</td>
                    <td>
                        <button class="btn-tarik">Tarik</button>
                        <button class="btn-tabung">Tabung</button>
                        <button class="btn-riwayat">Riwayat</button>
                    </td>
                    <td class="action-buttons">
                        <button class="btn-edit">Edit</button>
                        <button class="btn-hapus">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
