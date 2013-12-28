<?php

include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Recurring.php";

$clientId = 4;

//new Recurring object
$recurring= new FreshBooks_Recurring();
//populate data
$recurring->clientId = $clientId;
$recurring->date = '2011-05-08'; //mysql format
$recurring->frequency = 'monthly';
$recurring->occurrences = 1;
$recurring->autobillGatewayName = 'Authorize.net';
$recurring->autobillCardName = 'John Smith';
$recurring->autobillCardNumber = '4111 1111 1111 1111';
$recurring->autobillCardExpirationYear = 2012;
$recurring->autobillCardExpirationMonth = 3;

//all other required properties should be populated

//lines (items) is array of asoc. arrays
$recurring->lines = array(
    //1st item
    array(
        'name'=>'xyz',
        'unitCost'=>99.99,
        //all other required properties should be populated
    ),
    //2nd item
    array(
        'name'=>'yyy',
        'unitCost'=>199.99,
    )
);

//try to create new invoice with provided data on FB server
if(!$recurring->create()){
    //read error
    echo $recurring->lastError;
}
else{
    //investigate populated data
    print_r($recurring);
}