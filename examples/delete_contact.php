<?php

include('../init.php');

$Function = "DeleteContact";

$Parameters = array(
	'ContactId'=>"1111", //paste the ContactId you got from create_contact.php
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 