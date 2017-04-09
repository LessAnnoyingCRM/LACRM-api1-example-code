<?php

include('../init.php');

$Function = "CreateNote";

$Parameters = array(
	'ContactId'=>"1111", //paste the ContactId you got from create_contact.php
	'Note'=>"This came from the CreateNote API function",
);

//The CallAPI function is at the bottom of this file
$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 