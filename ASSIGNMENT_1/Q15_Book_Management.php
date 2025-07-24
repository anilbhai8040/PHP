<!DOCTYPE html>
<html>

<head>
    <title>Book Store Management</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f9f9f9;
            padding: 30px;
        }

        form,
        table {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px #aaa;
        }

        table {
            margin-top: 30px;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #000;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Book Store Management</h2>

    <form method="post">
        <label>Book Name : </label>
        <input type="text" name="bookname" placeholder="Enter Book Name" required><br><br>

        <label>Quantity : </label>
        <input type="number" name="quantity" min="1" placeholder="Enter Book Quantity" required><br><br>

        <label>Price per Book : </label>
        <input type="number" step="10" name="price" min="10" placeholder="Enter Book Price" required><br><br>

        <input type="submit" name="submit" value="Add Book">
    </form>

    <?php
    $bookname;
    $quantity;
    $price;
    $total;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $bookname = $_POST['bookname'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        $total = $quantity * $price;
    }
    ?>

    <?php if (!empty($bookname)) { ?>
        <table>
            <tr>
                <th>Book Name</th>
                <th>Quantity</th>
                <th>Price per Book</th>
                <th>Total Price</th>
            </tr>
            <tr>
                <td><?php echo $bookname ?></td>
                <td><?php echo $quantity ?></td>
                <td><?php echo "₹".$price ?></td>
                <td><?php echo "₹".$total ?></td>
            </tr>
        </table>
    <?php } ?>

</body>

</html>