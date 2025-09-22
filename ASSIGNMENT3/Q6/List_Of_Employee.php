<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$table = "employees";
$query = "";
$result = "";

// Create table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS {$table}(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    gender VARCHAR(10),
    employee_type VARCHAR(50),
    department VARCHAR(50)
)";

mysqli_query($connect, $query);


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Delete query */
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];
    $query = "DELETE FROM $table WHERE id = $delete_id";
    mysqli_query($connect, $query);
}

/* Search operation */
$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $total = $_POST['entrie'];

    if ($search == "all" || $search == "") {
        if ($total == "all") {
            $query = "SELECT * FROM $table";
        } else {
            $query = "SELECT * FROM $table LIMIT $total";
        }
    } else {
        // normal search
        if ($total == "all") {
            $query = "SELECT * FROM $table 
                      WHERE name LIKE '%$search%' 
                      OR gender LIKE '%$search%' 
                      OR employee_type LIKE '%$search%' 
                      OR department LIKE '%$search%'";
        } else {
            $query = "SELECT * FROM $table 
                      WHERE name LIKE '%$search%' 
                      OR gender LIKE '%$search%' 
                      OR employee_type LIKE '%$search%' 
                      OR department LIKE '%$search%' 
                      LIMIT $total";
        }
    }
} else {
    $query = "SELECT * FROM employees";
}

$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
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

        .Search_bar {
            display: flex;
            justify-content: space-between;
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
    <div class="container">
        <div>
            <a href="Add.php"><button type="button" class="add">Add New</button></a>
            <h2>List of Employees</h2>
        </div>

        <!-- Search Form -->
        <form method="POST">
            <div class="Search_bar">
                <div>
                    Show
                    <select name="entrie">
                        <option value="all">All</option>
                        <option value="1">1</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select> entries
                </div>
                <div>
                    &nbsp;&nbsp;
                    Search: <input type="text" name="search" value="<?php echo $search; ?>">
                    <button type="submit">Go</button>
                </div>
        </form>
    </div>

    <!-- Employee Table -->
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Employee Type</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['employee_type']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="account_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn account" name="account">Account</button>
                        </form>

                        <form method="POST" style="display:inline;" onsubmit=" return confirmDelete();">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn delete" name="delete">Delete</button>
                        </form>
                    </td>

                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No records found</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php

    /* Display Account */
    $account_info = null;
    if (isset($_POST['account'])) {
        $account_id = $_POST['account_id'];
        $query = "SELECT * FROM $table WHERE id = $account_id";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            $account_info = mysqli_fetch_assoc($result);
        }
    }

    if ($account_info): ?>
        <h3>Employee Details</h3>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Employee Type</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
            <tr style="text-align:center;">
                <td><?php echo $account_info['id']; ?></td>
                <td><?php echo $account_info['name']; ?></td>
                <td><?php echo $account_info['gender']; ?></td>
                <td><?php echo $account_info['employee_type']; ?></td>
                <td><?php echo $account_info['department']; ?></td>
                <td>
                    <form method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                        <input type="hidden" name="delete_id" value="<?php echo $account_info['id']; ?>">
                        <button type="submit" class="btn delete" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    <?php endif; ?>

    </div>
</body>
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this record?");
    }
</script>

</html>