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
 echo "Connessione Stabilita correttamente!";

 // 2 fase : scrittura e lancio della query 

 $tabname="telefoni";

 $creatab="create table $tabname (idtel int auto_increment primary key,
 marca varchar(40), modello varchar(40), prezzo decimal(10,2))";
  
 $result=$db_connection->query($creatab);
 
 if (!$result)
   echo "errore nella query!";
 else
   echo "Tabella creata correttamente!";
  
  // inserisco i dati nella tabella

  $insert="insert into $tabname (marca,modello,prezzo) values ('Nokia','3310',30.00), ('Motorola','H50',380.00)";

 $result=$db_connection->query($insert);
 if (!$result)
   echo "errore nella query!";
 else
   echo "dati inseriti nella Tabella correttamente!";
  

 
          

?>