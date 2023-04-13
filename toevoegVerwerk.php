<?php
session_start();
$aantalFouten = 0;


//CHECK1
if (isset($_POST['verzend']) && $_POST['onderwerpVeld'] && $_POST['inhoudVeld'] && $_POST['begindatumVeld'] && $_POST['einddatumVeld'] && $_POST['prioriteitVeld']  && $_POST['statusVeld']) {
    echo "Alle velden zijn verstuurd";
} else{
    echo "Niet alle velden zijn meegegeven";
    $aantalFouten++;
}

echo "</br>";

//CHECK2
$verstuurdeFormulier = $_SERVER['HTTP_REFERER'];
if ($verstuurdeFormulier == "https://87276.stu.sd-lab.nl/basis2/crud/opdracht2/toevoegVerwerk.php") {
    echo "Formulier goed verzonden";
} else{
    echo "Formulier niet goed verzonden";
    $aantalFouten++;
}

echo "</br>";

//CHECK3
if ($_SESSION['token'] == $_POST['tokenVeld']) {
    echo "Token is goed verstuurd";
} else{
    echo "Geen token verstuurd";
    $aantalFouten++;
}


$onderwerp =$_POST['onderwerpVeld'];
if  (str_len($onderwerp > 5)) {
    echo "Onderwerp niet lang genoeg";
}

if ($aantalFouten == 0){

}








if (isset($_post['verzend']))
{
//    //Test: alle velden in 1 keer tonen
//    print_r($_POST);

    //lees alle velden uit op de pagina
    $ond = $_POST['onderwerpVeld'];
    $inh = $_POST['inhoudVeld'];
    $begin = $_POST['begindatumVeld'];
    $eind = $_POST['einddatumVeld'];
    $prior = $_POST['prioriteitVeld'];
    $stat = $_POST['statusVeld'];


    $query = "INSERT INTO crud_agenda";
    $query .= "(Onderwerp, inhoud, Begindatum, Einddatum, Prioriteit, Status)";
    $query .= " VALUES ('{$ond}', '{$inh}','{$begin}','{$eind}','{$prior}','{$stat}')";

}
else
{
    echo "Het formulier is niet (goed) Verstuurd<br>";
}

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

?>

<style>
    *{
        color: black;
    }


    html{
        background-color: crimson;
    }
</style>







