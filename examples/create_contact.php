<?php

include('../init.php');

$Function = "CreateContact";

$Parameters = array(
	'FullName'=>"Jack Box",
	'Title'=>'Mascot',
	'CompanyName'=>'Jack-in-the-box'
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 