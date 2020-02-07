<?php

$sql = "pgsql";
$host = "host=webmapping.cqmo9jbfxaez.eu-west-2.rds.amazonaws.com";
$db_name = "dbname=web_mapping";
$port = "port=5432";
$user = "postgres";
$password = "00000000";

$opt = [
	PDO::ATTR_ERRMODE				=>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE	=>PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES		=>false
];


$conn = new PDO($sql.':'.$host.';'.$db_name,$user, $password, $opt);

