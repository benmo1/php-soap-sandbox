<?php

ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

try {
    $c = new SoapClient(__DIR__ . '/wsdl.xml', ['trace' => true]);
    $a = $c->GetThings(2);

    var_dump($c->__getLastResponseHeaders());
    var_export($a);
} catch (\Exception $ex) {
    echo '<pre>' . PHP_EOL;
    var_export($ex->getCode());
    var_export($ex->getMessage());
    echo '<pre>' . PHP_EOL;
    echo 'Request:' . PHP_EOL;
    var_dump($c->__getLastRequest());
    echo 'Headers:' . PHP_EOL;
    var_dump($c->__getLastRequestHeaders());
    echo 'Response:' . PHP_EOL;
    var_dump($c->__getLastResponse());
    echo 'Headers:' . PHP_EOL;
}
