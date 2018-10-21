<?php

require 'vendor/autoload.php';

$app->get('/tickets', function (Request $request, Response $response) {
    $data = new stdClass();
    $data->Output = "Hello World!";

    return json_encode($data);
});

$app->run();
