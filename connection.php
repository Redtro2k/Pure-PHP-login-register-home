<?php

$con = mysqli_connect('localhost','root', '', 'pure_php_db'); // to connection to mysql you need to identify the hostname,username,password,data (the database based on what you want to connect) 
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQl" . mysqli_connect_error();
}else{
    echo 'connected';
}
?>