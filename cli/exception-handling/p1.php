<?php

// WAP in PHP to show exception handling.

$no = readline('Enter the number : ');
$no2 = readline('Enter the second number : ');
$res = 0;
try{
    echo "Try block has started...\n";
    if($y==0){
       throw new Exception;
    }else{
       $res = $no/$no2;
    }
    echo "Try block has ended...\n";
}
catch(Exception $e){
    echo "Some exception raised". $e->getMessage();
    echo "\n";
}finally{
    echo "This block will be, executed...\n";
    echo "The result = $res \n";
}
?>