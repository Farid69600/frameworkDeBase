<?php

// démarrer la session
session_start();

require_once "core/App/autoloading.php";


\App\Kernel::run();


?>
