<?php
echo("test");
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


$sql = "SELECT * FROM 'events'";
$result = mysqli_query($conn, $sql);

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

if (!$conn->query("SET a=1")) {
    printf("Error message: %s\n", $conn->error);
}

// if (mysqli_num_rows($result) > 0) {
//   // writes the data to screen
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "naam evenement: " . $row["titel_event"]. " prijs evenement: " . $row["price_event"]. " start evenement: " . $row["start_event"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "naam evenement: " . $row["titel_event"]. " prijs evenement: " . $row["price_event"]. " start evenement: " . $row["start_event"] . "<br>";
    }
  } else {
    echo "0 results";
  }
// $gebruikersnaam_comment = htmlspecialchars($_POST['gebruikersnaam_comment']);
// var_dump($_POST);
// echo("oijfdw");
var_dump($result);
closecon($conn);
