<?php

include('../init.php');

$Function = "AddContactToGroup";

$Parameters = array(
	'ContactId'=>"1111", //paste the ContactId you got from create_contact.php
	'GroupName'=>"Vendors",
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 
?>
