<?php


$s = new SoapServer(__DIR__ . '/wsdl.xml');

function GetThings($arg) {
    return 'hello' . $arg;
}

$s->addFunction('GetThings');

$stream = fopen('php://input', 'r');
$input = '';
while ($chunk = fread($stream, 100)) {
    $input .= $chunk;
}

error_log($input, 3, __DIR__ . '/test.log');
error_log(json_encode($GLOBALS) . PHP_EOL, 3, __DIR__ . '/test.log');
error_log(json_encode($_SERVER) . PHP_EOL, 3, __DIR__ . '/test.log');
error_log(json_encode($_POST) . PHP_EOL, 3, __DIR__ . '/test.log');
error_log(json_encode($_GET) . PHP_EOL, 3, __DIR__ . '/test.log');
error_log(json_encode($_COOKIE) . PHP_EOL, 3, __DIR__ . '/test.log');

ob_start();

$s->handle();

$out = ob_get_contents();
error_log($out . PHP_EOL, 3, __DIR__ . '/test.log');

ob_flush();
