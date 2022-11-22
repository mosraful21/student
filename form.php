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

                <select class="textfield" name="gender">
                    <option value="Not Selected">Select Gender</option>
                    <option value="Male"
                        <?php
                            if($result['std_gender'] === "Male"){
                                echo "Selected";
                            }
                        ?>
                    >Male</option>
                    <option value="Female"
                        <?php
                            if($result['std_gender'] === "Female"){
                                echo "Selected";
                            }
                        ?>
                    >Female</option>
                    <option value="other"
                        <?php
                            if($result['std_gender'] === "Other"){
                                echo "Selected";
                            }
                        ?>
                    >Other</option>
                </select>

                <input type="email" name="email" class="textfield" placeholder="Email" value="<?php if(isset($_POST['searchData'])){echo $result['std_email'];} ?>">

                <select class="textfield" name="department">
                    <option>Select Department</option>
                    <option value="CSE"
                        <?php
                            if($result['std_department'] === "CSE"){
                                echo "Selected";
                            }
                        ?>
                    >CSE</option>
                    <option value="EEE"
                        <?php
                            if($result['std_department'] === "EEE"){
                                echo "Selected";
                            }
                        ?>
                    >EEE</option>
                    <option value="Textile"
                        <?php
                            if($result['std_department'] === "Textile"){
                                echo "Selected";
                            }
                        ?>
                    >Textile</option>
                    <option value="BBA"
                        <?php
                            if($result['std_department'] === "BBA"){
                                echo "Selected";
                            }
                        ?>
                    >BBA</option>
                    <option value="English"
                        <?php
                            if($result['std_department'] === "English"){
                                echo "Selected";
                            }
                        ?>
                    >English</option>
                </select>
            
                <textarea placeholder="Address" name="address"><?php if(isset($_POST['searchData'])){echo $result['std_address'];} ?></textarea>

                <input type="submit" value="Search" name="searchData" class="btn" style="background-color: gray;">
                <input type="submit" value="Save" name="save" class="btn" style="background-color: green;">
                <input type="submit" value="Modify" name="" class="btn" style="background-color: orange;">
                <input type="submit" value="Delete" name="delete" class="btn" style="background-color: red;">
                <input type="submit" value="Clear" name="" class="btn" style="background-color: blue;">
            </div>
        </form>
    </div>
</body>
</html>
