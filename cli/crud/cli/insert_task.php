<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query

$name = readline("Enter your name:");
$fname = readline("Enter your father's name :");
$age = readline("Enter your age : ");
$dob = readline("Enter your date of birth : ");
$cName = readline("Enter your college's name : ");
$branch = readline("Enter your branch : ");
$session = readline("Enter the session : ");
$email = readline("Enter your email address : ");
$phone = readline("Enter your phone number : ");
$address = readline("Enter your address : ");

$sql = "INSERT INTO comprehension(name,fathersname,age,dob,college_name,branch,session,email,phone,address) values('{$name}','{$fname}','{$age}','{$dob}','{$cName}','{$branch}','{$session}','{$email}','{$phone}','{$address}');";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Record Inserted with pk = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}