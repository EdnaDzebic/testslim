<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello World!";

    return json_encode($data);
};

function NewHandler() {
    $data = new stdClass();
    $data->Output = "Hello World!";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/servicehandler', 'ServiceHandler');
$app->get('/newhandler', 'NewHandler');

$app->run();
