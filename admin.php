<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Rental Kamera Mika</title>
</head>
<body>
    <h1>Data Pesanan</h1>
    <pre>
<?php
if (file_exists('orders.txt')) {
    echo file_get_contents('orders.txt');
} else {
    echo "Belum ada pesanan.";
}
?>
    </pre>
</body>
</html>
