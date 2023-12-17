<?php
// index.php - Trang chủ

// Kết nối cơ sở dữ liệu (nếu cần)
$mysqli = new mysqli("hostname", "username", "password", "database");

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Lấy dữ liệu từ cơ sở dữ liệu (ví dụ: bài viết mới nhất)
$query = "SELECT title, content FROM posts ORDER BY created_at DESC LIMIT 1";
$result = $mysqli->query($query);
$latestPost = $result->fetch_assoc();

// Đóng kết nối cơ sở dữ liệu
$mysqli->close();

// Phục vụ nội dung HTML
echo "<h1>Welcome to My Website</h1>";
if ($latestPost) {
    echo "<h2>" . $latestPost['title'] . "</h2>";
    echo "<p>" . $latestPost['content'] . "</p>";
} else {
    echo "<p>No posts to display.</p>";
}
?>
