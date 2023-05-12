<!DOCTYPE html>
<html>
<head>
    <title>Get Method Formulier</title>
</head>
<body>
   
  
<form method="get">




        <label for="naam">Naam:</label>
        <input type="text" name="naam" id="naam"><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" id="achternaam"><br>

        <label for="leeftijd">Leeftijd:</label>
        <input type="text" name="leeftijd" id="leeftijd"><br>

        <label for="adres">Adres:</label>
        <input type="text" name="adres" id="adres"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br>

        <input type="submit" name="submit" value="Verzenden">
    </form>


    <?php
        if(isset($_GET['submit'])) {

            $naam = $_GET['naam'];


            $achternaam = $_GET['achternaam'];


            $leeftijd = $_GET['leeftijd'];


            $adres = $_GET['adres'];

            $email = $_GET['email'];

           
            echo "<p>Naam: $naam</p>";



            echo "<p>Achternaam: $achternaam</p>";



            echo "<p>Leeftijd: $leeftijd</p>";




            echo "<p>Adres: $adres</p>";

            echo "<p>Email: $email</p>";
        }
    ?>
</body>
</html>