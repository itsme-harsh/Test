<?php
require "dbconnect.php";

if(isset($_POST['deletesend'])){
    $deleteid = $_POST['deletesend'];

    $sql = "Delete from `faculty` where No=$deleteid;";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "failed to delete..!!";
    }
}
?>