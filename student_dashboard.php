<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.html");
}

$conn = new mysqli("localhost","root","","studentdb");
?>

<!DOCTYPE html>
<html>
<head>
<title>Staff Dashboard</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="title">K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>

<div class="container">

<h2>Staff Dashboard</h2>

<h3>Courses & Faculty</h3>

<table>
<tr>
<th>Course</th>
<th>Faculty</th>
<th>Subject</th>
</tr>

<?php
$res = $conn->query("
SELECT courses.course_name, faculty.name, faculty.subject
FROM faculty
JOIN courses ON faculty.course_id = courses.id
");

while($row = $res->fetch_assoc()){
    echo "<tr>
            <td>{$row['course_name']}</td>
            <td>{$row['name']}</td>
            <td>{$row['subject']}</td>
          </tr>";
}
?>

</table>

<br>

<a href="logout.php">
    <button>Logout</button>
</a>

</div>

</body>
</html>