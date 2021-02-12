
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
    while($row = $result->fetch_assoc()) {
      echo ("<input value='verwijder' type='button' class='deleteevent' id='deletebutton" . $row["id_event"] . "'>");
      echo ("<button class='editevent' id='editbutton" . $row["id_event"] . "'>edit</button>");
      echo "naam evenement: " . $row["titel_event"]. " prijs evenement: " . $row["price_event"]. " start evenement: " . $row["start_event"];
      echo("<br>");
    }
  } else {
    echo "0 evenementen";
  }

function remove_event($id_event){
  $remove_event_id = $_GET['id'];
  echo ("<script type='text/javascript'>alert('aaaaaaaaaaaaa" . $id_event . "');</script>");
}

  // $sqldelete = "DELETE FROM comment WHERE id_comment="; //TODO ADD THE EVENT_ID;
  // DELETE FROM comments WHERE id_comment='commentid' ; de sql vraag
      //$id_comment = $_GET['verwijder comment'];
      //$commentdelete = $conn ->query($sqldelete); 



closecon($conn); // closes connection with database
?>
<script src="script.js"></script>