freshbooks-php
==============

Freshbooks PHP Library (forked from: https://code.google.com/p/freshbooks-php-library/)

Warning
-------

Please note that the library from which this is forked has not been updated or maintained since May 2011. It has A LOT of bugs. It works for some basic tasks well (sending invoices, triggering payments via a payment gateway) but there are lot of "basic" functions that are broken (grabbing invoice details by invoice #, updating invoices as sent, etc.)

This library is only for the brave of heart and for those interested in helping fix up an outdated Freshbooks PHP library.

Initiation
----------

To initialize the library, include an initiation block like below.

    // Include particular file(s) for entity you need (Client, Invoice, Category…)
    include_once "library/FreshBooks/Client.php";

    // Your API url and token obtained from Freshbooks.com
    $url = "your-url-please-replace";
    $token = "your-token-please-replace";

    // Cnit singleton FreshBooks_HttpClient
    FreshBooks_HttpClient::init($url,$token);

Get Client Data
---------------

    // New Client object
    $client = new FreshBooks_Client();

    // Try to get client with client_id 3
    if (!$client->get(3)){
        // No data – read error
        echo $client->lastError;
    }
    else {
        // Investigate populated data
        print_r($client);
    }
    
New Client
----------

    // new Client object
    $client = new FreshBooks_Client();

    //populate client’s properties
    $client->email = ‘test@test.com’;
    $client->firstName = ‘Chad’;
    $client->lastName = ‘Smith’;
      
    //all other required properties should be populated

    //try to create new client with provided data on FB server
    if(!$client->create()){
        //read error
        echo $client->lastError;
    }
    else {
        //investigate populated data
        print_r($client);
    }
