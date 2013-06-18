<?php

// ** Get username and password from AppFog instance 
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

$username = 
$password = 
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];

// ** MySQL settings ** //
$dbname = $mysql_config["name"];    		// AppFog DB Name
$dbuser = $mysql_config["username"];   	// AppFog Username
$dbpass = $mysql_config["password"];; 	// AppFog Password
$dbhost = 'localhost';    							// 99% chance you won't need to change this value
$mchost = 'localhost';  								//this is the memcache server host, if you don't know what this is, don't touch it.