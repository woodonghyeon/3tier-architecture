<?php
$servername = "mysql";
$username = "test_user";
$password = "test_user_password";
$dbname = "web_test_db";

// MySQL 연결 확인
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>

