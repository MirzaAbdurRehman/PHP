<?php
include "db_cnn.php";
?>
<form action="" method="POST">
<label class="form-label">UserName:</label>
<input type="text" class = "form-control" name="username" placeholder="Enter User Name">
<br>
<br>
<label class="form-label">  Password:</label>
<input type="text" class = "form-control" name="password" placeholder="Enter Password">
<br>
<br>
<input type="Submit" class = "form-control" name="submit">
</form>


<?php
if (isset($_POST["submit"])) {
    $User = $_POST['username'];
    $Pass= $_POST['password'];

 
    $sql = "SELECT * FROM `maddy` WHERE  password = {$Pass}";
    $result = mysqli_query($con, $sql) ;  // For Query Execute

    // $total = mysqli_num_rows($result);
    // echo $total;

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["User Name"] = $row['username'];
            $_SESSION["Password"] = $row['password'];

            header("Location: add_new.php?msg= Login successfully");

        }
        

    }else{
        echo "Password not match";
    }
 
 }

?>