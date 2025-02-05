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
            background-color: #5CCEFF;
        }

        .logo img {
            width: 150px;
            display: block;
            margin: auto;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #D9D9D9;
            color: white;
            padding: 10px;
            border-radius: 10px;
        }

        .navbar a {
            padding: 10px;
            text-decoration: none;
            color: black;
            font-weight: italic;
            border-radius: 5px;
            border-color: #ddd;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .container {
            max-width: 95%;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            background-image: url('logo/1.png');
            background-size: 400px;
            background-position: center;
            background-repeat: no-repeat; 
        }
        .form-group {
            display: flex;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }
        .form-group label {
            font-size: 20px;
            margin-left:20%;
            margin-top: 8px;
        }
        .form-group input {
            width: 30%;
            padding: 8px;
            margin-left:20%;
            border-radius: 8px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cancel {
            margin-right: 50px;
            background: #5cceff;
            color: white;
        }
        .save {
            margin-left: 50px;
            background: #5cceff;
            color: white;
        }
        footer{
        background: #ccc;
        color: #555;
        padding: 15px;
        text-align: center;
        margin: 0;
        }

    </style>
</head>
<body>
    <div class="logo">
            <img src="logo/dom-san.png" alt="logo">
        </div>
    <div class="container">
        <div class="navbar">
            <a href="#">Dashboard</a>
            <a href="#">Data Siswa</a>
            <a href="#">Cek Riwayat Nasabah</a>
        </div>
        <div class="form-group">
                <label>Nama</label>
                <input type="text" name="Nama">
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="Number" name="Kelas">
            </div>
            <div class="form-group">
                <label>Saldo</label>
                <input type="number" name="Saldo">
            </div>
            <div class="buttons">
                <button class="cancel">Batal</button>
                <button class="save">Simpan</button>
            </div>
    </div>
    <footer>
        Copyright &copy by <b>Fauzeet</b> Official
    </footer>
</body>
</html>
