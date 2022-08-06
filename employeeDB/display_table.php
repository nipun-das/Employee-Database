<html>
<link rel="stylesheet" href="styles_display_table.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Sacramento&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:wght@200&display=swap" rel="stylesheet">
<title>Employee Details</title>

<body>
    <div class="banner">
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <h1>EMPLOYEE DATABASE</h1>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email-ID</th>
            <th>Age </th>
            <th>Address</th>
            <th>Sex</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Phone Number</th>
        </tr>
        <?php

        include("server.php");
        error_reporting(0);
        $show = "SELECT * FROM employeeTable";
        $qry = mysqli_query($conn, $show);
        $noofrows = mysqli_num_rows($qry);

        if ($noofrows != 0) {
            while ($result = mysqli_fetch_assoc($qry)) {
                echo "
                <tr>
                    <td>" . $result['empid'] . "</td>
                    <td>" . $result['empname'] . "</td>
                    <td>" . $result['email'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td >" . $result['address'] . "</td>
                    <td>" . $result['sex'] . "</td>
                    <td>" . $result['department'] . "</td>
                    <td>" . $result['salary'] . "</td>
                    <td>" . $result['phonenum'] . "</td>
                </tr>
                ";
            }
        } else {
            echo "No records found";
        }
        ?>
    </table>
</body>

</html>