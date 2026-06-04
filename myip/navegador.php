<?php
Header("content-type: application/x-javascript");
   $useragent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($useragent, 'Edge') !== false) {
$re = '/Edge.*/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
}

elseif (strpos($useragent, 'Trident') !== false) {
$re = '/(?<=rv:).*(?=\))/m';
preg_match($re, $useragent, $matches);
$navegador = "Internet Explorer: " . $matches[0];
} 

elseif (strpos($useragent, 'Chrome') !== false) {
$re = '/\Chrome.*(?=\ )/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
} 

elseif (strpos($useragent, 'Safari') !== false) {
$re = '/\Safari.*/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
}
 
elseif (strpos($useragent, 'SeaMonkey') !== false) {
$re = '/\SeaMonkey.*/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
}

elseif (strpos($useragent, 'Firefox') !== false) {
$re = '/\Firefox.*/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
}

else {
$re = '/(?<=\) ).*/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[0];
}

echo "document.write(\"$navegador\")";
?>
