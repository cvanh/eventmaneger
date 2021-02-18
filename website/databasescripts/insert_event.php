<!-- <head>
  <meta http-equiv='refresh' content='5; URL=./admin.php'>
</head> -->
<h1>event created/updated redirecting to the admin panel</h1>

<?php
include "../databaselogin.php";
OpenCon();
// FIXIT TODO
$titel_event = htmlspecialchars($_POST['titel_event']);
// $foto_event = htmlspecialchars($_POST['foto_event']);
$locatie_event = htmlspecialchars($_POST['locatie_event']);
$description_event = htmlspecialchars($_POST['message']);
$price_event = htmlspecialchars($_POST['price_event']);
$date_event = htmlspecialchars($_POST['start_event']);
$number_tickets  = htmlspecialchars($_POST['number_tickets']);
// $date_event = htmlspecialchars($_POST['date_event']);
// $permissions_event = htmlspecialchars($_POST['permissions_event']);

// var_dump($_POST);
//TODO update command 
$sql_insert = "UPDATE events SET titel_event = '" . $titel_event . "', locatie_event = '".$locatie_event."', description_event = '". $description_event ."', price_event = '".$price_event."', number_tickets = '".$number_tickets."', start_event = ". $date_event ." WHERE id_event = 1";
$result = mysqli_query($conn, $sql_insert);
// var_dump($sql_insert);
// var_dump($result);
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
        move_uploaded_file($file_tmp,$_SERVER['DOCUMENT_ROOT']."../cdn/img/".$file_name);

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
        // $conn->close();

    } else {
        print_r($errors);
    }
}
closecon($conn);
?>
