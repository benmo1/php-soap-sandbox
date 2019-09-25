<?php

$s = new SoapServer(__DIR__ . '/wsdl.xml');

function GetThings($arg) {
    return 'hello' . $arg;
}

$s->addFunction('GetThings');

$s->handle();
