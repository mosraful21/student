<?php
require_once ("connection.php");

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