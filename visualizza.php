<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "articolitelefonici";

$db_connection = new mysqli($db_host, $db_user, $db_password, $db);

if ($db_connection->connect_errno) {
    echo "Errore: " . $db_connection->connect_error;
    exit;
}

$select = "SELECT * FROM telefoni";
$result = $db_connection->query($select);

if ($result->num_rows > 0) {
    echo "<h2>Elenco Telefoni:</h2><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["marca"] . " " . $row["modello"] . " - €" . $row["prezzo"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nessun telefono trovato.";
}

$db_connection->close();
?>
