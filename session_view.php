<?php

session_start();

// print_r($_SESSION);  // print array all the members
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION["User Name"])){
        echo "User Name is " . $_SESSION["User Name"];
    }
    
    ?>
</body>
</html>