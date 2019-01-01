<?php
function clientLog($visitedUrl)
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

$api_url = 'https://stat.ripe.net/data/maxmind-geo-lite/data.json?resource='.$ip_address;
$api_content = file_get_contents($api_url);
$api_data = json_decode($api_content,true);

$ip_ip = $api_data['data']['located_resources']['0']['resource'];
$ip_city = $api_data['data']['located_resources']['0']['locations']['0']['city'];
$ip_country = $api_data['data']['located_resources']['0']['locations']['0']['country'];
$ip_longitude = $api_data['data']['located_resources']['0']['locations']['0']['longitude'];
$ip_latitude = $api_data['data']['located_resources']['0']['locations']['0']['latitude'];
$ip_timestamp = time();
$ip_timehuman = date("d-m-Y-H:m:s",$ip_timestamp);
$ip_useragent = $_SERVER['HTTP_USER_AGENT'];
$ip_remoteport = $_SERVER['REMOTE_PORT'];
$ip_serverport = $_SERVER['SERVER_PORT'];

$ip_http = $_SERVER['HTTP_CLIENT_IP'];
$ip_httpx = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip_remoteaddress = $_SERVER['REMOTE_ADDR'];

$file = fopen("/volume1/LOG/connexion.log","a");
// Do not forget to allocate write and read access to this file/directory
// fwrite($file, "$visitedUrl ");

fwrite($file, str_pad($visitedUrl,9," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_serverport,6," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_country,4," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_city,25," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_ip,20," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_http,20," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_httpx,20," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_remoteaddress,20," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_remoteport,8," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_longitude,10," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_latitude,10," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_timestamp,12," ",STR_PAD_RIGHT));
fwrite($file, str_pad($ip_timehuman,25," ",STR_PAD_RIGHT));
fwrite($file, "$ip_useragent\n");
fclose($file);
}
?>
