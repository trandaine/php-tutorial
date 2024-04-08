<?php
// Lệnh include, include_once, require, require_once dùng để import file php khác vào php đang chạy
// Cú pháp chung: include 'đường_dẫn_file'; hoặc include('đường_dẫn_file');

echo "Cau lenh include <br>";
include 'while-loop.php'; // Include file while-loop.php vào file hiện tại
include_once 'while-loop.php'; // Include file while-loop.php vào file hiện tại, nhưng chỉ include 1 lần duy nhất
// Neu file while-loop.php khong ton tai thi cac cau lenh duoi van chay

// Cau lenh require:
require 'while-loop.php'; // Include file while-loop.php vào file hiện tại, nếu file không tồn tại sẽ báo lỗi
require_once 'while-loop.php'; // Include file while-loop.php vào file hiện tại, nhưng chỉ include 1 lần duy nhất
// Neu file while-loop.php khong ton tai thi se bao loi va cac cau lenh duoi se khong chay