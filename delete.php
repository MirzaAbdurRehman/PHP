<?php

include "db_cnn.php";
session_start();
if(!isset($_SESSION["Password"])){
    header("Location: login.php?msg= Login");
}
$id = $_GET["id"];
$sql = "DELETE FROM `maddy` WHERE id = $id";
$result = mysqli_query($con, $sql); //For executing Purpose

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}