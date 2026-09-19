<?php
header('Content-Type: application/javascript; charset=UTF-8');

$useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$navegador = 'Desconhecido';

if (preg_match('/Edg(?:e|A|iOS)?\/[^\s]+/i', $useragent, $matches)) {
    $navegador = $matches[0];
} elseif (preg_match('/(?:MSIE\s|rv:)[^\s;)]+/i', $useragent, $matches) && strpos($useragent, 'Trident') !== false) {
    $navegador = 'Internet Explorer ' . $matches[0];
} elseif (preg_match('/Firefox\/[^\s]+/i', $useragent, $matches)) {
    $navegador = $matches[0];
} elseif (preg_match('/(?:Chrome|CriOS)\/[^\s]+/i', $useragent, $matches)) {
    $navegador = $matches[0];
} elseif (strpos($useragent, 'Safari') !== false && preg_match('/Version\/([^\s]+)/i', $useragent, $matches)) {
    $navegador = 'Safari/' . $matches[1];
} elseif (preg_match('/SeaMonkey\/[^\s]+/i', $useragent, $matches)) {
    $navegador = $matches[0];
}

echo 'document.write(' . json_encode($navegador, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . ');';
?>
