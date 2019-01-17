<?php
require 'lib/duongdan.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home.html';
$path = "{$page}.php";
if (file_exists($path)) {
    require $path;
} else {
    echo "Đường dẫn không tồn tại";
}