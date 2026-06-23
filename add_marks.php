<?php
$conn = new mysqli("localhost","root","","studentdb");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Marks</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="title">K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>

<div class="container">

<h2>Add Marks</h2>

<form method="post">
    <input type="text" name="subject" placeholder="Subject" required><br>
    <input type="number" name="marks" placeholder="Marks" required><br>
    <button type="submit">Add Marks</button>
</form>

<?php
if(isset($_POST['subject'])){
    $sub = $_POST['subject'];
    $marks = $_POST['marks'];

    $conn->query("INSERT INTO marks (student_id,subject,marks) VALUES ($id,'$sub',$marks)");

    echo "<p style='color:green;'>Marks Added</p>";

    echo "<a href='add_attendance.php?id=$id'>
            <button>Next → Add Attendance</button>
          </a>";
}
?>

</div>

</body>
</html>