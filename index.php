<?php
session_start();
include 'clientLog.php';
clientLog("index");
include 'html.php';

//clean flush operation for debug and test
//include 'destroy.php';

?>
