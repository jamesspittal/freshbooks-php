<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Recurring.php";

//recurring
$recurring = new FreshBooks_Recurring();

$recurringId = 2;

//try to get recurring id
if(!$recurring->get($recurringId)){
    //no data - read error
	echo $recurring->lastError;
}
else{
//investigate populated data
	print_r($recurring);
}