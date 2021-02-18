
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
    </div>
    <div id="content">
    <?php
include "../databaselogin.php";
OpenCon();
// $id_edit = null;
$id_edit = $_GET['id_edit'];
// var_dump($id_edit);

$sql = "SELECT * FROM `events` WHERE id_event =" . $id_edit;
$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();
// var_dump($row)
?>
 <form method="POST" action="./insert_event.php" id="formulier_admin">
            <label>voer de waarde in de volgende velden toe</label>
            <br />
            <!-- <input value="<?php echo ($row['titel_event']);?>" id="titel_event" type="text" /> <br /><br /> -->
            <label>voeg hier de foto aan toe</label>
            
            <input id="foto_event" type="file" /><br /><br />
            <label>de huidige foto in het database ziet u hier onder, om het te updaten voeg een nieuwe foto toe.</label>
            <?php 
            echo ("<img height='200px' width='200px' src='../CDN/img/" . $row['titel_event'] . ".jpg' alt='foto event'>");
            ?>

            <label>locatie van het evenement</label>
            <input value="<?php echo ($row['locatie_event']);?>" name="locatie_event" id="locatie_event" type="text" /><br /><br />
            <!-- TODO make a location picker -->
            <label>de beschrijving van het evenement</label>
            <textarea id="beschrijving_event" name="message" rows="10" cols="30">
            <?php echo ($row['description_event']);?>
                </textarea> <br /><br />
            <label>de ticket prijs(euro)</label>
            <input value="<?php echo ($row['price_event']);?>" name="price_event" id="price_event" type="text" /><br /><br />
            <label>titel van het evenement</label>
            <label>de datum van het evenement</label>
            <input value="<?php echo ($row['start_event']);?>" name="start_event" id="start_event" type="date" /><br /><br />
            <label>aantal beschikbaare tickets</label>
            <input value="<?php echo ($row['number_tickets']);?>" name="number_tickets" id="number_tickets" type="text" /><br /><br />
            <label>titel van het evenement</label>
            <input value="<?php echo ($row['titel_event']);?>" name="titel_event" id="titel_event" type="text" /><br /><br />
            <!--TODO make permission system and a protector so there can be only more tickets and not less-->
            <input type="submit">
        </form>
<?php
closecon($conn);?>
    <div id="footer">
        <b>copyright 2021 imaretarded.dev planning software</b>
    </div>
</body>

</html>