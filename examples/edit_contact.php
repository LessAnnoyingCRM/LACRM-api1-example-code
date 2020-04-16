<?php

include('init.php');

$Function = "EditContact";

$Parameters = array(
	'ContactId'=>"1234", //paste the ContactId you got from create_contact.php
	'Email'=>array(
		array(
			"Text"=>"jack.box@jackinthebox.com",
			"Type"=>"Work"
		),
		array(
			"Text"=>"jbox72@gmail.com",
			"Type"=>"Personal"
		)
	)
);

//The CallAPI function is at the bottom of this file
$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 
?>
