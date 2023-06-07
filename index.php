<?php
// Databasegegevens
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Maak een verbinding met de database
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "DB connection successful";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Selecteer alle data
echo "<h2>Hoe je alles selecteert in een query zonder variabele</h2>";

$stmt = $pdo->query("SELECT * FROM producten");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    echo "Product Code: " . $row['producten_code'] . "<br>";
    echo "Product Naam: " . $row['product_naam'] . "<br>";
    echo "Prijs: " . $row['prijs_per_stuk'] . "<br><br>";
}

// Selecteer een enkele rij met placeholders
echo "<h2>Hoe je een single row selecteert met placeholders</h2>";
// select a particular user by id

$stmt = $pdo->prepare("SELECT * FROM producten WHERE producten_code = ?");
$productNaam = 9;
$stmt->execute([$productNaam]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    echo "Product Code: " . $row['producten_code'] . "<br>";
    echo "Product Naam: " . $row['product_naam'] . "<br>";
    echo "Prijs: " . $row['prijs_per_stuk'] . "<br><br>";
} else {
    echo "No results found.<br><br>";
}

// Selecteer een enkele rij met named parameters
echo "<h2>Hoe je een single row selecteert met named parameters</h2>";

$stmt = $pdo->prepare("SELECT * FROM producten WHERE producten_code = ?");
$productNaam = 10;
$stmt->execute([$productNaam]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    echo "Product Code: " . $row['producten_code'] . "<br>";
    echo "Product Naam: " . $row['product_naam'] . "<br>";
    echo "Prijs: " . $row['prijs_per_stuk'] . "<br><br>";
} else {
    echo "No results found.<br><br>";
}

// Databaseverbinding sluiten
$pdo = null;
?>