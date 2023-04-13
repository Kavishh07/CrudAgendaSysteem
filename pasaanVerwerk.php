<?php

require 'db_Config.php';

if (isset($_POST['verzend']))
{
    //lees alle velden uit en stop er waardes in de variables
    $id = $_POST['idVeld'];
    $ond = $_POST['onderwerpVeld'];
    $inh = $_POST['inhoudVeld'];
    $begin = $_POST['begindatumVeld'];
    $eind = $_POST['einddatumVeld'];
    $prior = $_POST['prioriteitVeld'];
    $stat = $_POST['statusVeld'];
}

$query = "UPDATE crud_agenda ";
$query .= "SET Onderwerp = '{$ond}', inhoud = '{$inh}', Begindatum = '{$begin}', Einddatum = '{$eind}', Prioriteit = '{$prior}' , Status = '{$stat}' ";
$query .= "WHERE ID = {$id}";

//voer query uit en vang het resultaat op.
$result = mysqli_query($mysqli, $query);

//controle of het gelukt is.
if ($result)
{
    echo "Het Item is aangepast</br>";
}
else{
    echo "FOUT aanpassen: </br>";
    echo $query . "<br/>";
    echo mysqli_error($mysqli); //tijdelijke foutmelding (!)
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

