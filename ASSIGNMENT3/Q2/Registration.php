<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$tableName = "student_detail";
$query = "";
$result = "";
$isLogin = false;
// Create table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS {$tableName} (
    STUD_ID VARCHAR(5) PRIMARY KEY,
    STUD_NAME VARCHAR(20),
    STUD_ADD VARCHAR(50),
    STUD_STD INT,
    STUD_DOB DATE,
    STUD_EMAIL VARCHAR(50),
    USERNAME VARCHAR(30),
    PASSWORD VARCHAR(255)
)";

mysqli_query($connect, $query);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array();

    foreach ($_POST as $key => $value) {
         $data[$key] = "'" . $value . "'";
    }

    if (isset($data['STUD_EMAIL'])) {
        $query = "SELECT * FROM {$tableName} WHERE STUD_EMAIL = " . $data['STUD_EMAIL'];
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('This email is already registered! Please use another email.')</script>";
        }
    }

    $keys = array_keys($data);

    $query = "INSERT INTO {$tableName} (" . implode(',', $keys) . ") VALUES (" . implode(',', $data) . ")";
    try {
        if (!mysqli_query($connect, $query)) {
            die("Query Failed !!!");
        } else {
            $result = "Data successfully Inseted !!!";
            $isLogin = true;
        }
    } catch (Exception $e) {
        $result = $e->getMessage();
    }

    echo "<script>alert(' $result')</script>";

    if ($isLogin) {
        header("Location:welcome.php?name=" . $data['STUD_NAME']);
    }
}
?>

<html>

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

        button {
            box-shadow: 1px 2px black;
            border-color: red;
            background: linear-gradient(135deg, #e88d8dff, #bf3234ff);
            margin: 1px 0px 2px 0px;
        }
    </style>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <th colspan="2">
                    STUDENT INFORMATION
                </th>
            </tr>
            <tr>
                <th>USERNAME</th>
                <td><input type="text" name="USERNAME" required></td>
            </tr>
            <tr>
                <th>STUD_EMAIL</th>
                <td><input type="email" name="STUD_EMAIL" required></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><input type="password" name="PASSWORD" required></td>
            </tr>
            <tr>
                <th>STUD_ID</th>
                <td><input type="text" name="STUD_ID" required></td>
            </tr>
            <tr>
                <th>STUD_NAME</th>
                <td><input type="text" name="STUD_NAME" required></td>
            </tr>
            <tr>
                <th>ADDRESS</th>
                <td><input type="text" name="STUD_ADD" required></td>
            </tr>
            <tr>
                <th>STUD_STD</th>
                <td><input type="number" name="STUD_STD" required></td>
            </tr>
            <tr>
                <th>STUD_DOB</th>
                <td><input type="date" name="STUD_DOB" required></td>
            </tr>
            <tr>
                <th colspan="2">
                    <button type="submit" value="submit">submit</button>
                </th>
            </tr>
        </table>
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>

</body>

</html>