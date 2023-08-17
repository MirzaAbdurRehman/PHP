<?Php
include "db_cnn.php";
session_start();
if(!isset($_SESSION["Password"])){
    header("Location: login.php?msg= Login");
}
session_start();
session_unset();
session_destroy();

header("Location: login.php?msg= Login successfully");

?>