<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router->addRoute('GET', '/', function (Request $request, Response $response) {
  $response->setContent(view('index', [
    'title' => 'jf2 validator'
  ]));
  return $response;
});
