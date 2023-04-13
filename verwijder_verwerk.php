<?php
//require 'db_Config.php';
//echo "<br>";

//URL ID
$id = $_GET['id'];

//Toont het id op het scherm.
echo "Item met ID " . $id . " word verwijderd....<br/>";

//overzichts pagina
echo "<button><a href='toonagenda.php'>Overzicht</a></button>";


//Query om items te verwijderen.
$query = "DELETE FROM crud_agenda WHERE id=". $id;
//Resultaat geeft aan of het wel of niet gelukt is.
$result = mysqli_query($msqli, $query);


//controle
if ($result)
{
    echo "Het item is verwijderd</br>";
}

//anders!
else{
    echo "FOUT bij verwijderen</br>";
    echo "Geen ID gevonden...<br/>";
    echo $query . "<br/>"; // tijdleijke query tonen (!)
    echo mysqli_error($msqli); //tijdelijke foutmelding (!)
}



?>

<style>
    *{
        color: black;
    }


    html{
        background-color: crimson;
    }
</style>
