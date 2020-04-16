<?php

include('init.php');

$Function = "GetPipelineReport";

$Parameters = array(
	'PipelineId'=>"1111", //get this from the api settings page
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 
?>
