<?php

define('HOST', 'localhost:3308');
define('USER', 'root');
define('PASSWORD','');
define('DBNAME','app2021');
try{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if($conn = mysqli_connect(HOST,USER,PASSWORD,DBNAME)){
       // print_r($conn);
       echo "Connection stablished...!";
    }else{
       throw new Exception();
    }
}
catch (Exception $e){
    echo $e->getMessage();
    exit('DB Connection Error '.mysqli_connect_error());
}
?>