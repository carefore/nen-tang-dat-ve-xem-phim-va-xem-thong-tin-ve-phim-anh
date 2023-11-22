<?php
// Kết nối tới cơ sở dữ liệu SQL (đã cấu hình trước)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_database";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$movieName = $_POST['movieName'];
$customerName = $_POST['customerName'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO bookings (movie_name, customer_name, email, phone) VALUES ('$movieName', '$customerName', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Đặt vé thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
