<?php
function OpenCon()
 {
 $dbhost = "imaretarded.dev";
 $dbuser = "school";
 $dbpass = "school";
 $db = "eventmanager";

  global $conn;
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 }


function closecon($conn){
    $conn -> close();
}
?>