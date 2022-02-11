<?php

require_once __DIR__.'/connection/dbconnect.php';
require_once __DIR__.'/connection/functions.php';

$fname = post('fname');
$lname = post('lname');
$email = post('email');
$mobile = post('mobile');
$password = post('password');
$cpassword = post('cpassword');
$profilepic = files('profilepic');

$filename = $profilepic['name'];

$sql = "INSERT INTO registration(fname, lname, email, mobile, password, cpassword, profilepic) 
VALUES('{$fname}', '{$lname}', '{$email}', '{$mobile}', '{$password}', '{$cpassword}', '{$filename}');";

$result = mysqli_query($conn, $sql);
if($result){
    header('location: index.php?msg=ins');
}

?>