<?php

include '../config/conn.php';


$user_id = '5';
$email = 'manager5@gmail.com';
$password = 'manager5@gmail.com';
$userType = 'manager';
$roleid = '1';
$msg = '';

$query = "INSERT INTO user (user_id,email,pwd,roleid) VALUES ('{$user_id}','{$email}','{$password}','{$roleid}')";
$ShowResult = mysqli_query($connection, $query);
if ($ShowResult) {
    $msg .= 'User added successfully';
} else {
    $msg .= 'User not added';
}