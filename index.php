<?php
session_start();

// Access to the controller:
//require 'src/Engine/Rooter.php';
require './vendor/autoload.php';

use MathieuMT\myPortfolio\Engine\Rooter; 


$rooter = new Rooter();
$rooter->rooterRequest();