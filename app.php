<?php
$banner['enabled'] = false;
$banner['image'] = false;
$banner['link'] = false;
$ads['banner'] = $banner;
$ads['start'] = getAds(1);
$ads['unity'] = getAds(2);
$app['ads'] = $ads;

$app['version'] = getVersion();
$app['signature'] = "1w3yC47AQEgr2jcXxqiJIB1AnBc=";
$app['link'] = "https://dl.apkmart.net/file/apkmartdl/Abbasi_TV_v12.7.apk";
$app['webLink'] = "https://abbasitv.net";
$app['website'] = "https://abbasitv.net";
$app['message'] = "Download Abbasi TV from: https://abbasitv.net";
$app['size'] = "Dwonload Size: 6.82MB";

echo base64_encode(json_encode($app));

function getAds($id){
$ads = DB::queryFirstRow("SELECT * FROM ads WHERE id = %i LIMIT 1",$id);
//$ads['startId'] = $ads['unit'];
$ads['enabled'] = ($ads['enabled'] == 0) ? false : true;
$ads['ad1'] = ($ads['ad1'] == 0) ? false : true;
$ads['ad2'] = ($ads['ad2'] == 0) ? false : true;
unset($ads['id']);
return $ads;
}

function getVersion() {
return (int) DB::queryFirstField("SELECT value FROM data WHERE id = %i",1);
} 
?>