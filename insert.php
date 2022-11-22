<?php
require_once ("connection.php");

    if(isset($_POST['save'])){
        $name       = $_POST['name'];
        $intake     = $_POST['intake'];
        $section    = $_POST['section'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $department = $_POST['department'];
        $address    = $_POST['address'];

        //here (form) is database table name
        $query = "INSERT INTO form (std_name, std_intake, std_section, std_gender, std_email, std_department, std_address) VALUES ('$name', '$intake', '$section', '$gender', '$email', '$department', '$address')";
        $data = mysqli_query($dbCon, $query);

        if($data){
            echo "<script> alert('Data save into Database') </script>";
        }
        else{
            echo "<script> alert('Don't data save into Database') </script>";
        }
    }    
?>