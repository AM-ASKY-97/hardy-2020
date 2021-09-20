<?php
    include 'conn.php';

    if(isset($_POST['edit']))
    {
        $ID=$_POST['id'];

        $query = "UPDATE student SET  Name='$_POST[name]', Address='$_POST[address]', NIC_number='$_POST[nic]', Gender='$_POST[gender]',
        Dob='$_POST[dob]', Phone_number='$_POST[phone]', email='$_POST[email]'  WHERE ID='$_POST[id]'";

        $query_run=mysqli_query($con,$query);

        if($query_run)
        {
            ?>
            <script>
                alert("success full ubdate");
            </script>

            <?php
        }

        else
        {
            ?>
            <script>
                alert("erro");
            </script>
            <?php 
        }
    }


    $result=mysqli_query($con,"SELECT * FROM student WHERE ID='".$_GET['id']."'");

    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
    #re{color:red}
  </style>
</head>
<body>
    
<div class="container">
    <div class="card">
    <h3 class="card-header mb-5 text-uppercase bg-info">Ubdate form </h3>
    <div class="card-body">

  <form method="POST">

  <div class="form-group">
    <label for="exampleFormControlInput1">Registration Number <span id="re">*</span></label>
    <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['ID']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Full Name <span id="re">*</span></label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['Name']; ?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Home Address <span id="re">*</span></label>
    <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['Address']; ?>">
    
  </div>

<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

<h6 class="mb-0 me-4" id="gen"><span>Gender : </span> </h6>

<div class="form-check form-check-inline mb-0 me-4">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="male"
    value="<?php echo $row['Gender']; ?>"
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
    value="<?php echo $row['Gender']; ?>"
    
  />
  <label class="form-check-label" for="female">Female</label>
</div>

</div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Email address <span id="re">*</span></label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?> ">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nic Number</label>
    <input type="text" class="form-control" name="nic" id="nic" value="<?php echo $row['NIC_number']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Date Of Birth <span id="re">*</span></label>
    <input type="text" class="form-control" name="dob" id="dob" value="<?php echo $row['Dob']; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $row['Phone_number']; ?>">
  </div>

  <div class="row ">
  <div class="col-lg-6 p10">
   <button type="submit"  class="btn btn-success text-center" name="edit" onclick="loadfiles('View_Student','loadArea')"><i class="fa fa-ban" aria-hidden="true"></i><span>Ubdate</span></button> 
  
  </div>

  <div class="col-lg-6 p10">
  <button type="reset"  class="btn btn-danger text-center"><i class="fa fa-ban" aria-hidden="true"></i><span>Reset all</span></button>
  </div>
  </div>

  
 </form>

    </div>
    </div>

    </div>









</body>
</html>