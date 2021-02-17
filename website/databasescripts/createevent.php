<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event planner</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div id="header">
        <a href="./index.html"><div id="logo_button" class="header_button">
            event maneger
        </div></a>
        <a href="./index.html"><div class="header_button">
            events
        </div></a>
        <a href="./admin.html"><div class="header_button">
            inloggen orginisatoren
        </div></a>
    </div>
    <div id="content">
    <?php

/*
TODO support file upload https://www.w3schools.com/php/php_file_upload.asp
*/
include "../databaselogin.php";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
// FIXIT
// $titel_event = htmlspecialchars($_POST['titel_event']);
// $foto_event = htmlspecialchars($_POST['foto_event']);
// $locatie_event = htmlspecialchars($_POST['locatie_event']);
// $bericht = htmlspecialchars($_POST['bericht']);
// $price_event = htmlspecialchars($_POST['price_event']);
// $titel_event = htmlspecialchars($_POST['titel_event']);
// $permissions_event = htmlspecialchars($_POST['permissions_event']);


$sql = "SELECT * FROM events"; // the querry to display everything from the events table
$result = mysqli_query($conn, $sql); // sumbits the querry and the information that comes back is in this variable

// if ($conn->connect_errno) { // error handeling
//     printf("Connect failed: %s\n", $conn->connect_error);
//     exit();
// }
// if (!$conn->query("SET a=1")) { // error handeling
//     printf("Error message: %s\n", $conn->error);
// }

if ($result->num_rows > 0) {
    // output data of each row 
    while($row = $result->fetch_assoc()) {
      echo("<div id='events'>");
      echo("<button class='deletebutton' id='deletebuttonnumber" . $row["id_event"] . "'>verwijderen</button>"); // the delete button
      echo("<button class='editbutton' id='edditbuttonnumber" . $row["id_event"] . "'>edit</button>"); // edit button
      echo "naam evenement: " . $row["titel_event"]. " prijs evenement: " . $row["price_event"]. " start evenement: " . $row["start_event"] . "<br>"; // the line with all the event spefic information
    echo('</div>');
    }
  } else {
    echo "0 results";
  }

  function deletecomment (){ // dit verwijderd de comment gebruik de parameter om de id_event 
     $sqldelete = "DELETE FROM events WHERE id_event = '1'";
  }

  function editcomment(){
    
  }
    

$conn -> close();
?>
    </div>
    <div id="footer">
        <h1>footer</h1>
    </div>
    
</body>
</html>

