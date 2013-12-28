<?php
include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Client.php";

$clientId = 3;

//new Client object
$client = new FreshBooks_Client();

//try to get client with client_id $clientId
if(!$client->get($clientId)){
//no data - read error
	echo $client->lastError;
}
else{
//investigate populated data
	print_r($client);
}