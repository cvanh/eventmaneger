
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
        <a href="./index.php"><div id="logo_button" class="header_button">
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
var_dump($_GET)
?>
    <div id="footer">
        <b>copyright 2021 imaretarded.dev planning software</b>
    </div>
</body>
<?php closecon($conn)?>
</html>