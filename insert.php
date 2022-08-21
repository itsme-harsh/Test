<?php
require "dbconnect.php";

extract($_POST);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "INSERT INTO `faculty` (`Title`, `Name`, `father name`, `Surname`, `Email_ID`, `Department`, `Address`, `MobileNumber`) VALUES ('$TitleSend', '$NameSend', '$FatherNameSend', '$SurnameSend', '$EmailSend', '$DepartmentSend', '$AddressSend', '$MobileNumberSend');";
    $result = mysqli_query($conn,$sql);

if(!$result){
 echo "failed";
}

}
?>
