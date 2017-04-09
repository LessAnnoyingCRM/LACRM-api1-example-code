<?php

include('../init.php');

$Function = "SearchContacts";

$Parameters = array(
	'SearchTerms'=>"Jack Box", //paste the ContactId you got from create_contact.php
);

$Result = CallAPI($Function, $Parameters);
 
DebugOutput($Result);
 