<?php
Header("content-type: application/x-javascript");
   $useragent = $_SERVER['HTTP_USER_AGENT'];
echo "document.write(\"$useragent\")";
?>
