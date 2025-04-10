<?php
// Mengatur error reporting (opsional)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .card {
            background: #e2e2e2;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
        .card h2 {
            margin: 0;
            font-size: 1.5em;
        }
        .card p {
            margin: 5px 0;
        }
        .link {
            text-align: center;
            margin-top: 20px;
        }
        .link a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="card">
            <h2>Selamat Datang!</h2>
            <p>Ini adalah halaman dashboard Anda.</p>
        </div>
        <div class="card">
            <h2>Statistik Tugas</h2>
            <p>Total Tugas: <strong>10</strong></p>
            <p>Tugas Selesai: <strong>5</strong></p>
            <p>Tugas Belum Selesai: <strong>5</strong></p>
        </div>
        <div class="card">
            <h2>Aktivitas Terakhir</h2>
            <p>Anda telah menambahkan 3 tugas baru dalam 7 hari terakhir.</p>
        </div>
        <div class="card">
            <h2>Pengingat</h2>
            <p>Jangan lupa untuk menyelesaikan tugas Anda tepat waktu!</p>
        </div>
        <div class="link">
            <a href="views/todo.php">Lihat Daftar Tugas</a>
        </div>
    </div>
</body>
</html>