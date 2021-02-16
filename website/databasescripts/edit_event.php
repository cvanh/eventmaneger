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
            <input value="<?php echo ($row['locatie_event']);?>" id="locatie_event" type="text" /><br /><br />
            <!-- TODO make a location picker -->
            <label>de beschrijving van het evenement</label>
            <textarea id="beschrijving_event" name="message" rows="10" cols="30">
            <?php echo ($row['description_event']);?>
                </textarea> <br /><br />
            <label>de ticket prijs(euro)</label>
            <input value="<?php echo ($row['price_event']);?>" id="price_event" type="text" /><br /><br />
            <label>titel van het evenement</label>
            <input value="<?php echo ($row['titel_event']);?>" id="titel_event" type="text" /><br /><br />
            <!--TODO make permission system-->
            <input type="submit">
        </form>
<?php 
if (isset($_FILES['image'])) {
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    
    $extensions= array("jpg");
    
    if (in_array($file_ext,$extensions)=== false) {
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    // if($file_size > 2097152){
    //    $errors[]='File size must be excately 2 MB';
    // }
    
    if (empty($errors) == true) {
        //upload for the file.
        move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."../CDN/IMG/".$file_name);

        // // Formuleer query
        // $sql = "INSERT INTO `fotoalbums` (`foto`) VALUES ('{$file_name}')";
        // // Poging uitvoeren query
        // if ($conn->query($sql) === TRUE) {
        //     // Uitvoeren query gelukt
        //     echo "Nieuwe profielfoto succesvol toegevoegd aan tabel 'foto'.";
        // } else {
        //     // Uitvoeren query mislukt
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
        // Afsluiten verbinding
        $conn->close();

    } else {
        print_r($errors);
    }
}

closecon($conn);?>