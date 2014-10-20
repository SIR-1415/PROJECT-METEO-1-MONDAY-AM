<html>
	<head>
		
	</head>
	<body>
		<h1>dumping form variables</h1>
		<?php
		
		//api.worldweatheronline.com/free/v1/weather.ashx?&format=json&num_of_days=5&key=jx6a4hxmgej238dw8x4p8vvc
		$mainURL = "http://api.worldweatheronline.com/free/v1/weather.ashx?";
		$q = "q=".$_GET["location"];
		$sep ="&";
		$nd = "num_of_days=".$_GET["days"];
		$format ="format=json";
		$key = "key=jx6a4hxmgej238dw8x4p8vvc";
		
		$newq = "q=".urlencode($_GET["location"]);
		
		echo $q;
		echo ("<br/>");
		
		echo $newq;
		echo ("<br/>");
		
		$finalURL =  $mainURL.$q.$sep.$nd.$sep.$key.$sep.$format;
		$finalURL2 =  $mainURL.$newq.$sep.$nd.$sep.$key.$sep.$format;
		echo $finalURL2;
		echo ("<br/>");

		
		$JSONforecast = file_get_contents($finalURL2);
		
		//echo "<hr>";
		//var_dump($JSONforecast);
		
		$PHPforecast = json_decode($JSONforecast);
		
		echo "<hr>";
		//var_dump($PHPforecast);
		
		echo "current temperature is:" . $PHPforecast->data->current_condition[0]->temp_C ." C";
		?>
		
	</body>
</html>