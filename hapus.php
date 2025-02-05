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

        .container {
            max-width: 95%;
            margin: 2rem auto;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .content {
            width: 16%;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .success-icon {
            width: 65px;
            font-size: 50px;
            color: white;
            background-color: #5cceff;
            padding: 10px;
            border-radius: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        .content h2 {
            color: #5cceff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .content p {
            font-style: italic;
            color: #5cceff;
            display: flex;
            justify-content: center;
            margin-bottom: 100px;
        }
        .content button {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 8px;
            margin: 0 0.2rem;
            color: white;
        }
        .btn-aksi {
            background-color: #5cceff;
        }

    </style>
</head>
<body>
    <div class="logo">
            <img src="logo/dom-san.png" alt="logo">
        </div>
    <div class="container">
        <div class="content">
            <div class="success-icon">✔</div>
            <h2>Success!</h2>
            <p>Riwayat anda telah dihapus</p>
            <button class="btn-aksi">Go Back</button>
        </div>
    </div>
</body>
</html>
