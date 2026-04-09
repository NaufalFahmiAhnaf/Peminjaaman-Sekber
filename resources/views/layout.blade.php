<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Sekber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin:0;
            font-family: Arial;
            background:#f2f2f2;
        }

        .header {
            background:#d32f2f;
            color:white;
            padding:15px;
            text-align:center;
            font-weight:bold;
        }

        .container {
            padding:15px;
            margin-bottom:70px;
        }

        .card {
            background:white;
            padding:15px;
            border-radius:15px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
            margin-bottom:15px;
        }

        .btn {
            display:block;
            width:100%;
            padding:12px;
            margin-top:10px;
            border:none;
            border-radius:10px;
            font-size:16px;
        }

        .btn-primary { background:#1976d2; color:white; }
        .btn-success { background:#388e3c; color:white; }
        .btn-danger { background:#d32f2f; color:white; }

        .input {
            width:100%;
            padding:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:1px solid #ccc;
        }

        .bottom-nav {
            position:fixed;
            bottom:0;
            width:100%;
            background:white;
            display:flex;
            justify-content:space-around;
            border-top:1px solid #ccc;
            padding:10px 0;
        }

        .bottom-nav a {
            text-decoration:none;
            color:#333;
            font-size:14px;
        }

        .badge {
            padding:5px 10px;
            border-radius:10px;
            color:white;
            font-size:12px;
        }

        .bg-success { background:green; }
        .bg-warning { background:orange; }
        .bg-danger { background:red; }
    </style>
</head>
<body>

<div class="header">PEMINJAMAN SEKBER</div>

<div class="container">
    @yield('content')
</div>

<div class="bottom-nav">
    <a href="/home">🏠 Home</a>
    <a href="/form">➕ Tambah</a>
    <a href="/cek">📅 Cek</a>
    <a href="/riwayat">📋 Riwayat</a>
</div>

</body>
</html>