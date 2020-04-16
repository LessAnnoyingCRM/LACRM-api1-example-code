<?php

include('init.php');

$Function = "CreateEvent";

$Parameters = array(
	'Date'=>date('Y-m-d'),
	'StartTime'=>'14:00',
	'EndTime'=>'15:30',
	'Name'=>'Example event from the API',
	'Contacts'=>array("1111"), //paste the ContactId you got from create_contact.php
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 
?>
