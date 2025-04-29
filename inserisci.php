<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "articolitelefonici";

$db_connection = new mysqli($db_host, $db_user, $db_password, $db);

if ($db_connection->connect_errno) {
    echo "Errore di connessione: " . $db_connection->connect_error;
    exit;
}

$marca = $_POST['marca'];
$modello = $_POST['modello'];
$prezzo = $_POST['prezzo'];

$insert = "INSERT INTO telefoni (marca, modello, prezzo)
           VALUES (?, ?, ?)";

$stmt = $db_connection->prepare($insert);
$stmt->bind_param("ssd", $marca, $modello, $prezzo);

if ($stmt->execute()) {
    echo "Telefono inserito correttamente!";
} else {
    echo "Errore durante l'inserimento: " . $stmt->error;
}

$stmt->close();
$db_connection->close();
?>
