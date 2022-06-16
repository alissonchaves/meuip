<?php
Header("content-type: application/x-javascript");
   $useragent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($useragent, 'Android') !== false) {
$re = '/\((.*((Android \S+\w).*))\)/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[3];
}

elseif (strpos($useragent, 'iPhone') !== false) {
$re = '/\((.*((iPhone OS \S+\w).*))\)/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[3];
}

elseif (strpos($useragent, 'Macintosh') !== false) {
$re = '/\((.*((Mac OS X \S+\w).*))\)/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[3];
}

elseif (strpos($useragent, 'Linux') !== false) {
$re = '/\((.*((Linux \S+\w).*))\)/m';
preg_match($re, $useragent, $matches);
$navegador = $matches[3];
}

else {
$re = '/\((.*?\w)\)/';
preg_match($re, $useragent, $matches);
$navegador = $matches[1];
}
echo "document.write(\"$navegador\")";
?>
