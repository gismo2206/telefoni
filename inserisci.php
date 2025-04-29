<?php
$marca = $_POST['marca'];
$modello = $_POST['modello'];
$prezzo = $_POST['prezzo'];


$insert="insert into telefoni ";
$result=$db_connection->query($insert);
if (!$result)
    echo "errore nella query!";
else
    echo "dati inseriti nella Tabella correttamente!";
?>