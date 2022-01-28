<?php
include __DIR__ .'/dbconnect.php';
$sql = "DROP TABLE DeeproshanKumar;";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'Table has been deleted';

}else{
echo 'Table can not be deleted '.mysqli_error($conn);
}