<?php
require_once ("connection.php");

    if(isset($_POST['update'])){
        $id       = $_POST['search'];
        $name       = $_POST['name'];
        $intake     = $_POST['intake'];
        $section    = $_POST['section'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $department = $_POST['department'];
        $address    = $_POST['address'];

        $query = "UPDATE form SET std_name='$name', std_intake='$intake', std_section='$section', std_gender='$gender', std_email='$email', std_department='$department', std_address='$address' WHERE id = '$id' ";
        $data = mysqli_query($dbCon, $query);

        if($data){
            echo "<script> alert('Information Updated') </script>";
        }
        else{
            echo "<script> alert('Failed to Updated') </script>";
        }
    }
?>