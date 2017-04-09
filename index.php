<?php

include('init.php');

$Function = "SearchContacts";

$Parameters = array();
 
$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 