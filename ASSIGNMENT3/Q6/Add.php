<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$table = "employees";
$query = "";
$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array();

    foreach ($_POST as $key => $value) {
         $data[$key] = "'" . $value . "'";
    }
    $keys = array_keys($data);

    $query = "INSERT INTO {$table} (" . implode(',', $keys) . ") VALUES (" . implode(',', $data) . ")";
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

    header("Location:List_Of_Employee.php?name=" . $data['name']);
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
                <th colspan="2">Enter Employee Data</th>
            </tr>
            <tr>
                <th>Name : </th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Gender : </th>
                <td>
                    <input type="radio" name="gender" value="Female" checked>Female
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Other">Other
                </td>
            </tr>
            <tr>
                <th>Employee Type : </th>
                <td>
                    <select name="employee_type">
                        <option value="Casual" selected>Casual</option>
                        <option value="Job Order">Job Order</option>
                        <option value="Regular">Regular</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Department : </th>
                <td>
                    <select name="department">
                        <option value="Admin" selected>Admin</option>
                        <option value="Human Resource">Human Resource</option>
                        <option value="MIS">MIS</option>
                        <option value="Desining">Desining</option>
                        <option value="Development">Development</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th colspan="2" align="center"><button type="submit">Add</button></th>
            </tr>
        </table>
    </form>
</body>

</html>