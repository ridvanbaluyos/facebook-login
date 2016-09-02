<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/facebook.config.php';

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost:8081/login.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';