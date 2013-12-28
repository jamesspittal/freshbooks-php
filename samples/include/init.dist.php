<?php
/**
 * Copy this file as init.php and update url and token
 */

define("LIB_PATH", realpath(dirname(__FILE__) . '/../../library'));
include_once LIB_PATH . '/FreshBooks/HttpClient.php';
//you API url and token obtained from freshbooks.com
$url = "";
$token = "";

//init singleton FreshBooks_HttpClient
FreshBooks_HttpClient::init($url,$token);
