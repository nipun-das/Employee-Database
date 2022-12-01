<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="styles_welcome_page.css" />
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
            <form id="login" action="" class="input-group" method="post">
                <?php
                session_start();
                include("server.php");
                if (isset($_POST['registerEmployeeButton'])) {
                    header("location: emp_reg_page.php");
                }
                if (isset($_POST['viewEmployeeButton'])) {
                    header("location: display_table.php");
                }
                if (isset($_POST['deleteEmployeeButton'])) {
                    header("location: delete_employee.php");
                }
                if (isset($_POST['logoutButton'])) {
                    header("location: index.php");
                }
                
                echo '
            <h2> ' . "Welcome"."&nbsp;" . '</h2> ';

                echo "
            <h3> " . $_SESSION['username'] . "</h3>";


                ?>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                

                <button type="submit" name="registerEmployeeButton" class="submit-btn" method="post">Register a new employee</button>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <button type="submit" class="submit-btn" name="viewEmployeeButton">View Employees</button>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <button type="submit" class="submit-btn" name="deleteEmployeeButton">Delete Employee</button>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <button type="submit" class="logout-btn" name="logoutButton">Logout</button>
            </form>
        </div>
    </div>
</body>

</html>