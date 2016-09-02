<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/facebook.config.php';

$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo "<pre>";
//var_dump($userNode);
echo 'Logged in as ' . $userNode->getName() . '<br/>';
echo $_SESSION['facebook_access_token'];