<?php
include('Includes'.DIRECTORY_SEPARATOR.'constants.php');


//connect to server
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_set_charset($db, "utf8");



//select data base
mysqli_select_db($db, DB_NAME);
?>