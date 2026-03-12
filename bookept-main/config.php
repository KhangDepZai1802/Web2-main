<?php
//Development
// $conn = mysqli_connect('localhost:3325', 'root', '', 'shop_db') or die('connection failed');
//Production
$conn = mysqli_connect("127.0.0.1", "root","", "shop_db") or die('connection failed');
//fix tiếng Việt có dấu
mysqli_set_charset($conn, "utf8mb4");
?>