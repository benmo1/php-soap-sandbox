<?php

ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

try {
    $c = new SoapClient(__DIR__ . '/wsdl.xml', ['trace' => true]);
    $a = $c->GetThings(2);
    var_export($a);
} catch (\Exception $ex) {
    echo '<pre>' . PHP_EOL;
    var_export($ex->getCode());
    var_export($ex->getMessage());
}
