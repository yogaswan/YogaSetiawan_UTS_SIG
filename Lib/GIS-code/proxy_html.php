<?php 
error_reporting(0);
$u=$_GET['url'];
//$u=str_replace("geoservice.kalselprov.go.id","172.17.10.48",$_GET['url']);
$uleoke = $u."&VERSION=1.1.1&REQUEST=GetFeatureInfo&FORMAT=image%2Fpng&TRANSPARENT=true&QUERY_LAYERS=".$_GET['QUERY_LAYERS']."&LAYERS=".$_GET['LAYERS']."&INFO_FORMAT=".$_GET['INFO_FORMAT']."&FEATURE_COUNT=1&X=".$_GET['X']."&Y=".$_GET['Y']."&WIDTH=".$_GET['WIDTH']."&HEIGHT=".$_GET['HEIGHT']."&SRS=".$_GET['SRS']."&STYLES=".$_GET['STYLES']."&BBOX=".$_GET['BBOX']; 
$json = file_get_contents($uleoke);
$obj1 = json_decode($json, true);
echo "<table class='table table-ligh table-sm'><tbody>";
foreach($obj1['features'][0]['properties'] as $name => $value){
	echo "<tr><td>".$name."</td><td>: ".$obj1['features'][0]['properties'][$name]."</td></tr>";
}
?></tbody></table>