<?php
    include('connection.php');
?>

<!-- Data insert part -->
<?php
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


<!-- Data search part  -->
<?php
    if(isset($_POST['searchData'])){
        $search = $_POST['search'];

        // here (form) is database table name and (id) is search id field
        $query = "SELECT * FROM form WHERE id = '$search' ";
        $data = mysqli_query($dbCon, $query);

        $result = mysqli_fetch_assoc($data);
        // $name = $result['std_name'];
        // echo $name;
    }
?>


<!-- Update data in database -->
<?php
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


<!-- Delete data in database -->
<?php
    if(isset($_POST['delete'])){
        $id = $_POST['search'];
        $query = "DELETE FROM form WHERE id = '$id' ";
        $data = mysqli_query($dbCon, $query);

        if($data){
            echo "<script> alert('Information Deleted') </script>";
        }
        else{
            echo "<script> alert('Failed to deleted') </script>";
        }
    }
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
            <h1>Student Management System</h1>
            <div class="form">
                <input type="text" name="search" class="textfield" placeholder="Search ID" value="<?php if(isset($_POST['searchData'])){echo $result['id'];} ?>">
                <input type="text" name="name" class="textfield" placeholder="Student Name" value="<?php if(isset($_POST['searchData'])){echo $result['std_name'];} ?>">
                <input type="text" name="intake" class="textfield" placeholder="Intake" value="<?php if(isset($_POST['searchData'])){echo $result['std_intake'];} ?>">
                <input type="text" name="section" class="textfield" placeholder="Section" value="<?php if(isset($_POST['searchData'])){echo $result['std_section'];} ?>">

                <input type="text" name="gender" class="textfield" placeholder="Gender" value="<?php if(isset($_POST['searchData'])){echo $result['std_gender'];} ?>">

                <input type="email" name="email" class="textfield" placeholder="Email" value="<?php if(isset($_POST['searchData'])){echo $result['std_email'];} ?>">

                <input type="text" name="department" class="textfield" placeholder="Department" value="<?php if(isset($_POST['searchData'])){echo $result['std_department'];} ?>">
                
            
                <textarea placeholder="Address" name="address"><?php if(isset($_POST['searchData'])){echo $result['std_address'];} ?></textarea>

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
