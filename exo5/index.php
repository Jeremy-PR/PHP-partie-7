<?php
// index.php





?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="./index.php" method="post">

        <label for="Vous êtes">
            <select name="Civilité" id="Civilité">
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
        </label>


        <label for="lastname"> Nom de famille : </label>
        <input type="text" name="lastname" id="lastname">


        <label for="Firstname"> Prénom : </label>
        <input type="text" name="firstname" id="firstname">

        <label for="file">Fichier à envoyer:</label>

        <input type="file" id="file" name="file" accept=".pdf" />





        <input type="submit" value="Envoyer">
    </form>


    <?php
// index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<br>";
   echo $civilite = $_POST['Civilité'];
   echo "<br>";
   echo $lastname = $_POST['lastname'];
   echo "<br>";
   echo $firstname = $_POST['firstname'];
   echo "<br>";
echo $file = $_POST['file'];
    
}
 

?>


<?php
$file = 'copie.pdf';
if (str_ends_with($file, '.pdf')) {
    echo "<br>";
    echo "Le fichier est bien un pdf";
}

?>




</body>

</html>