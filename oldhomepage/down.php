<?php
require_once("qiniu-sdk/rs.php");

if(!isset($_GET['date']))
	die("invaild date input");

if(!isset($_GET['verify']) || !$_GET['verify'] == "anthonbackupdown")
	die("invaild verify");


$key = $_GET['date'] . ".tar.xz";
$domain = 'anthonbackup.qiniudn.com';
$accessKey = 'NMNQ8leEW50v6neywK79RAFATdtHLFcHq43pa0Yu';
$secretKey = '8IaM2kO69pzWeIOqUR71CXDoRpIUQzjU4qoCIMRo';

Qiniu_SetKeys($accessKey, $secretKey);  
$baseUrl = Qiniu_RS_MakeBaseUrl($domain, $key);
$getPolicy = new Qiniu_RS_GetPolicy();
$privateUrl = $getPolicy->MakeRequest($baseUrl, null);
echo "====> the backup of workspace at ($key) : <br>";
echo '<a href=($privateUrl)>Click here to DOWNLOAD</a><br>Note: the download link will be expired in 3600 seconds.<br>Never lack it to others.;
?>