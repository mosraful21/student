<?php
    include('connection.php');
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
                <input type="text" name="" class="textfield" placeholder="Search ID">
                <input type="text" name="name" class="textfield" placeholder="Student Name">
                <input type="text" name="intake" class="textfield" placeholder="Intake">
                <input type="text" name="section" class="textfield" placeholder="Section">

                <select class="textfield" name="gender">
                    <option>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>

                <input type="email" name="email" class="textfield" placeholder="Email">

                <select class="textfield" name="department">
                    <option>Select Department</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>Textile</option>
                    <option>DDA</option>
                    <option>English</option>
                </select>
            
                <textarea placeholder="Address" name="address"></textarea>
                <input type="submit" value="Search" name="" class="btn" style="background-color: gray;">
                <input type="submit" value="Save" name="save" class="btn" style="background-color: green;">
                <input type="submit" value="Modify" name="" class="btn" style="background-color: orange;">
                <input type="submit" value="Delete" name="" class="btn" style="background-color: red;">
                <input type="submit" value="Clear" name="" class="btn" style="background-color: blue;">
            </div>
        </form>
    </div>
</body>
</html>


<!-- <?php
    if(isset($_POST['save'])){
        $name       = $_POST['name'];
        $intake     = $_POST['intake'];
        $section    = $_POST['section'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $department = $_POST['department'];
        $address    = $_POST['address'];

        //here (form) is database table name
        $query = "INSERT INTO form (std_name,std_intake,std_section,std_gender,std_email,std_department,std_address) VALUES ('$name','$intake','$section','$gender','$email','$department','$address')";

        $data = mysqli_query($dbCon,$query);
        if($data){
            echo "data insert";
        }
        else{
            echo "failed";
        }
    }    
?> -->