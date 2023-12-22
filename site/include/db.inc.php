<?php
// 1. Create a database connection
$connt = mysqli_connect("localhost","root","root");
if (!$connt) {
    die("Database connection failed: " . mysqli_connect_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connt, "ejob");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connt));
}
?>
