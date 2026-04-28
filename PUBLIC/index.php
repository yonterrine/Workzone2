include

inquire
 inquire_once
require
 require_once


 <?php
 require '../VIEWERS/functions.php';
define('BASE_PATH', dirname(__DIR__));


require basePath('helpers.php')
LoadView('home');

require basePath('views/home.view.php');
