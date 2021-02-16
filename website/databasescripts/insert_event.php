<?php
$titel_event = htmlspecialchars($_POST['titel_event']);
$locatie_event = htmlspecialchars($_POST['locatie_event']);
$foto_event = htmlspecialchars($_POST['foto_event']);
$beschrijving_event = htmlspecialchars($_POST['beschrijving_event']);
$price_event = htmlspecialchars($_POST['price_event']);

var_dump($_POST);
/*
edit data moet naar het database
en er moet een formulier gemaakt worden op de data toetevoegen
file upload doe ik wel
*/

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
// kanker is stom
?>