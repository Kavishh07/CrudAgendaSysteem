<?php
require 'db_Config.php';
echo "<br>";

//URL ID
$id = $_GET['id'];

//toont op scherm
echo "ID van het agenda-items is: " . $id . "</br>";

//Query om gegevens op te halen.
$query =  "SELECT * FROM crud_agenda WHERE ID =" . $id;

//Query uitvoeren voor resultaat
$result = mysqli_query($mysqli, $query);

// voor als er ene record gevonden is.
if (mysqli_num_rows($result) > 0)
{
    while ($item = mysqli_fetch_assoc($result)){

        echo "<br>";
        echo "<table border='2px'>";
        echo "<tr><th>Onderwerp</th><th>inhoud</th><th>Begindatum</th><th>Einddatum</th><th>Prioriteit</th><th>Status</th></tr>";


//gegevens van de items
        echo "<tr>";
        echo "<td>" . $item['Onderwerp'] . "  ".  "</td>";
        echo "<td>" . $item['inhoud'] .  "  ". "</td>";
        echo "<td>" . $item['Begindatum'] . "  ".  "</td>";
        echo "<td>" . $item['Einddatum'] . "  ".  "</td>";
        echo "<td>" . $item['Prioriteit'] . "  ".  "</td>";
        echo "<td>" . $item['Status'] .  "  ". "</td>";
        echo "</tr>";
        echo "</table>";
    }
}

//voor als er geen record gevonden word
else
{
    echo "Er is geen record met ID: " . $id . "<br/>";
}

//brengt terug naar overzicht
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

