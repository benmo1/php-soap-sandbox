<?php

$s = new SoapServer(__DIR__ . '/wsdl.xml');

function GetThings() {
    return 'hello';
}

$s->addFunction('GetThings');

$s->handle();
