<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $camera = $_POST['camera'];
    $duration = $_POST['duration'];
    $orderData = "Kamera: $camera, Durasi: $duration hari\n";

    file_put_contents('orders.txt', $orderData, FILE_APPEND);

    echo "Pesanan Anda telah diterima!";
} else {
    echo "Metode permintaan tidak valid.";
}
?>
