<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$table = "bookmaster";
$query = "";
$result = "";
$update = false;


// Create table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS {$table}(
BookID INT (3),
BookName VARCHAR (30),
AutherName VARCHAR (35),
Price INT (5),
Quantity INT (3),
Net_Amount INT(7)
)";

mysqli_query($connect, $query);
/*

INSERT INTO `bookmaster` (`BookID`, `BookName`, `AutherName`, `Price`, `Quantity`, `Net_Amount`) 
VALUES 
(1, 'Book One', 'Author A', 100, 2, 200),
(2, 'Book Two', 'Author B', 150, 1, 150),
(3, 'Book Three', 'Author C', 120, 3, 360),
(4, 'Book Four', 'Author D', 200, 2, 400),
(5, 'Book Five', 'Author E', 180, 1, 180);


*/

if (isset($_POST['Delete'])) {
    $delId = $_POST['delId'];
    $query = "DELETE FROM {$table} WHERE BookID = {$delId}";
    $result = mysqli_query($connect, $query);
}

if (isset($_POST['Update'])) {
    $update = true;
    $upId = $_POST['upId'];
    $query = "SELECT *FROM {$table} WHERE BookID = {$upId}";
    $result = mysqli_query($connect, $query);
    $updata = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['BookID'];
    $updateData = array();
    unset($_POST['update']);
    foreach ($_POST as $key => $value) {
        $updateData[] = "$key='$value'";
    }

    if (empty($updateData)) {
        "<script>alert('No changes provided. Nothing to update!')</script>";
        return;
    }
    // echo $updateData;
    $query = "UPDATE {$table} SET " . implode(", ", $updateData) . " , Net_Amount = {$_POST['Price']} * {$_POST['Quantity']}   WHERE BookID = {$_POST['BookID']}";
    //echo $query;
    $result = mysqli_query($connect, $query);


    if ($result && mysqli_affected_rows($connect) !== 0) {
        echo "<script>alert('Data successfully Updated!')</script>";
    } else {
        echo "<script>alert(' not found: " . mysqli_error($connect) . "')</script>";
    }

}


$query = "SELECT * FROM {$table}";
$rowData = '';
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($result)) {

    $rowData .= "<tr>
                        <td>{$row['BookID']} </td>
                        <td>{$row['BookName']} </td>
                        <td>{$row['AutherName']}</td>
						<td>{$row['Price']}</td>
						<td>{$row['Quantity']}</td>
						<td>{$row['Net_Amount']}</td>
                        <td>
						   <form method='POST'>
						    <input type='hidden' name='delId' value='{$row['BookID']}'>
                            <button class='btn delete' type='submit' name='Delete'>Delete</button>
						   </form>
                        </td>
						<td>
						<form method='POST'>
						    <input type='hidden' name='upId' value='{$row['BookID']}'>
                            <button class='btn account' type='submit' name='Update'>Update</button>
						   </form>
						</td>
                    </tr>";
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
            font-family: Arial, sans-serif;
        }

        .add {
            background-color: #239a33;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #e3f2fd;
        }

        .btn {
            padding: 4px 8px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .account {
            background-color: #007bff;
            color: white;
        }

        .delete {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <form method="POST">
        <table>
            <tr>
                <th>BookId</th>
                <th>BookKName</th>
                <th>AutherName</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Net_Amount</th>
                <th>#Delete</th>
                <th>#update</th>
            </tr>
            <?php echo $rowData; ?>
        </table>
    </form>

    <?php if ($update): ?>
        <form method="POST">
            <table>
                <input type="hidden" name="BookID" value="<?php echo $updata['BookID']; ?>"></th>

                <tr>
                    <th>BookName</th>
                    <th><input type="text" name="BookName" value="<?php echo $updata['BookName']; ?>"></th>
                </tr>
                <tr>
                    <th>AutherName</th>
                    <th><input type="text" name="AutherName" value="<?php echo $updata['AutherName']; ?>"></th>
                </tr>
                <tr>
                    <th>Price</th>
                    <th><input type="number" name="Price" value="<?php echo $updata['Price']; ?>"></th>
                </tr>
                <th>Quantity</th>
                <th><input type="number" name="Quantity" value="<?php echo $updata['Quantity']; ?>"></th>
                <tr>
                </tr>
                <tr>
                    <th colspan="2"><button class='btn delete' type='submit' name='update'>update</button>
                </tr>
            </table>
        </form>
    <?php endif; ?>
</body>

</html>