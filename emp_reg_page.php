<?php
session_start();
include("server.php");
if (isset($_POST['registerButton'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sex = $_POST['sex'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $department = $_POST['department'];
  $salary = $_POST['salary'];
  $phonenum = $_POST['phonenum'];

  $insert = "INSERT INTO employee( empname, email, sex,age,address,department,salary,phonenum) VALUES ('$name','$email','$sex','$age','$address','$department','$salary','$phonenum')";
  $qry = mysqli_query($conn, $insert);
  echo "successsfully registered";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Registration form</title>
  <link rel="stylesheet" href="styles_emp_reg_page.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Sacramento&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>

<body>
  <div class="back">
    <div class="form-box">
    <h2>Enter the Employee details</h2>
      <form id="register" class="input-group" method="post">
        <input type="text" class="input-field" name="name" placeholder="Name" required />
        <input type="email" class="input-field" name="email" placeholder="Email" required />
        <input type="text" class="input-field" name="sex" placeholder="Sex" required />
        <input type="number" class="input-field" name="age" placeholder="Age" required />
        <input type="text" class="input-field" name="address" placeholder="Address" required />
        <input type="text" class="input-field" name="department" placeholder="Department" required />
        <input type="text" class="input-field" name="salary" placeholder="Salary" required />
        <input type="text" class="input-field" name="phonenum" placeholder="Phone Number" required />
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <button type="submit" class="submit-btn" name="registerButton">REGISTER
        </button>
        <p>&nbsp;</p>
      </form>
    </div>
  </div>

</body>

</html>


<script>
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";

  }

  function login() {
    x.style.left = "50px";
    y.style.left = "420px";
    z.style.left = "0px";

  }
</script>
</body>

</html>