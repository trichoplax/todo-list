<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/todo', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/todo/done/{i}', function (Request $request, Response $response, array $args) {
    $index = $request->getAttribute('index');
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/todo/add/{text}', function (Request $request, Response $response, array $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
