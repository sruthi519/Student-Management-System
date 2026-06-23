<?php
session_start();

if(!isset($_SESSION['user']) || $_SESSION['role'] != 'staff'){
    header("Location: login.html");
    exit();
}

$conn = new mysqli("localhost","root","","studentdb");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Staff Dashboard</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="sidebar">
    <h2>Dashboard</h2>
    <a href="staff_dashboard.php">Home</a>
    <a href="add_student.php">Add Student</a>
    <a href="add_marks.php">Add Marks</a>
    <a href="add_attendance.php">Attendance</a>
    <a href="fees.php">Fees</a>
    <a href="logout.php">Logout</a>
</div>

<div class="main">

    <h1>K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>
    <h2>Welcome Staff: <?php echo $_SESSION['user']; ?></h2>

    <div class="cards">
        <div class="card">Students</div>
        <div class="card">Marks</div>
        <div class="card">Attendance</div>
        <div class="card">Fees</div>
    </div>

</div>

</body>
</html>