<html>
	<head>
		
	</head>
	<body>
		<h1>Weather Forecast</h1>
		<?php
		
		//api.worldweatheronline.com/free/v1/weather.ashx?&format=json&num_of_days=5&key=jx6a4hxmgej238dw8x4p8vvc
		$mainURL = "http://api.worldweatheronline.com/free/v1/weather.ashx?";
		$q = "q=".$_GET["location"];
		$sep ="&";
		$nd = "num_of_days=".$_GET["days"];
		$format ="format=xml";
		$key = "key=jx6a4hxmgej238dw8x4p8vvc";
		
		// to escape not allowed characters in order to form a valid URL.
		$newq = "q=".urlencode($_GET["location"]);
		
		echo $q;
		echo ("<br/>");
		
		echo $newq;
		echo ("<br/>");
		
		
		// well formed URL
		$finalURL2 =  $mainURL.$newq.$sep.$nd.$sep.$key.$sep.$format;
		
		echo $finalURL2;
		echo ("<br/>");

		// uncomment for online version
		//$XMLForecast = file_get_contents($finalURL2);
		//$PHPXMLForecast = simplexml_load_string($XMLForecast,NULL,LIBXML_NOCDATA);
		
		// uncomment for local "trick" version
		
				
		// fix in order to be able to read CDATA
		
		$PHPXMLForecast = simplexml_load_file("sample_forecast.xml",NULL,LIBXML_NOCDATA);
		
		echo "<hr>";
		//var_dump($PHPXMLForecast);
		
		echo "current temperature is:" . $PHPXMLForecast->current_condition->temp_C ." C";
		
		$actualLocation = $PHPXMLForecast->request->query;
		$iconImage = $PHPXMLForecast->current_condition->weatherIconUrl[0];
		$curTemp = $PHPXMLForecast->current_condition->temp_C ." C"
		?>
		
		<h2>forecast for: <?php echo $actualLocation;?> </h2>
		<h3>current condition</h3>
		<br/>
		<img src="<?php echo $iconImage?>"/>
		<h4> </h4>
		<p>current temperature <?php echo $curTemp?></p>
		<h3>forecast</h3>
		<?php
		
			/* 
			$forecastArray = $PHPforecast->data->weather;
			for($day = 0 ; $day < count($forecastArray); $day++) {
				echo "<h4> date". $forecastArray[$day]->date . "</h4>";
				echo "<h5> ". $forecastArray[$day]->weatherDesc[0]->value. "</h5>";
				echo "<img src=\"".$forecastArray[$day]->weatherIconUrl[0]->value."\" />";
				echo "<p> min : ".$forecastArray[$day]->tempMinC . "</p>";
				echo "<p> max : ".$forecastArray[$day]->tempMaxC . "</p>";
			}
			*/
			$forecastCollection = $PHPXMLForecast->weather;
			foreach($forecastCollection as $dayforecast) {
				echo "<h4> date". $dayforecast->date . "</h4>";
				echo "<h5> ". $dayforecast->weatherDesc[0] ."</h5>";
				echo "<img src=\"".$dayforecast->weatherIconUrl."\" />";
				echo "<p> min : ".$dayforecast->tempMinC . "</p>";
				echo "<p> max : ".$dayforecast->tempMaxC . "</p>";
			}
			
			
		?>
		
		
		
	</body>
</html>