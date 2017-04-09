<?php

include('../init.php');

$Function = "CreatePipeline";

$Parameters = array(
	'ContactId'=>"1111", //paste the ContactId you got from create_contact.php
	'PipelineId'=>"2222", //get this from the api settings page
	'StatusId'=>"3333", //get this from the api settings page
);

//The CallAPI function is at the bottom of this file
$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 