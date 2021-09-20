<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'ajax.php';
?>

<div class="row">
    <div class="col p10">
    <div class="card">
    <h3 class="card-header mb-5 text-uppercase bg-info">Student information</h3>
    <div class="card-body">
       
    <div class="table-responsive">


    <table class="table table-bordered col-lg table-dark">
                        <tr class="text-center ">
                            <th>Registration Number</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Nic Number</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th colspan=2>Action</th>    
                        </tr>

    <?php
        include('conn.php');

        $sql="SELECT * FROM student";

        $result=$con->query($sql);

        if ($result->num_rows >0)
        {
           
            while($row=$result->fetch_assoc()){

                ?>
                <tr>
                <td class="text-center"> <?php echo $row['ID']; ?> </td>
                <td> <?php echo $row['Name']; ?> </td>
                <td> <?php echo $row['Address']; ?> </td>
                <td> <?php echo $row['NIC_number']; ?> </td>
                <td> <?php echo $row['Gender']; ?> </td>
                <td> <?php echo $row['Dob']; ?> </td>
                <td> <?php echo $row['Phone_number']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td>
                    <a href="ubdate.php?id=<?php echo $row["ID"]; ?>"><button class="btn btn-success text-center">Edit</button></a>
                </td>

                <td>
                    <button class="btn btn-danger text-center">Delete</button>
                </td>
                </tr> 
                <?php
            }      
            ?>
        </table>
        <?php
        
        }
        

        else
        {
            echo"No Records"; 
        }
    ?>
</div>
    
    </div>

    </div>
    </div>
    </div>

</body>
</html>
</body>
</html>