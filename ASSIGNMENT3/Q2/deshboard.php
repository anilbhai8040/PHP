<?php

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0;
        }

        td,
        tr,
        th {
            border: 2px solid black;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Welcome, <?php echo $_GET['STUD_NAME']; ?> 🎉</h2>
    <table>
        <tr>
            <th>Student ID</th>
            <td><?php echo $_GET['STUD_ID']; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $_GET['STUD_NAME']; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $_GET['STUD_ADD']; ?></td>
        </tr>
        <tr>
            <th>Standard</th>
            <td><?php echo $_GET['STUD_STD']; ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo $_GET['STUD_DOB']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $_GET['STUD_EMAIL']; ?></td>
        </tr>
    </table>

    <div style="text-align:center;">
        <a href="Registration.php"><button>Logout</button></a>
    </div>
</body>

</html>