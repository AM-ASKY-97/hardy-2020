<?php
    include 'conn.php';

    $sql="DELETE FROM student WHERE ID='".$_GET["id"]."'";

    $query_run=mysqli_query($con,$sql);

    if($query_run)
    {
        ?>
        <script>
            alert("Your data has been deleted");
            window.location.href="index.php";
        </script>
        <?php
    }

    else
    {
        ?>
        <script>
            alert("No delete data")
            window.location.href="view_student.php";
        </script>
        <?php
    }
?>