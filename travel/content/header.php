<?php


function footer ($headerText) {
	$headContent = <<<HEAD
		<head>
		<title>$headerText</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/stylesheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Keywords" content="travel, fun, hotels, flights, trip, travelling, photographer, beach, style, sunset, holiday, lifestyle, life, traveltheworld, beauty, mountains, sea, tourism, traveler, traveller, architecture">
		</head>
	HEAD;
	return $headContent;
}

?>