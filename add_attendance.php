<?php
$conn = new mysqli("localhost","root","","studentdb");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Attendance</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="title">K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>

<div class="container">

<h2>Add Attendance</h2>

<form method="post">
    <input type="text" name="subject" placeholder="Subject" required><br>
    <input type="number" name="attendance" placeholder="Attendance %" required><br>
    <button type="submit">Add Attendance</button>
</form>

<?php
if(isset($_POST['subject'])){
    $sub = $_POST['subject'];
    $att = $_POST['attendance'];

    $conn->query("INSERT INTO attendance (student_id,subject,attendance_percent) VALUES ($id,'$sub',$att)");

    echo "<p style='color:green;'>Attendance Added</p>";

    echo "<a href='fees.php?id=$id'>
            <button>Next → Fees</button>
          </a>";
}
?>

</div>

</body>
</html>