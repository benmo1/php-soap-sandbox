<?php

try {
    $c = new SoapClient(__DIR__ . '/wsdl.xml', ['trace' => true]);
    $a = $c->GetThings();
    var_export($a);
} catch (\Exception $ex) {
    echo '<pre>' . PHP_EOL;
    var_export($ex->getCode());
    var_export($ex->getMessage());
}
