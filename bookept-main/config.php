<?php
//Development
$conn = mysqli_connect("127.0.0.1", "root","123456", "shop_db") or die('connection failed');
//fix tiếng Việt có dấu
mysqli_set_charset($conn, "utf8mb4");
?>