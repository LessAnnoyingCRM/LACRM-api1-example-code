<?php

include('../init.php');

$Function = "CreateTask";

$Parameters = array(
	'DueDate'=>date('Y-m-d'),
	'Description'=>'Example task from the API',
	'ContactId'=>"1111", //paste the ContactId you got from create_contact.php
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 