<?php
$conn = new mysqli("localhost","root","","studentdb");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Fees</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<h1 class="title">K.RAMAKRISHNAN COLLEGE OF ENGINEERING</h1>

<div class="container">

<h2>Fees Details</h2>

<form method="post">
    <input type="number" name="total" placeholder="Total Fee" required><br>
    <input type="number" name="paid" placeholder="Paid Amount" required><br>
    <button type="submit">Save</button>
</form>

<?php
if(isset($_POST['total'])){
    $total = $_POST['total'];
    $paid = $_POST['paid'];

    $conn->query("INSERT INTO fees (student_id,total_fee,paid) VALUES ($id,$total,$paid)");

    echo "<p style='color:green;'>Fees Saved</p>";
    echo "<h3>Process Completed ✔</h3>";
}
echo "<br><a href='logout.php'>
        <button>Logout & Go to Login</button>
      </a>";
?>

</div>

</body>
</html>