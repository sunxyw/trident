<?php

use App\Controllers\PageController;

$router->get('/', function () {
    return response('Hello world');
});

$router->get('/ww', PageController::class . '@index');
