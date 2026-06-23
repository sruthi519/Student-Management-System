<?php
$conn = new mysqli("localhost","root","","studentdb");

// student
$student = password_hash("123", PASSWORD_DEFAULT);

// staff
$staff = password_hash("1234", PASSWORD_DEFAULT);

$conn->query("INSERT INTO users (email,password,role) VALUES ('student1','$student','student')");
$conn->query("INSERT INTO users (email,password,role) VALUES ('staff1','$staff','staff')");

echo "DONE";
?>