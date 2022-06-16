<?php
Header("content-type: application/x-javascript");
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//echo $hostname;
echo "document.write(\"$hostname\")";
?>
