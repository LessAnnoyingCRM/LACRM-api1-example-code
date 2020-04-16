<?php

include('init.php');

$Function = "GetContact";

$Parameters = array(
	'ContactId'=>"1234", //paste the ContactId you got from create_contact.php
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 
?>
