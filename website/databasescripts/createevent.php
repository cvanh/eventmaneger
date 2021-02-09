<?php
/*
TODO support file upload https://www.w3schools.com/php/php_file_upload.asp
*/
include "../databaselogin.php";
OpenCon();
// FIXIT
// $titel_event = htmlspecialchars($_POST['titel_event']);
// $foto_event = htmlspecialchars($_POST['foto_event']);
// $locatie_event = htmlspecialchars($_POST['locatie_event']);
// $bericht = htmlspecialchars($_POST['bericht']);
// $price_event = htmlspecialchars($_POST['price_event']);
// $titel_event = htmlspecialchars($_POST['titel_event']);
// $permissions_event = htmlspecialchars($_POST['permissions_event']);


$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo ("<button class='deletebutton' id='deletebutton" . $row["id_event"] . "'>verwijderen</button>");
      echo ("<button class='editbutton' id='editbutton" . $row["id_event"] . "'>edit</button>");
      echo "naam evenement: " . $row["titel_event"]. " prijs evenement: " . $row["price_event"]. " start evenement: " . $row["start_event"] . "<br>";
    }
  } else {
    echo "0 results";
  }

  $sqldelete = "DELETE FROM comment WHERE id_comment=" . //TODO ADD THE EVENT_ID;
  // DELETE FROM comments WHERE id_comment='commentid' ; de sql vraag
      //$id_comment = $_GET['verwijder comment'];
      //$commentdelete = $conn ->query($sqldelete); 

// $gebruikersnaam_comment = htmlspecialchars($_POST['gebruikersnaam_comment']);
closecon($conn);
