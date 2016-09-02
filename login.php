<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/facebook.config.php';

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
echo 'in!';
	// Sets the default fallback access token so we don't have to pass it to each request
	$_SESSION['facebook_access_token'] = (string) $accessToken;
	header( "Location: http://localhost:8081/home.php" );
	// Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}
