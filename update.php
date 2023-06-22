<?php



$host = 'localhost:3307';

$db   = 'update.php.';

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

 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 

    $product_naam = $_POST['product_naam'];

    $prijs_per_stuk = $_POST['prijs_per_stuk'];

    $omschrijving = $_POST['omschrijving'];

 

 

      
    $data = [

       

          'product_naam' => $product_naam,

          'prijs_per_stuk' => $prijs_per_stuk,

          'omschrijving' => $omschrijving,

         

        ];

        $sql = "UPDATE producten SET  product_naam=:product_naam, prijs_per_stuk=:prijs_per_stuk, omschrijving=:omschrijving  WHERE product_code=1";

        $pdo->prepare($sql)->execute($data);

 

       

        $stmt=$pdo->prepare($sql);

        $stmt->execute($data);

   

      }







?>

<!DOCTYPE html>

<html>

<head>

    <title>Productinformatie bijwerken</title>

</head>

<body>

   

  

<form method="POST" action="">

        <label for="product_naam">Productnaam:</label>

        <input type="text" name="product_naam" id="product_naam" required><br><br>

 

        <label for="prijs_per_stuk">Prijs per stuk:</label>

        <input type="number" name="prijs_per_stuk" id="prijs_per_stuk" required><br><br>

 

        <label for="omschrijving">Omschrijving:</label>

        <textarea name="omschrijving" id="omschrijving" rows="4" required></textarea><br><br>

 

        <input type="submit" value="Product bijwerken">

    </form>

</body>

</html>

