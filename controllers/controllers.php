<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router->addRoute('GET', '/', function(Request $request, Response $response) {
  $response->setContent(view('index', [
    'title' => 'jf2 validator',
    'url' => $request->get('url')
  ]));
  return $response;
});

$router->addRoute('POST', '/validate', function(Request $request, Response $response) {

  $html = '<p>an unknown error occurred</p>';

  if($request->get('url')) {

    $referralURL = Config::$base.$_SERVER['REQUEST_URI'];

    $ch = curl_init($request->get('url'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_REFERER, $referralURL);
    $json = curl_exec($ch);
  } else {
    $json = $request->get('json');
  }

  try {
    $input = json_decode($json);

    if($input !== null) {

      $html = '<pre>'.htmlspecialchars(json_encode($input,JSON_PRETTY_PRINT)).'</pre>';

    } else {
      $html = '<b>invalid json</b>';
    }
  } catch(Exception $e) {
    $html = '<p>an unknown error occurred</p>';
  }

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
