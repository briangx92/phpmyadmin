<?php
include_once 'db.php';
?>
<?php
// POST VARIABLES
$create = isset($_POST['create']);
$insert = isset($_POST['insert']);
$search = isset($_POST['search']);

// FUNCTION FOR CREATING A TABLE
function createTable($create) {

    if ($create) {
        $tb_name = $_POST['tb_name'];
        $tb_col1 = $_POST['tb_col1'];
        $tb_col2 = $_POST['tb_col2'];
        $tb_col3 = $_POST['tb_col3'];
        $tb_col4 = $_POST['tb_col4'];
         
        $sql_tb_table = "CREATE TABLE `$tb_name` ('$tb_col1' varchar(25), '$tb_col2' varchar(25), '$tb_col3' varchar(25), '$tb_col4' varchar(25);"; 

    }

}

// FUNCTION FOR INSERTING VALUES IN A TABLE
function insertTable($insert,$create) {

    if ($insert || $create) {
        // Columns
        $tb_col1 = $_POST['tb_col1'];
        $tb_col2 = $_POST['tb_col2'];
        $tb_col3 = $_POST['tb_col3'];
        $tb_col4 = $_POST['tb_col4'];

        // Insert values
        $ins_name = $_POST['ins_name'];
        $ins_val1 = $_POST['ins_val1'];
        $ins_val2 = $_POST['ins_val2'];
        $ins_val3 = $_POST['ins_val3'];
        $ins_val4 = $_POST['ins_val4'];
        
        // Query
        $sql_ins_table = "INSERT INTO `$ins_name` (`$tb_col1`, `$tb_col2`, `$tb_col3`, `$tb_col4`) VALUES ('$ins_val1', '$ins_val2', '$ins_val3', '$ins_val4');";


    }

}


// FUNCTION FOR SEARCHING
function searchTable($search) {

    if ($search) {
        $sch_name = $_POST['sch_name'];
        $sch_col1 = $_POST['sch_col1'];
        $sch_col2 = $_POST['sch_col2'];
        $sch_col3 = $_POST['sch_col3'];
        $sch_col4 = $_POST['sch_col4'];




    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="dbIndex.php" method="post">
        <fieldset>
            <!-- Create Table Form -->
            <legend>Create Table</legend>
            <input type="text" name="tb_name" placeholder="Table Name">
            <br>
            <input type="text" name="tb_col1" placeholder="Column 1">
            <input type="text" name="tb_col2" placeholder="Column 2">
            <input type="text" name="tb_col3" placeholder="Column 3">
            <input type="text" name="tb_col4" placeholder="Column 4">
            <button type="submit" name="create" value="create">Create</button>
        </fieldset>
    </form>
    <!-- Insert Data Form -->
    <form action="dbIndex.php" method="post">
        <legend>Insert Data</legend>
        <fieldset>
            <input type="text" name="ins_name" placeholder="Table Name">
            <br>
            <input type="text" name="ins_val1" placeholder="Column 1">
            <input type="text" name="ins_val2" placeholder="Column 2">
            <input type="text" name="ins_val3" placeholder="Column 3">
            <input type="text" name="ins_val4" placeholder="Column 4">
            <button type="submit" name="insert" value="insert">Insert</button>
        </fieldset>
    </form>
    <!-- Search Data -->
    <form action="dbIndex.php" method="post">
        <legend>Search</legend>
        <fieldset>
            <input type="text" name="sch_name" placeholder="Search Data">
            <br>
            <input type="text" name="sch_col1" placeholder="Column 1">
            <input type="text" name="sch_col2" placeholder="Column 2">
            <input type="text" name="sch_col3" placeholder="Column 3">
            <input type="text" name="sch_col4" placeholder="Column 4">
            <button type="submit" name="search" value="search">Search</button>
        </fieldset>
    </form>
</body>
</html>


<?php

// $sql = "INSERT INTO `customer` (`ID`, `fName`, `lName`, `Street`, `City`, `State`) VALUES ('10003', 'Leroy', 'Jenkins', 'Colonial Village', 'Hershey', 'VA');";
// mysqli_query($conn, $sql);


?>
