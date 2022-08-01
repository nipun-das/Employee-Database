<?php
session_start();
include("server.php");
if (isset($_POST['signUpButton'])) {
  $username = $_POST['adusername'];
  $email = $_POST['ademail'];
  $password = $_POST['adpassword'];

  $insert = "INSERT INTO administrator( admusername, admemail, admpassword) VALUES ('$username','$email','$password')";
  $qry = mysqli_query($conn, $insert);
  
}
if (isset($_POST['loginButton'])) {
  $username  = $_POST['username'];
  $password  = $_POST['password'];

  $sql = " SELECT * FROM administrator WHERE admusername = '$username' ";
  $qry = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($qry)) {
    $dbusername = $row['admusername'];
    $dbpassword = $row['admpassword'];
    if ($username == $dbusername && $password == $dbpassword) {
     
      // sending username to welcome page      
      $_SESSION['username'] = $username; 
      //$username  = $_POST['username'];
      header("location: welcome_page.php");
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login Registration form</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Sacramento&display=swap" rel="stylesheet" />
</head>

<!-- for preventing back button to redirect to homepage -->
<script type="text/javascript">
    function preventBack() {
        window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null;
    }
</script>

<body>
  <div class="back">
    <div class="form-box">
      <div class="btn-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>
      </div>

      <form id="login" class="input-group" method="post">
        <input type="text" class="input-field" name="username" placeholder="Enter User Name" required>
        <input type="password" class="input-field" name="password" placeholder="Enter password" required>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <button type="submit" name="loginButton" class="submit-btn">Log in</button>
      </form>

      <form id="registerAdmin" class="input-group" method="post">
        <input type="text" class="input-field" name="adusername" placeholder="User Name" required>
        <input type="email" class="input-field" name="ademail" placeholder="Email" required>
        <input type="password" class="input-field" name="adpassword" placeholder="Password" required>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <button type="submit" class="submit-btn" name="signUpButton">Register new admin</button>
      </form>
    </div>
  </div>
</body>

</html>

<script>
  var x = document.getElementById("login");
  var y = document.getElementById("registerAdmin");
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