<?php
    include 'conn.php';

        $ID     = $_POST['id'];
        $firsname   = $_POST['name'];
        $address= $_POST['address'];
        $nic    = $_POST['nic'];
        $dob =$_POST['dob'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];


        $sql= "INSERT INTO student (ID, Name, Address, NIC_number, Dob, Phone_number,Gender,email)
        VALUES('$ID','$firsname','$address','$nic', '$dob','$phone','$gender','$email')";
        
        
   if($con->query($sql))
   {
      echo "data saved";
   }

?>