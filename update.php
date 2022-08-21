<?php
require "dbconnect.php";

if(isset($_POST['updateid'])){
    $user_id = $_POST['userid'];

    $sql = "SELECT * from `faculty` WHERE No = $user_id";
    $result = mysqli_query($conn,$sql);
    $response = array();
    while($row=mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or Data not found";
}

if(isset($_POST['hiddendata'])){
    $updateid = $_POST['hiddendata'];
    $title = $_POST['updateTitle'];
    $name = $_POST['updateName'];
    $fathername = $_POST['updateFatherName'];
    $surname = $_POST['updateSurname'];
    $email = $_POST['updateEmail'];
    $department = $_POST['updateDepartment'];
    $address = $_POST['updateAddress'];
    $mobilenumber = $_POST['updateMobileNumber'];
    
    $sql = "UPDATE `faculty` SET `Title`='$title',`Name`='$name',`father name`=$fathername,`Surname`='$surname',`Email_ID`='$email',`Department`='$department',`Address`='$address',`MobileNumber`='$mobilenumber' WHERE No=$updateid";

    $result = mysqli_query($conn,$sql);
}

?>