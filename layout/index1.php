<?php

include_once ('../res/link.php');


$query1 = "SELECT * FROM user WHERE email = 'admingavindu@gmail.com' AND  pwd = 'admingavindu@gmail.com' LIMIT 1";

$connection = mysqli_connect('localhost', 'root', '', 'fual_station');
$ShowResult = mysqli_query($connection, $query1);
$data= mysqli_fetch_assoc($ShowResult);
$data['user_id'];
echo $data['user_id'];





?>