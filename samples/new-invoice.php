<?php

include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Invoice.php";

$clientId = 4;

//new Invoice object
$invoice= new FreshBooks_Invoice();
//populate data
$invoice->clientId = $clientId;
$invoice->date = '2011-05-06'; //mysql format

//all other required properties should be populated

//lines (items) is array of asoc. arrays
$invoice->lines = array(
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
if(!$invoice->create()){
    //read error
    echo $invoice->lastError;
}
else{
    //investigate populated data
    print_r($invoice);
}