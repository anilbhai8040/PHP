<?php
require_once "../../ASSIGNMENT3/database.php";

// Get the database connection
$connect = getDatabase();
$tableName = "Student";
$query = "";
$result = "";
$id = $name = $mobile = "";
$i = 0;
$page = 0;

$query = "CREATE TABLE IF NOT EXISTS {$tableName} (
    roll_no INT ,
    Student_name VARCHAR(50) ,
    Student_mobile VARCHAR(15)
)";

mysqli_query($connect, $query);

/*

INSERT INTO Student (roll_no, Student_name, Student_mobile) 
VALUES 
(1, 'Anil Baraiya', '9876543210'),
(2, 'Ravi Patel', '9876512340'),
(3, 'Meena Sharma', '9876509876'),
(4, 'Kiran Joshi', '9876523456'),
(5, 'Suresh Kumar', '9876532109');

*/

$query = "SELECT * FROM {$tableName}";

$result = mysqli_query($connect, $query);
while ($data[$i++] = mysqli_fetch_assoc($result)) {

}

$langth = count($data) - 1;

if (isset($_POST['first'])) {
    $page = 0;
}

if (isset($_POST['last'])) {
    $page = $langth - 1;
}

if (isset($_POST['next'])) {
    $page = $_POST['page'] + 1;
    if ($page >= $langth)
        $page = 0;

}
if (isset($_POST['prev'])) {
    $page = $_POST['page'] - 1;
    if ($page < 0)
        $page = $langth - 1;
}

$id = $data[$page]['roll_no'];
$name = $data[$page]['Student_name'];
$mobile = $data[$page]['Student_mobile'];

?>
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
    </style>
</head>

<body>
    <form method="POST">
        <div>
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="number" value="<?php echo $id ?>"><br><br>
            <input type="text" value="<?php echo $name ?>"><br><br>
            <input type="number" value="<?php echo $mobile ?>"><br><br>
            <input type="submit" name="first" value="first">
            <input type="submit" name="next" value="next">
            <input type="submit" name="prev" value="prev">
            <input type="submit" name="last" value="last">
        </div>

    </form>
</body>

</html>