<?php
include __DIR__ .'/dbconnect.php';
$sql="UPDATE DeeproshanKumar SET age=22 WHERE id=1;";
if(mysqli_query($conn,$sql)){
	echo "Record has been update with pk ".mysqli_affected_rows($conn);
}else{
	echo "Cannot be updated..!".mysqli_error($conn);
}
?>

