<?php
$host = 'localhost:3307';
$db   = 'week 3';
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
     $producten = [
        ['product_naam' => 'Product 1', 'prijs_per_stuk' => '10.50', 'omschrijving' => 'Dit is product 1'],
        ['product_naam' => 'Product 2', 'prijs_per_stuk' => '15.75', 'omschrijving' => 'Dit is product 2'],
        ['product_naam' => 'Product 3', 'prijs_per_stuk' => '20.00', 'omschrijving' => 'Dit is product 3'],
        ['product_naam' => 'Product 4', 'prijs_per_stuk' => '12.25', 'omschrijving' => 'Dit is product 4'],
        ['product_naam' => 'Product 5', 'prijs_per_stuk' => '9.99', 'omschrijving' => 'Dit is product 5']
     ];

     foreach ($producten as $product) {
        $stmt = $pdo->prepare('INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)');
        $stmt->execute($product);
    }

} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>