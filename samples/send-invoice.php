<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Invoice.php";

$invoiceId = 4;

//new Invoice
$invoice = new FreshBooks_Invoice();

//try to get invoice id: $invoiceId
if(!$invoice->get($invoiceId)){
    //no data - read error
	echo $invoice->lastError;
}
else{
//investigate populated data
	print_r($invoice);
    print_r($invoice->sendByEmail('Test invoice', "Hello"));
}