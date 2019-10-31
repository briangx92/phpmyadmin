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
        $ct_name = $_POST['ct_name'];
        $ct_col1 = $_POST['ct_col1'];
        $ct_col2 = $_POST['ct_col2'];
        $ct_col3 = $_POST['ct_col3'];
        $ct_col4 = $_POST['ct_col4'];
         
        




    }

}

// FUNCTION FOR INSERTING VALUES IN A TABLE
function insertTable($insert) {

    if ($insert) {
        $ins_name = $_POST['ins_name'];
        $ins_col1 = $_POST['ins_col1'];
        $ins_col2 = $_POST['ins_col2'];
        $ins_col3 = $_POST['ins_col3'];
        $ins_col4 = $_POST['ins_col4'];




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
            <input type="text" name="ct_name" placeholder="Table Name">
            <br>
            <input type="text" name="ct_col1" placeholder="Column 1">
            <input type="text" name="ct_col2" placeholder="Column 2">
            <input type="text" name="ct_col3" placeholder="Column 3">
            <input type="text" name="ct_col4" placeholder="Column 4">
            <button type="submit" name="create" value="create">Create</button>
        </fieldset>
    </form>
    <!-- Insert Data Form -->
    <form action="dbIndex.php" method="post">
        <legend>Insert Data</legend>
        <fieldset>
            <input type="text" name="ins_name" placeholder="Insert Data">
            <br>
            <input type="text" name="ins_col1" placeholder="Column 1">
            <input type="text" name="ins_col2" placeholder="Column 2">
            <input type="text" name="ins_col3" placeholder="Column 3">
            <input type="text" name="ins_col4" placeholder="Column 4">
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

 //ENTER VARIABLE HERE TO PUSH INTO DB



?>
