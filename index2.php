<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM-SAN - Dompet Santri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: white;
        }
        .container {
            width: 99%;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
        }
        .profile {
            text-align: left;
            width: 220px;
            background: #5CCEFF;
            padding: 10px;
            border-radius: 10px;
            margin-right: 30%;
        }
        .saldo {
            width: 150px;
            background: #5CCEFF;
            padding: 10px;
            border-radius: 10px;
            margin-left: 35%;
        }
        .garis-horizontal {
            border-top: 5px solid #5cceff;
            border-radius: 10px;
            width: 55%;
            margin-left: 44%;
            margin-bottom: 10px;
        }
        .pendahuluan {
            display: flex;
            align-items: center;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 20px;
            background: #5CCEFF;
            border-radius: 10px;
        }
        .pendahuluan h4 {
            font-family: sans-serif;
            font-style: italic;
            text-align: left;
            margin-left: 20%;
        }
        .pendahuluan p {
            font-family: sans-serif;
            font-style: italic;
            font-size: 15px;
            text-indent: 30px;
            text-align: left;
            width: 70%;
        }
        .pendahuluan img{
            align-items: center;
            width: 110px;
            padding: 0;
            margin-right: 70px;
            border-radius: 5px;
        }
        .riwayat {
            border-top: 25px solid #f2f2f2;
            border-radius: 5px;
            width: 50%;
            margin-top: 10px;
            margin-left: 10px;
        }
        .partners {
            width: 30%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            border-radius: 10px;
            background: #f2f2f2;
            padding: 5px;
            margin-top: 110px;
            margin-left: 15%;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .partners img {
            width: 150px;
            border-radius: 10px;
        }
        footer{
        background: #ccc;
        color: #555;
        padding: 15px;
        text-align: center;
        margin-top: 5px;
        margin-bottom: 1px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <p><strong>Username:</strong> ABCDEFG</p>
                <p><strong>Kelas:</strong> XI RPL</p>
            </div>
            <img src="logo/dom-san.png" alt="DOM-SAN Logo" width="100">
            <div class="saldo">
                <p><strong>Saldo:</strong></p>
            </div>
        </div>
        <div class="garis-horizontal"></div>
        <div class="pendahuluan">
            <div>
                <h4>PENDAHULUAN APLIKASI</h4>
                <p>Sekolah SMK (Sekolah Menengah Kejuruan) yang berada di pesantren kami mempunyai labolatorium bank mini yang mempunyai 2 jenis tabungan yaitu SIMPEL (Simpanan Pelajar) & SIMKAH (Simpanan Berkah).</p>
                <p>Dengan itu kami merancang aplikasi yang berjudul DOM-SAN (Dompet Santri), Aplikasi ini memudahkan wali santri untuk ,memantau keuangan anak di pondok, Jadi bisa meminimalisir pemborosan.</p>
            </div>
            <img src="logo/simpel.jpg" alt="simpel">
            <img src="logo/simkah.jpg" alt="simkah">
        </div>
        <div class="riwayat">
        </div>
        <div class="partners">
            <img src="logo/bmd.png" alt="BMD Syariah">
            <img src="logo/bsi.png" alt="Bank Syariah Indonesia">
        </div>
        <footer>
        Copyright &copy; <b>Fauzeet</b> Official
        </footer>
    </div>
</body>
</html>