<?php

//Get your user UserCode and API token from https://www.lessannoyingcrm.com/app/Settings/Api
$UserCode = "39C5A";
$APIToken = "NC81D5RMDQM501GMB6829G90SY1FGS060K88GJ9BS82J57YF46";

function CallAPI($Function, $Parameters){
  global $UserCode, $APIToken;

  $EndpointURL = "https://api.lessannoyingcrm.com";
  
  $APIResult = file_get_contents("$EndpointURL?UserCode=$UserCode&APIToken=$APIToken&".
              "Function=$Function&Parameters=".urlencode(json_encode($Parameters)));
  $APIResult = json_decode($APIResult, true);

  if(@$APIResult['Success'] === true){
      return $APIResult;
  }
  else{
      echo "API call failed.<br/>Function: $Function<br/>Error: ".@$APIResult['Error']."<br/>Paramters you passed to the function:";
      DebugOutput($Parameters);
      exit;
  }
}

function DebugOutput($Text, $Echo=true, $IncludeHR=true){
	if(!$Echo)
		ob_start();
	echo "<pre>";
	print_r($Text);
	echo "</pre>".($IncludeHR ? "<hr />":"");
	if(!$Echo)
		return ob_get_clean();
}