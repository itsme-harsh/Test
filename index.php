<?php
require "dbconnect.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ################### jQuery ################### -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 
    
  </head>
  <body>
    
    <!-- ################### NAVBAR ################### -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">SLTIET</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Faculties Portal</a>
                </li>
                &nbsp
                <li class="nav-item">
                <button class="btn btn-primary" style="--bs-btn-focus-shadow-rgb:none;" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Faculty</button>
                </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-success" type="submit">Student Portal</button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- ################### display data ################### -->
    <div class="my-2 m-1"/>
    <div id="displayDataTable"></div>

    <!-- ################### insert modal ################### -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" style="--bs-modal-width: 590px;">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">ADD Faculty</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    <form method="POST" class="border p-3 rounded-2">
 
        <div class="row g-0">
            <div class="col text-center p-2 mb-3 bg-light">
                <span class="fs-3">Registration</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Title</label>
                <select class="form-select" name="title" id="title" required>
                <option selected disabled value="">Choose...</option>                                                     
                                                                                    <option>Professor</option>
                                                                                    <option>Asst. Professor</option>
                                                                                    <option>Lab. Assitant</option>
                                                                                    </select>
            </div>

            <div class="col mb-3">
                <label for="FirstName" class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" id="Name" pattern="[A-z]{3,20}" required>
            </div>
            <div class="col mb-3">
                <label for="LastName" class="form-label">father's name</label>
                <input type="text" class="form-control" name="Surname" id="Surname" pattern="[A-z]{3,20}" required>
            </div>
            <div class="col mb-3">
                <label for="LastName" class="form-label">Surname</label>
                <input type="text" class="form-control" name="FatherName" id="FatherName" pattern="[A-z]{3,20}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label for="Email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <div class="form-text"></div>
            </div>

            <div class="col mb-3">

                <label for="validationCustom04" class="form-label">Department</label>
                <select class="form-select" name="department" id="department" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="CSE">CSE</option>
                        <option value="Mechanical">Mechanical</option>
                        <option value="Electrical">Electrical</option>
                        <option value="Civil">Civil</option>
                </select>                
                <div class="form-text"></div>
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="address" id="address" required>
                <div class="form-text"></div>
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <label for="MobileNumber">Mobile Number</label>
                <input type="tel" class="form-control" name="mobileNumber" id="mobileNumber" pattern="[0-9]{10}" required>
                <div class="form-text"></div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
      <button type="submit" onclick="AddUser()" class="btn btn-primary">ADD</button>
    </div>
    </form>
  </div>
</div>

    <!-- ################### update modal ################### -->

<!-- ################### update modal ################### -->
<!-- Modal 
<div class="modal fade" id="updatexampleModal" tabindex="-1" aria-labelledby="updatexampleModalLabel" aria-hidden="true">
<div class="modal-dialog" style="--bs-modal-width: 590px;">
  <div class="modal-content">
  
    <div class="modal-header">
      <h5 class="modal-title" id="updatexampleModalLabel">Update Details</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    <form method="POST" class="border border p-3 rounded-2">
    
        <div class="row g-0">
            <div class="col text-center p-2 mb-3 bg-light">
                <span class="fs-3">Faculty Details</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Title</label>
                <select class="form-select" name="updateTitle" id="updateTitle" required>
                                                                                    <option selected disabled value="">Choose...</option>
                                                                                    <option>Professor</option>
                                                                                    <option>Asst. Professor</option>
                                                                                    <option>Lab. Assitant</option>
                                                                                    </select>
            </div>

            <div class="col mb-3">
                <label for="FirstName" class="form-label">Name</label>
                <input type="text" class="form-control" name="updateName" id="updateName" pattern="[A-z]{3,20}" required>
            </div>
            <div class="col mb-3">
                <label for="LastName" class="form-label">father's name</label>
                <input type="text" class="form-control" name="updateSurname" id="updateSurname" pattern="[A-z]{3,20}" required>
            </div>
            <div class="col mb-3">
                <label for="LastName" class="form-label">Surname</label>
                <input type="text" class="form-control" name="updateFatherName" id="updateFatherName" pattern="[A-z]{3,20}" required>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label for="Email" class="form-label">Email ID</label>
                <input type="email" class="form-control" name="updateEmail" id="updateEmail" required>
                <div class="form-text"></div>
            </div>

            <div class="col mb-3">

                <label for="validationCustom04" class="form-label">Department</label>
                <select class="form-select" name="updateDepartment" id="updateDepartment" required>
                        <option selected disabled value="">Choose...</option>
                        <option>CSE</option>
                        <option>Mechanical</option>
                        <option>Electrical</option>
                        <option>Civil</option>
                </select>                
                <div class="form-text"></div>
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="updateAddress" id="updateAddress" required>
                <div class="form-text"></div>
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <label for="MobileNumber">Mobile Number</label>
                <input type="tel" class="form-control" name="updateMobileNumber" id="updateMobileNumber" pattern="[0-9]{10}" required>
                <div class="form-text"></div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" onclick="updateDetails()" class="btn btn-primary">Update</button>
      <input type="hidden" name="hiddendata" id="hiddendata">
    </div>
    </form>
  </div>
</div>
-->


    <!-- ################### insert modal ################### -->


<script>

//stable display data
$(document).ready(function(){
    displayData();
});    


// display function
function displayData(){
    var displayData="true";
    $.ajax({
        url:"display.php",
        type:'POST',
        data:{
            displaySend:displayData
        },
        success:function(data,status){
            $('#displayDataTable').html(data); 
        }
    })
}



// insert function

function AddUser(){
    var AddTitle = $('#title option:selected').text();
    var AddName = $('#Name').val();
    //console.log(AddName);
    var AddFatherName = $('#FatherName').val();
    var AddSurname = $('#Surname').val();
    var AddEmail = $('#email').val();
    var AddDepartment = $('#department option:selected').text();
    var AddAddress = $('#address').val();
    var AddMobileNumber = $('#mobileNumber').val();
    
    $.ajax({
        url:"insert.php",
        type:'POST',
        data:{
            TitleSend:AddTitle,
            NameSend:AddName,
            FatherNameSend:AddFatherName,
            SurnameSend:AddSurname,
            EmailSend:AddEmail,
            DepartmentSend:AddDepartment,
            AddressSend:AddAddress,
            MobileNumberSend:AddMobileNumber
        },
        success:function(data,status){
            displayData();
        }
    });
}


//Delete function
function DeleteUser(deleteid){
    $.ajax({
        url:"delete.php",
        type:'POST',
        data:{
            deletesend: deleteid
        },
        success:function(data,status){
            displayData();
        }
    });
}

//GetDetails function
function getDetails(updateid){
    
     $('#hiddendata').val(updateid);
     /*$.POST("update.php",{updateid:updateid},function(data,status){
         var userid=JSON.parse(data);
        $('updateTitle option:selected').text(userid.Title);
         $('updateName').val(userid.Name);
         $('updateSurname').val(userid.father name);
         $('updateFatherName').val(userid.Surname);
         $('updateEmail').val(userid.Email_ID);
         $('updateDepartment option:selected').text(userid.Department);
         $('updateAddress').val(userid.Address);
         $('updateMobileNumber').val(userid.MobileNumber);         
     });
     $('#updateModal').modal('show');*/
}

//update function
function updateDetails(){
    var updateTitle = $('#updateTitle option:selected').text();
    var updateName = $('#updateName').val();
    var updateFatherName = $('#updateFatherName').val();
    var updateSurname = $('#updateSurname').val();
    var updateEmail = $('#updateEmail').val();
    var updateDepartment = $('#updateDepartment option:selected').text();
    var updateAddress = $('#updateAddress').val();
    var updateMobileNumber = $('#updateMobileNumber').val();
    var hiddendata = $('#hiddendata').val();

    $.POST("update.php",{
        updateTitle:updateTitle,   
        updateName:updateName,
        updateFatherName:updateFatherName,
        updateSurname:updateSurname,
        updateEmail:updateEmail,
        updateDepartment:updateDepartment,
        updateAddress:updateAddress,
        updateMobileNumber:updateMobileNumber,
        hiddendata:hiddendata
    },function(data,status){
        $('#updatexampleModal').modal('hide');
        displayData();
    });
}

</script>



<!-- ################### scripts ################### -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> 
    
    
    <!-- ################### datatable ################### -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 

<!-- ################### custom ################### -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
</body>
</html>