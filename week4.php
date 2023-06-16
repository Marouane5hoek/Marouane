<?php
$host = 'localhost:3307';
$db   = 'winkel 4';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}




// Hoe je alles selecteert in een query zonder variabele
$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    // Print de data in een mooie volgorde
    echo "Product Code: " . $row['product_code'] . "<br>";
    echo "Product Name: " . $row['product_name'] . "<br>";
    echo "Product Price: " . $row['product_price'] . "<br>";
    echo "<br>";
}

// Hoe je een single row selecteert met placeholders
$productCode = 1;
$query = "SELECT * FROM products WHERE product_code = ?";
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, "i", $productCode);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Print de geselecteerde rij
echo "Product Code: " . $row['product_code'] . "<br>";
echo "Product Name: " . $row['product_name'] . "<br>";
echo "Product Price: " . $row['product_price'] . "<br>";

// Hoe je een single row selecteert met named parameters
$productCode = 2;
$query = "SELECT * FROM products WHERE product_code = :productCode";
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, ":productCode", $productCode);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

// Print de geselecteerde rij
echo "Product Code: " . $row['product_code'] . "<br>";
echo "Product Name: " . $row['product_name'] . "<br>";
echo "Product Price: " . $row['product_price'] . "<br>";
?>
