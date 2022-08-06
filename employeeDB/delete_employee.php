<?php
session_start();
include("server.php");

if (isset($_POST['deleteEmployeeButton'])) {
  $empid = $_POST['empid'];

  $sql = " DELETE FROM employeeTable WHERE empid = '$empid' ";

  $query_run = mysqli_query($conn, $sql);

}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Delete Employee</title>
  <link rel="stylesheet" href="styles_delete_employee.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Sacramento&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>


<body>
<div class="banner">
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    <h1>EMPLOYEE DATABASE</h1>
</div>
  <div class="back">
    <div class="form-box">
      <h2>Enter the ID to delete</h2>
      <form id="deleteEmployee" class="input-group" method="post">
        <input type="text" class="input-field" name="empid" placeholder="ID" required>
        <button type="submit" class="submit-btn" name="deleteEmployeeButton">Delete</button>
      </form>
    </div>
  </div>
</body>

</html>

</body>

</html>