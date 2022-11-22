<?php
require_once ("connection.php");

    if(isset($_POST['delete'])){
        $id = $_POST['search'];
        $query = "DELETE FROM form WHERE id = '$id' ";
        $data = mysqli_query($dbCon, $query);

        if($data){
            echo "<script> alert('Are you sure delete this person?') </script>";
        }
        else{
            echo "<script> alert('Failed to deleted') </script>";
        }
    }
?>