<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "articolitelefonici";

$db_connection = new mysqli($db_host, $db_user, $db_password, $db);

if ($db_connection->connect_errno) {
    echo "Problema tecnico: " . $db_connection->connect_error;
    exit;
}

echo "Connessione stabilita correttamente!<br>";

$tabname = "telefoni";

$creatab = "CREATE TABLE IF NOT EXISTS $tabname (
    idtel INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(40),
    modello VARCHAR(40),
    prezzo DECIMAL(10,2)
)";

if (!$db_connection->query($creatab)) {
    echo "Errore nella creazione della tabella!<br>";
} else {
    echo "Tabella creata correttamente (o già esistente).<br>";
}

$insert = "INSERT INTO $tabname (marca, modello, prezzo)
VALUES ('Nokia','3310',30.00), ('Motorola','H50',380.00)";

if (!$db_connection->query($insert)) {
    echo "Errore durante l'inserimento dei dati (probabilmente già inseriti).<br>";
} else {
    echo "Dati inseriti correttamente nella tabella.<br>";
}

$db_connection->close();
?>
