<?php
$conn = new mysqli("localhost","root","","studentdb");
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="title">K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>

<div class="container">

<h2>Add Student</h2>

<form method="post">
    <input type="text" name="student_no" placeholder="Student No" required><br>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="department" placeholder="Department" required><br>
    <button type="submit">Add Student</button>
</form>

<?php
if(isset($_POST['student_no'])){
    $no = $_POST['student_no'];
    $name = $_POST['name'];
    $dept = $_POST['department'];

    $conn->query("INSERT INTO students (student_no,name,department) VALUES ('$no','$name','$dept')");

    $student_id = $conn->insert_id;

    echo "<p style='color:green;'>Student Added Successfully</p>";

    echo "<a href='add_marks.php?id=$student_id'>
            <button>Next → Add Marks</button>
          </a>";
}
?>

</div>

</body>
</html>