<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/2759fd8f76.js" crossorigin="anonymous"></script>

  <style>
    #re{color:red}
  </style>
</head>
<body>
	
<?php

include_once 'conn.php';
?>

<?php
include 'ajax.php';
?>

    <div class="container">
    <div class="card">
    <h3 class="card-header mb-5 text-uppercase bg-info">registration form </h3>
    <div class="card-body">

  <form id="form">

  <div class="form-group">
    <label for="exampleFormControlInput1">Registration Number <span id="re">*</span></label>
    <input type="email" class="form-control" name="id" id="id" placeholder="registraion number">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Full Name <span id="re">*</span></label>
    <input type="text" class="form-control" name="name" id="name" placeholder="full name">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Home Address <span id="re">*</span></label>
    <textarea class="form-control" name="address" id="address" rows="3" placeholder="address"></textarea>
  </div>

<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

<h6 class="mb-0 me-4" id="gen"><span>Gender : </span> </h6>

<div class="form-check form-check-inline mb-0 me-4">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="male"
    value="Male"
    checked
  />
  <label class="form-check-label" for="male">Male</label>
</div>

<div class="form-check form-check-inline mb-0 me-4">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="female"
    value="Female"
    
  />
  <label class="form-check-label" for="female">Female</label>
</div>

</div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Email address <span id="re">*</span></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nic Number</label>
    <input type="text" class="form-control" name="nic" id="nic" placeholder="nic number">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date Of Birth <span id="re">*</span></label>
    <input type="text" class="form-control" name="dob" id="dob" placeholder="YYYY-MM-DD">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input type="email" class="form-control" name="phone" id="phone" placeholder="cntact number">
  </div>

  <div class="row ">
  <div class="col-lg-6 p10">
  <button type="button"  name="submit" id="submit" class="btn btn-success text-center"><i class="far fa-check-circle"></i><span>Submit</span></button>
  </div>

  <div class="col-lg-6 p10">
  <button type="reset"  class="btn btn-danger text-center"><i class="fa fa-ban" aria-hidden="true"></i><span>Reset all</span></button>
  </div>
  </div>

  
 </form>

    </div>
    </div>

    </div>


    <script>
      $(document).ready(function(){
        $("#submit").click(function(){

          var $id = $("#id").val();
          var $name = $("#name").val();
          var $address = $("#address").val();
          var $gender = $("#gender").val();
          var $email = $("#email").val();
          
          if($id == '' || $name == '' || $address == '' || $gender == '' || $email == '')
          {
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'All Fileds Are Requried!',
            })
          }

            else
          {
            $.ajax({
              url:"add.php",
              type:"POST",
              data:$("#form").serialize(),
              success:function(){
                swal({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success",
              });
              }
            });
          }

        
        });
      });
    </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>