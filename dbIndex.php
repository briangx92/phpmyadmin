<?php
include_once 'db.php';
?>
<?php
// POST VARIABLES
$create = isset($_POST['create']);
$insert = isset($_POST['insert']);
$search = isset($_POST['search']);
if ($create) {

    $sql_table = "CREATE TABLE `{$_POST['tb_name']}` (`{$_POST['tb_col1']}` varchar(25), `{$_POST['tb_col2']}` varchar(25),`{$_POST['tb_col3']}` varchar(25), `{$_POST['tb_col4']}` varchar(25));"; 
    mysqli_query($conn, $sql_table);
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
            <br>
            <button type="submit" name="create" value="create">Create</button>
        </fieldset>
    </form>
    <!-- Insert Data Form -->
    <form action="dbIndex.php" method="post">
        <legend>Insert Data</legend>
        <fieldset>
            <input type="text" name="ins_val1" placeholder="Column 1">
            <input type="text" name="ins_val2" placeholder="Column 2">
            <input type="text" name="ins_val3" placeholder="Column 3">
            <input type="text" name="ins_val4" placeholder="Column 4">
            <br>
            <button type="submit" name="insert" value="insert">Insert</button>
        </fieldset>
    </form>
    <form action="dbIndex.php" method="post">
        <legend>Search</legend>
        <fieldset>
            <input type="text" name="sch_name" placeholder="Search Data">
            <br>
            <input type="text" name="sch_col1" placeholder="Column 1">
            <input type="text" name="sch_col2" placeholder="Column 2">
            <input type="text" name="sch_col3" placeholder="Column 3">
            <input type="text" name="sch_col4" placeholder="Column 4">
            <br>
            <button type="submit" name="search" value="search">Search</button>
        </fieldset>
    </form>
</body>
</html>


<?php

?>
