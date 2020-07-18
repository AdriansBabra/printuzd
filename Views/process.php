<?php

$mysqli = new mysqli("localhost","root", "","printfuluzd") or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $Virsraksts = $_POST['Virsraksts'];
    $Apraksts = $_POST['Apraksts'];

    $mysqli->query("INSERT INTO data(Virsraksts, Apraksts) VALUES('$Virsraksts','$Apraksts')") or
    die($mysqli->error);
    header('location: Index.php');
}

?>

