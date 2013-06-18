<?php
function geo202()
{
	include_once("geoip.inc");

	if ($_SERVER["HTTP_X_FORWARDED_FOR"]) {
		$realclientip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		$realclientip = explode( ',', $realclientip );
		$realclientip = $realclientip[0];
	} else {
		$realclientip = $_SERVER["REMOTE_ADDR"];
	}
		
	$gi = geoip_open($_SERVER['DOCUMENT_ROOT'] . "/geoip/GeoIP.dat",GEOIP_STANDARD);
	
	$country = geoip_country_code_by_addr($gi, $realclientip);	
	geoip_close($gi);	
	
	return $country;
}
