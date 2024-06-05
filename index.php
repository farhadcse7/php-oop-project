<?php

require_once "vendor/autoload.php";

use App\classes\Home;

//calling home class
$home = new Home();
$home->index();




//Notes:
//For vendor file creation comment= composer dump-autoload
//gettype ()= method for php data type check