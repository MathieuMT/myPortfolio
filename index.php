<?php
session_start();

// Access to the controller:
require 'Controllers/Rooter.php';


$rooter = new Rooter();
$rooter->rooterRequest();