<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router->addRoute('GET', '/', function(Request $request, Response $response) {
  $response->setContent(view('index', [
    'title' => 'jf2 validator'
  ]));
  return $response;
});

$router->addRoute('POST', '/validate', function(Request $request, Response $response) {

  $html = '<b>success</b>';

  $response->setContent(json_encode([
    'html' => $html
  ]));
  $response->headers->set('Content-Type', 'application/json');
  return $response;
});

$router->addRoute('GET', '/context.jsonld', function(Request $request, Response $response) {
  $response->setContent(view('context'));
  $response->headers->set('Content-Type', 'application/json+ld');
  return $response;
});
