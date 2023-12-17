<?php
// Kết nối cơ sở dữ liệu
$mysqli = new mysqli("hostname", "username", "password", "database");

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Nhận dữ liệu từ form đăng ký
$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);
$email = $mysqli->real_escape_string($_POST['email']);

// Mã hóa mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Thêm người dùng vào cơ sở dữ liệu
$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

if ($mysqli->query($query) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
