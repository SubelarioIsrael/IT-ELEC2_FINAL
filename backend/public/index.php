<?php

require '../vendor/autoload.php';
require '../app/bootstrap.php';

Flight::route('GET /', function () {
  echo 'Hello World';
});

Flight::start();
