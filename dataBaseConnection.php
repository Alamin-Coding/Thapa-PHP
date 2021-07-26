<?php
$server = "localhost";
$user = "root";
$userPassword = "";
$dataBase = "registration";

$con = mysqli_connect($server, $user, $userPassword, $dataBase);

if ($con) {
    ?>
       <script>
           alert("Connection Succeseful");
       </script> 
    <?php
} else {
    ?>
       <script>
           alert("No Connection");
       </script> 
    <?php
}


?>