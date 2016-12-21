<h1>Json Output</h1><br>
<?php

$jsonPath = "http://localhost/uniadmission/public/json/institutedata.json";

 

$jsonStr =  file_get_contents($jsonPath);
$user =  json_decode($jsonStr, true);

//print_r($jsonRtr);



// decode JSON
//$json = json_decode($str, true);

// get the data
//$city = $json['Institute']['country'][0];
//$temperatureMax = $json['daily']['data'][0]['icon'];
//$summary = $json['daily']['icon'];

//$summary = $user['Institute'][0]['country'];

// echo it
//echo $temperatureMin . PHP_EOL;
//echo $temperatureMax;
//echo "<br>";
//echo $summary;
//var_dump(json_decode($json));
for($i = 0; $i < 18; $i++){
	echo "***********". $i . "******************";
	$name = $user['Institute'][$i]['inst_name'];
	$country = $user['Institute'][$i]['country'];
	$deadline = $user['Institute'][$i]['deadline'];
	$address = $user['Institute'][$i]['Address'];
	echo "<br>" . $name . "<br>" . $country . "<br>" . $deadline . "<br>" . $address . "<br>";
}

   




?>