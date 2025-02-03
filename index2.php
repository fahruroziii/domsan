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
            background-color: #5CCEFF;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
        }
        .profile {
            text-align: left;
        }
        .saldo {
            background: #5CCEFF;
            padding: 15px;
            border-radius: 10px;
        }
        .content {
            margin-top: 20px;
            padding: 20px;
            background: #5CCEFF;
            border-radius: 10px;
        }
        .partners {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .partners img {
            width: 150px;
            border-radius: 10px;
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
        <div class="content">
            <h3>PENDAHULUAN APLIKASI</h3>
            <p>Sejumlah sekolah di pesantren kini menerapkan sistem pembayaran tanpa uang tunai menggunakan aplikasi SIMPEI. Aplikasi ini merupakan bagian dari DOM-SAN yang membantu transaksi keuangan santri dengan mudah dan aman.</p>
            <img src="simpei-cards.png" alt="Kartu Simpei" width="200">
        </div>
        <div class="partners">
            <img src="logo/bmd.png" alt="BMD Syariah">
            <img src="logo/bsi.png" alt="Bank Syariah Indonesia">
        </div>
    </div>
</body>
</html>