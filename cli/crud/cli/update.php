<?php

#step1 : make connection

include __DIR__.'/dbconnect.php';
#step2 : prepare the Query

$id = readline('Enter userid : ');
$name = readline('Enter the name : ');
$email = readline('Enter the email : ');

$sql = "update emp set name = '{$name}', email = '{$email}' where id = '{$id}';";

#step3 : Execute the Query or Fire the Query

if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
		echo 'Record updated successfully';
	}else{
		echo 'Can not be updated';
	}
}else{
	echo 'Records not updated error '.mysqli_error($conn);
}