<?php

require 'config.php';

// Use an autoloader!
require LIBS .'Bootstrap.php';
require LIBS .'Controller.php';
require LIBS .'Model.php';
require LIBS .'View.php';

$app = new Bootstrap();

$app->init();