<?php
// include the database connection
include './config/db.php';

/** Had to run this manually because phpmyadmin was not working and responded with "500 Bad Gateway" error */
/**
$createSql = "CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price FLOAT
)";
$create = mysqli_query($conn, $createSql);

$insetSql = "INSERT INTO items (name, price) VALUES ('Laptop', 1000), ('Phone', 500), ('Tablet', 300)";
$insert = mysqli_query($conn, $insetSql);
*/

// create a query
$sql = "SELECT name, price FROM items";

// make the query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the result from memory;
mysqli_free_result($result);

// close the connection
mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item database</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<main>
<section class="items">

<table>

    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach($products as $product): ?>
    <tr>
        <td><?php echo htmlspecialchars($product['name']); ?></td>
        <td><?php echo htmlspecialchars($product['price']); ?></td>
    </tr>
    <?php endforeach; ?>
  </table>


</body>
</html>