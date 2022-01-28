<?php
include __DIR__ .'/dbconnect.php';
$sql = "CREATE TABLE DeeproshanKumar(
	id INT(45) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(25),
	email VARCHAR(50),
	age INT(2)
);";

if(mysqli_query($conn,$sql)){
echo 'Table has been created...!';

}else{
echo 'Table can not be careated...!'.mysqli_error($conn);
}