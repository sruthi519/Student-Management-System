<?php
session_start();

$conn = new mysqli("localhost","root","","studentdb");

$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if($result->num_rows > 0){
    $row = $result->fetch_assoc();

    $_SESSION['user'] = $username;
    $_SESSION['role'] = $row['role'];

    if($row['role'] == 'staff'){
        header("Location: staff_dashboard.php");
    } else {
        header("Location: student_dashboard.php");
    }
} else {
    echo "Invalid Login";
}
?>