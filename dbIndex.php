<?php
include_once 'db.php';
?>
<?php
// POST VARIABLES
$create = isset($_POST['create']);
$insert = isset($_POST['insert']);
$search = isset($_POST['search']);
if ($create) {
    $tb_name = $_POST['tb_name'];
    $tb_col1 = $_POST['tb_col1'];
    $tb_col2 = $_POST['tb_col2'];
    $tb_col3 = $_POST['tb_col3'];
    $tb_col4 = $_POST['tb_col4'];

    $sql_table = "CREATE TABLE `{$tb_name}` (`{$tb_col1}` varchar(25), `{$tb_col2}` varchar(25),`{$tb_col3}` varchar(25), `{$tb_col4}` varchar(25));"; 
    mysqli_query($conn, $sql_table);
    print_r($_POST);
}
if ($insert) {
    $ins_tbname = $_POST['ins_tbname'];
    $ins_val1 = $_POST['ins_val1'];
    $ins_val2 = $_POST['ins_val2'];
    $ins_val3 = $_POST['ins_val3'];
    $ins_val4 = $_POST['ins_val4'];

    $sql_insert = "INSERT INTO `{$ins_tbname}` VALUES ('{$ins_val1}', '{$ins_val2}', '{$ins_val3}', '{$ins_val4}');";

    mysqli_query($conn, $sql_insert);

}

if ($search) {

    $sch_name = $_POST['sch_name'];
    $sch_col1 = $_POST['sch_col1'];
    $sch_col2 = $_POST['sch_col2'];
    $sch_col3 = $_POST['sch_col3'];
    $sch_col4 = $_POST['sch_col4'];

    $sql_search = "SELECT * FROM {$sch_name};";

    $result = mysqli_query($conn, $sql_search);

    while($row = mysqli_fetch_assoc($result)){
        foreach($row as $fields => $value) {
            echo $value . "\n";
        }

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
            <br>
            <button type="submit" name="create" value="create">Create</button>
        </fieldset>
    </form>
    <!-- Insert Data Form -->
    <form action="dbIndex.php" method="post">
        <legend>Insert Data</legend>
        <fieldset>
            <input type="text" name="ins_tbname" placeholder="Table Name">
            <input type="text" name="ins_val1" placeholder="Value 1">
            <input type="text" name="ins_val2" placeholder="Value 2">
            <input type="text" name="ins_val3" placeholder="Value 3">
            <input type="text" name="ins_val4" placeholder="Value 4">
            <br>
            <button type="submit" name="insert" value="insert">Insert</button>
        </fieldset>
    </form>
    <form action="dbIndex.php" method="post">
        <legend>Search</legend>
        <fieldset>
            <input type="text" name="sch_name" placeholder="Table Name">
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
