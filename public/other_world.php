<?php

$s = new SoapServer(null, [
    'uri' => "http://test-uri/",
]);

function DoStuff() {
    return 'hello';
}

$s->addFunction('DoStuff');

$s->handle();
