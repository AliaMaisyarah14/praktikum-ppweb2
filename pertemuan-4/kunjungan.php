<?php
require_once("bukuTamu.php");
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $bukutamu = new BukuTamu();
    $bukutamu->timestamp = date('Y-m-d H:i:s');
    $bukutamu->fullname = $_POST['fullname'];
    $bukutamu->email = $_POST['email'];
    $bukutamu->message = $_POST['message'];

    $_SESSION['bukutamu'][] = $bukutamu;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:rgb(120, 106, 113);
        }
        .container {
            margin-top: 50px;
        }
        table {
            background-color:rgb(220, 24, 145);
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="text-center mb-4">DAFTAR KUNJUNGAN</h4>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Timestamp</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['bukutamu'])): ?>
                    <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                    <tr>
                        <td><?= htmlspecialchars($buku->timestamp) ?></td>
                        <td><?= htmlspecialchars($buku->fullname) ?></td>
                        <td><?= htmlspecialchars($buku->email) ?></td>
                        <td><?= htmlspecialchars($buku->message) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data tamu.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
