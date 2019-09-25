<?php

$c = new SoapClient(
    null, [
    'location' => "http://localhost:8889/other_world.php",
    'uri'      => "http://test-uri/",
]);

$a = $c->DoStuff();

var_dump($a);

