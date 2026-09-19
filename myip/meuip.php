<?php
Header("content-type: application/x-javascript");
   $ip = $_SERVER['REMOTE_ADDR'];
echo "document.write(\"$ip\")";
?>
