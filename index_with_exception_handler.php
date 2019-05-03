<?php

require_once 'vendor/autoload.php';

$exceptionHandler = new \CustomExceptions\ExceptionHandler();
set_exception_handler([$exceptionHandler, 'handle']);

throw new Exception('asdasd');