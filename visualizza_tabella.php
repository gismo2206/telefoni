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

echo "<center><h2>Tabella Telefoni</h2>";
echo "<table border='1' cellpadding='10'>
<tr><th>ID</th><th>Marca</th><th>Modello</th><th>Prezzo (€)</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['idtel']}</td>
            <td>{$row['marca']}</td>
            <td>{$row['modello']}</td>
            <td>{$row['prezzo']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nessun dato disponibile</td></tr>";
}

echo "</table></center>";

$db_connection->close();
?>
