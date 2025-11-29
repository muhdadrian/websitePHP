<?php
include("database.php");

$sql = "INSERT INTO users (user, password) VALUES ('Spongebob', 'pineapple1')";
//make sure to use two URLs below:
//http://localhost/website/100/
//http://localhost/phpmyadmin/index.php?route=/sql&db=businessdb&table=users&pos=0

mysqli_query($conn, $sql);

mysqli_close($conn);//in the end of the script, we need to close the connection -> include("database.php");
//The Intelephense extension is giving us the 'red underlined $conn' warning. You can disable the extension if it annoys you. But, it will work just fine  
//The red line is because the VSC does recognize the connection from other file
?>