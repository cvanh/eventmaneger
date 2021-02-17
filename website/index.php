<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
include "databaselogin.php";
OpenCon()
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event planner</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/events.css">
</head>
<body>
    <div id="header">
        <a href="./index.html"><div id="logo_button" class="header_button">
            event maneger
        </div></a>
        <a href="./index.html"><div class="header_button">
            events
        </div></a>
        <a href="./databasescripts/admin.php"><div class="header_button">
            inloggen orginisatoren
        </div></a>
    </div>
    <div id="content">
<?php
$current_date =date("Y-m-d");
$sql = "SELECT * FROM `events` WHERE start_event <" + $current_date;
var_dump($sql)
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
echo(" 
    <div class='event_card'>
                <div class='event_card_upper'>
                 <img src='./CDN/img/" . $row["titel_event"] .".jpg'>
             </div>
      <div class='event_card_lower'>
        <div class='event_card_price'>". $row["price_event"] ."$</div>
        <div class='event_card_location'>". $row["locatie_event"] ."</div>
        <div class='event_card_title'>" . $row["titel_event"] . "</div>
        <div class='event_card_tickets'>". $row["number_tickets"] ."</div>
        <a href=./details.php?id_event=" . $row["id_event"] ."><div class='event_card_details'>details</div></a>
        </div>
    </div>
");
  }
} else {
  echo "op dit moment zijn er geen evenementen probeer het op een later moment.";
}
?>
    <div id="footer">
        <b>copyright 2021 imaretarded.dev planning software</b>
    </div>
</body>
<?php closecon($conn)?>
</html>