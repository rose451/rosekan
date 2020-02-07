<?php
include("pdo_db_connect.php");


function databaseresult($hotels, $conn) {

	$result = $conn->query("SELECT *, ST_AsGeoJSON(geom, 5) as geojson FROM ". $hotels.";"); 
	$features = [];
	foreach ($result as $row) {
		unset($row["geom"]);
		$geometry = $row["geojson"]= json_decode($row["geojson"]);
		unset($row["geojson"]);
		$feature = ["type"=>"Feature", "geometry"=>$geometry, "properties"=>$row];
		array_push($features, $feature);
		
	}
	$featureCollection = ["type"=>"FeatureCollection", "features"=>$features];

	echo "[".json_encode($featureCollection)."]";
}