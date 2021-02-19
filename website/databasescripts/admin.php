</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event planner</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/events.css">
</head>
<body>
    <div id="header">
        <a href="../index.php"><div id="logo_button" class="header_button">
            event maneger
        </div></a>
        <a href="../index.html"><div class="header_button">
            events
        </div></a>
        <a href="../databasescripts/admin.php"><div class="header_button">
            inloggen orginisatoren
        </div></a>
        <a href="../databasescripts/insert.php"><div class="header_button">
            evenement toetevoegen
        </div></a>
    </div>
    <div id="content">
    <?php
/*
MEER SPAGGETI DAN EEN ITALIAANS RESTAURANT
TODO support file upload https://www.w3schools.com/php/php_file_upload.asp
*/
include "../databaselogin.php";
OpenCon(); // starts connection with database

// the view code this also generates the buttons ---------------------------------------------------------------------------
$sql = "SELECT * FROM `events` ORDER BY `events`.`start_event` DESC ";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    // echo("<div id ='eventrow".$row["id_event"] . "'>" );
    echo("<div style='display: block;' class='eventrow'>");
      echo ("<input value='verwijder' type='button' class='deleteevent' id='deletebutton" . $row["id_event"] . "'>");
        echo ("<button onclick='edit_event(". $row['id_event'] . ")' class='editevent' id='editbutton" . $row["id_event"] . "'>edit</button>");
          echo "naam evenement: " . $row["titel_event"] . " prijs evenement: " . $row["price_event"] . " start evenement: " . $row["start_event"];
            echo("</div>");
              echo ("<br>");
  }
} else {
  echo "0 evenementen";
}


$id = NULL;
$id = $_GET['id']; // fetches the event id from a xhr request

/*okay so i made it a if statement so there wont be any unnessery stress on the database, and it onyly submits the code if id has a value.*/
if ($id == NULL) {
 //niks
} else {
  // $id = str_replace("deletebutton","",$id);
  $sql_delete_event = "DELETE FROM events WHERE id_event =" . $id; // fixit returns deletebuttonNUMMBER but supposed to return only NUMBER
    $result = mysqli_query($conn, $sql_delete_event);
}


closecon($conn); // closes connection with database
?>
    </div>
    <div id="footer">
        <b>copyright 2021 imaretarded.dev planning software</b>
    </div>
    <script src="./script.js"></script>
</body>
</html>