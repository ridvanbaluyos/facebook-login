<?php
if(!session_id()) {
    session_start();
}
date_default_timezone_set('Asia/Manila');

$fb = new Facebook\Facebook([
  'app_id' => '',
  'app_secret' => '',
  'default_graph_version' => 'v2.2',
]);
