<?php
/*
MEER SPAGGETI DAN EEN ITALIAANS RESTAURANT
TODO support file upload https://www.w3schools.com/php/php_file_upload.asp
*/
include "../databaselogin.php";
OpenCon(); // starts connection with database

// where the database entries are displayed and the buttons are displayed
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo ("<input value='verwijder' type='button' class='deleteevent' id='deletebutton" . $row["id_event"] . "'>");
    echo ("<button class='editevent' id='editbutton" . $row["id_event"] . "'>edit</button>");
    echo "naam evenement: " . $row["titel_event"] . " prijs evenement: " . $row["price_event"] . " start evenement: " . $row["start_event"];
    echo ("<br>");
  }
} else {
  echo "0 evenementen";
}
var_dump($_GET); // DEBUG thingy
$id = NULL;
$id = $_GET['id']; // fetches the event id from a xhr request

if ($id == NULL) {
 //niks
} else {
  $id = str_replace("deletebutton","",$id);
  $sql_delete_event = "DELETE FROM events WHERE id_event =" . $id; // fixit returns deletebuttonNUMMBER but supposed to return only NUMBER
  $result = mysqli_query($conn, $sql_delete_event);
  var_dump($result);
}
closecon($conn); // closes connection with database
?>
<script src="script.js"></script>