<?php

ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

try {
    $c = new SoapClient(__DIR__ . '/wsdl.xml', ['trace' => true]);

    $req = new stdClass();
    $req->TestAgain = 2;
    $req->TestAAA = 3;

    $a = $c->GetThings($req);
    echo '<pre>' . PHP_EOL;
    var_export($a);
    echo PHP_EOL;
} catch (\Exception $ex) {
    echo '<pre>' . PHP_EOL;
    var_export($ex->getCode());
    var_export($ex->getMessage());
} finally {
    echo 'Headers:' . PHP_EOL;
    var_dump($c->__getLastRequestHeaders());
    echo 'Request:' . PHP_EOL;
    var_dump($c->__getLastRequest());
    echo 'Headers:' . PHP_EOL;
    var_dump($c->__getLastResponseHeaders());
    echo 'Response:' . PHP_EOL;
    var_dump($c->__getLastResponse());
}
