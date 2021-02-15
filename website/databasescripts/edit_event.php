<?php
include "../databaselogin.php";
OpenCon();
// $id_edit = $_GET['id_edit'];
// var_dump($id_edit);

$sql = "SELECT * FROM `events` WHERE id_event = 2";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
var_dump($row)
?>
 <form method="POST" action="./databasescripts/createevent.php" id="formulier_admin">
            <label>voer de waarde in de volgende velden toe</label>
            <br />
            <input value="<?php echo ($row['titel_event']);?>" id="titel_event" type="text" /> <br /><br />
            <label>voeg hier de foto aan toe</label>
            <input id="foto_event" type="file" /><br /><br />
            <label>locatie van het evenement</label>
            <input value="<?php echo ($row['locatie_event']);?>" id="locatie_event" type="text" /><br /><br />
            <!-- TODO make a location picker -->
            <label>de beschrijving van het evenement</label>
            <textarea id="bericht" name="message" value="<?php echo ($row['description_event']);?>" rows="10" cols="30">
                
                </textarea> <br /><br />
            <label>de ticket prijs</label>
            <input value="<?php echo ($row['price_event']);?>" id="price_event" type="text" /><br /><br />
            <label>titel van het evenement</label>
            <input value="<?php echo ($row['titel_event']);?>" id="titel_event" type="text" /><br /><br />
            <!--TODO make permission system-->
            <input type="submit">
        </form>
<?php closecon($conn);?>