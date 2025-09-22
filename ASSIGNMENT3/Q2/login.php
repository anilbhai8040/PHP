<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$tableName = "student_detail";
$result = "";
$isLogin = false;
$query = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array();

    foreach ($_POST as $key => $value) {
        $data[$key] = "'" . $value . "'";
    }


    $query = "SELECT * FROM {$tableName} WHERE USERNAME = '" . $_POST['USERNAME'] . "' AND PASSWORD = '" . $_POST['PASSWORD'] . "'";

    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        $student = mysqli_fetch_assoc($result);
        unset($student['USERNAME']);
        unset($student['PASSWORD']);
        print_r($student);

        // $queryString = http_build_query($student);

        $queryString = "";
        foreach ($student as $key => $value) {
            $queryString .= $key . "=" . $value . "&";
        }

        header("Location: deshboard.php?" . $queryString);
        exit;
    } else {
        echo "<script>alert('Invalid Username or Password!');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: grid;
            place-items: center;
        }

        td,
        tr,
        th {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="USERNAME" required></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><input type="password" name="PASSWORD" required></td>
            </tr>
            <tr align="center">
                <th colspan="2"><button type="submit">Login</button></th>
            </tr>
        </table>
    </form>
</body>

</html>