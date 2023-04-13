<?php

//database toevoegen.
require 'db_Config.php';

//voeg query toe

$query = "INSERT INTO crud_agenda";
$query .= "(Onderwerp, inhoud, Begindatum, Einddatum, Prioriteit, Status)";
$query .= " VALUES ('Minor2','Upload pagina', '2022-11-16', '2022-11-17', 2, 'b' )";

//Query vangt de resultaat op.
//Resultaat geeft aan of het wel of niet gelukt is.
$result = mysqli_query($msqli, $query);

//controle
if ($result)
{
    echo "Item is toegevoegd </br>";
}
else{
    echo "FOUT bijgevoegd </br>";
    echo mysqli_error($msqli); //tijdelijke foutmelding (!)
}



// brengt u terug naar het overzichts pagina
echo "<br>";
echo "<button> <a  href='toonagenda.php'>Overzicht</a></button>";


?>

<style>
    *{
        color: black;
    }

    html{
        background-color: crimson;
    }
</style>
