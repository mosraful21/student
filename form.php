<?php
    include('connection.php');
    require_once("insert.php");
    require_once("search.php");
    require_once("update.php");
    require_once("delete.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
        <form action="#" method="POST">
            <h1>Simple Student Management System</h1>
            <div class="form">
                <!-- input field -->
                <input type="text" name="search" class="textfield" placeholder="Search ID" value="<?php if(isset($_POST['searchData'])){echo $result['id'];} ?>">

                <input type="text" name="name" class="textfield" placeholder="Student Name" value="<?php if(isset($_POST['searchData'])){echo $result['std_name'];} ?>">

                <input type="text" name="intake" class="textfield" placeholder="Intake" value="<?php if(isset($_POST['searchData'])){echo $result['std_intake'];} ?>">
                <input type="text" name="section" class="textfield" placeholder="Section" value="<?php if(isset($_POST['searchData'])){echo $result['std_section'];} ?>">

                <input type="text" name="gender" class="textfield" placeholder="Gender" value="<?php if(isset($_POST['searchData'])){echo $result['std_gender'];} ?>">

                <input type="email" name="email" class="textfield" placeholder="Email" value="<?php if(isset($_POST['searchData'])){echo $result['std_email'];} ?>">

                <input type="text" name="department" class="textfield" placeholder="Department" value="<?php if(isset($_POST['searchData'])){echo $result['std_department'];} ?>">
            
                <textarea placeholder="Address" name="address"><?php if(isset($_POST['searchData'])){echo $result['std_address'];} ?></textarea>

            <!-- Button  -->
                <input type="submit" value="Search" name="searchData" class="btn" style="background-color: gray;">
                <input type="submit" value="Save" name="save" class="btn" style="background-color: green;">
                <input type="submit" value="Update" name="update" class="btn" style="background-color: orange;">
                <input type="submit" value="Delete" name="delete" class="btn" style="background-color: red;">
                <input type="reset" value="Clear" name="" class="btn" style="background-color: blue;">

            </div>
        </form>
    </div>
</body>
</html>
