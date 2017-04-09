<?php

include('../init.php');

$Function = "UpdatePipelineItem";

$Parameters = array(
	'PipelineItemId'=>"1111", //get this from the results of create_pipeline.php
	'StatusId'=>"2222", //get this from the api settings page
	'Note'=>"This is an automated update from the API"
);

//The CallAPI function is at the bottom of this file
$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 