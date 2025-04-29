<?php

// fase 1: connessione e riconoscimento

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db ="articolitelefonici";

$db_connection = new mysqli($db_host, $db_user, $db_password, $db);

if ($db_connection->connect_errno) 
 {
    echo("Si è verificato il seguente problema tecnico: " .           $db_connection->connect_error);
    exit;
 } 
 echo "Connessione Stabilita correttamente!<br>";

 // 2 fase : scrittura e lancio della query 

 $tabname="telefoni";

 $select="select * from $tabname";
  
 $result=$db_connection->query($select);
 
 $rows=$result->num_rows;

 echo "Sono presenti $rows records<br />";

 echo "<center> <table border=1 bordercolor=green>
      <tr><th>ID Telefono</th> <th>Marca</th> <th>Modello</th> <th>Prezzo</th></tr>";


 if($rows>0)
  {
   while($rows = $result->fetch_assoc())
     {
	echo "<tr><td>".$rows['idtel']. "</td><td>". $rows['marca']."</td><td>". $rows['modello']. "</td><td>". $rows['prezzo']."</td></tr>";
   }
}

echo "</table></center>";

$result->free();
$db_connection->close();

?>