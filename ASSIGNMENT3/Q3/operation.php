<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$query = "";
$result = "";
$tableName = "student_register";

// Create table if it doesn't exist
$query = "CREATE TABLE IF NOT EXISTS {$tableName}(
sno INT(3), 
sname VARCHAR(20), 
Saddress VARCHAR(50), 
smobile VARCHAR(15), 
sdob DATE
)";

mysqli_query($connect, $query);

if (isset($_POST['ADD'])) {
    $data = array();

    foreach ($_POST as $key => $value) {
        // $data[$key] = "'" . mysqli_real_escape_string($connect, $value) . "'";
        $data[$key] = "'" . $value . "'";
    }

    unset($data['Search_No']);
    unset($data['ADD']);

    $keys = array_keys($data);
    $query = "INSERT INTO {$tableName} (" . implode(',', $keys) . ") VALUES (" . implode(',', $data) . ")";

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Data successfully inserted!')</script>";
    } else {
        echo "<script>alert('Insert failed: " . mysqli_error($connect) . "')</script>";
    }
}

if (isset($_POST['DELETE'])) {

    if($_POST['Search_No'] === ""){
        if ($_POST['Search_No'] == "") {
        echo "<script>
                alert('Please Enter Search Number....');
                window.location.href = window.location.href; // ✅ reload same page
              </script>";
    }
    }
    $search = $_POST['Search_No'];

    $query = "DELETE FROM {$tableName} WHERE sno = $search";

    $result = mysqli_query($connect, $query);

    if ($result && mysqli_affected_rows($connect) !== 0) {
        echo "<script>alert('Data successfully Deleted!')</script>";
    } else {
        echo "<script>alert('Deleted failed: " . mysqli_error($connect) . "')</script>";
    }
}

if (isset($_POST['UPDATE'])) {

   if ($_POST['Search_No'] == "") {
        echo "<script>
                alert('Please Enter Search Number....');
                window.location.href = window.location.href; // ✅ reload same page
              </script>";
    }

    if (mysqli_num_rows(mysqli_query($connect, "SELECT 1 FROM {$tableName} LIMIT 1")) == 0) {
        echo "<script>
                alert('Table is empty! No data to update.');
                window.location.href = window.location.href;
              </script>";
        exit;
    }
    $updateData = [];
    
    foreach ($_POST as $key => $value) {
        if (!empty($_POST[$key])) {
            if ($key === 'Search_No' || $key === 'UPDATE')
                continue;
            $value = mysqli_real_escape_string($connect, $_POST[$key]);
            $updateData[] = "$key='$value'";
        }
    }
    
    if (empty($updateData)) {
         "<script>alert('No changes provided. Nothing to update!')</script>";
        return;
    }

    $search = $_POST['Search_No'];

    $query = "UPDATE {$tableName} SET " . implode(", ", $updateData) . " WHERE sno = $search";


    $result = mysqli_query($connect, $query);

    if ($result && mysqli_affected_rows($connect) !== 0) {
        echo "<script>alert('Data successfully Updated!')</script>";
    } else {
        echo "<script>alert('$search not found: " . mysqli_error($connect) . "')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td,
        tr {
            border: 2px solid black;
            padding: 8px;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .divider {
            text-align: center;
            margin: 15px 0;
            font-weight: bold;
        }

        .table-section {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <table>
                <div class="form-section">
                    <tr>
                        <th> SEARCH [ RECORD NO ] : </th>
                        <td><input type="number" id="record-no" name="Search_No"></td>
                    </tr>
                    <tr>
                        <th> Enter student no : </th>
                        <td><input type="number" id="student-no" name="sno"></td>
                    </tr>
                    <tr>
                        <th> Enter Student Name : </th>
                        <td><input type="text" id="student-name" name="sname"></td>
                    </tr>
                    <tr>
                        <th> Enter Student Address : </th>
                        <td><input type="text" id="student-address" name="Saddress"></td>
                    </tr>
                    <tr>
                        <th> Enter Mobile No : </th>
                        <td><input type="number" id="mobile-no" name="smobile"></td>
                    </tr>
                    <tr>
                        <th> Enter Dob : </th>
                        <td><input type="date" id="dob" name="sdob"></td>
                    </tr>
                </div>

                <div class="buttons">
                    <tr align="center">
                        <th colspan="2">
                            <button type="submit" name="ADD" class="add-btn">ADD</button>
                            <button type="submit" name="DELETE" class="delete-btn">DELETE</button>
                            <button type="submit" name="UPDATE" class="update-btn">UPDATE</button>
                        </th>
                    </tr>
                </div>
            </table>
        </form>
    </div>

    <div class="divider">
        <p>******************** Student Information ********************</p>
    </div>

    <div class="table-section">
        <table>
            <thead>
                <tr>
                    <th>Stud No</th>
                    <th>Stud Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>DOB</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM {$tableName}";
                $result = mysqli_query($connect, $query);
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$row['sno']}</td>
                            <td>{$row['sname']}</td>
                            <td>{$row['Saddress']}</td>
                            <td>{$row['smobile']}</td>
                            <td>{$row['sdob']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' align='center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    const recordNo = document.getElementById('record-no');
    const studentNo = document.getElementById('student-no');
    const studentName = document.getElementById('student-name');
    const studentAddress = document.getElementById('student-address');
    const mobileNo = document.getElementById('mobile-no');
    const dob = document.getElementById('dob');
    const addBtn = document.querySelector('.add-btn');
    const deleteBtn = document.querySelector('.delete-btn');
    const updateBtn = document.querySelector('.update-btn');

    const inputFields = [studentNo, studentName, studentAddress, mobileNo, dob];

    /* Enable/disable fields based on search input
    recordNo.addEventListener('input', () => {
        if (recordNo.value.trim() !== "") {
            inputFields.forEach(input => input.disabled = true);
            addBtn.disabled = true;
        } else {
            inputFields.forEach(input => input.disabled = false);
            addBtn.disabled = false;
        }
    });
    
    // Enable/disable search field based on other inputs
    inputFields.forEach(input => {
        input.addEventListener('input', () => {
            const anyFilled = inputFields.some(f => f.value.trim() !== "");
            recordNo.disabled = anyFilled;
        });
    });
    */

    // Make fields only for ADD
    addBtn.addEventListener('click', (e) => {
        let allFilled = true;
        inputFields.forEach(input => {
            if (input.value.trim() === "") allFilled = false;
        });

        if (!allFilled) {
            alert("Please fill all fields before adding a record!");
            e.preventDefault(); // Prevent default action if not filled
        } else {
            // proceed with adding record
            console.log("Record added successfully!");
        }
    });
</script>

</html>