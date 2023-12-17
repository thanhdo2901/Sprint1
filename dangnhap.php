<?php
session_start();

// Kết nối cơ sở dữ liệu
$mysqli = new mysqli("hostname", "username", "password", "database");

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Nhận dữ liệu từ form đăng nhập
$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);

// Kiểm tra thông tin người dùng
$query = "SELECT id, username, password FROM users WHERE username = '$username'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Đăng nhập thành công
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['username'];
        echo "Logged in successfully";
    } else {
        // Mật khẩu không đúng
        echo "Invalid password";
    }
} else {
    // Không tìm thấy tài khoản
    echo "User not found";
}

$mysqli->close();
?>
