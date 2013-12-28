<?php

include_once 'include/init.php';

//include particular file for entity you need (Client, Invoice, Category...)
include_once LIB_PATH . "/FreshBooks/Client.php";

//new Client object
$client = new FreshBooks_Client();

//populate client’s properties
$client->email = 'test@test.com';
$client->firstName = 'Chad';
$client->lastName = 'Smith';
$client->organization = 'RHCP';

//all other required properties should be populated

//try to create new client with provided data on FB server
if(!$client->create()){
    //read error
    echo $client->lastError;
}
else{
    //investigate populated data
    print_r($client);
}