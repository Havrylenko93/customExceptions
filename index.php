<?php

namespace {
    require_once 'vendor/autoload.php';

    function logToFile(string $message)
    {
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . 'logs.txt', $message, FILE_APPEND);
    }
}

namespace index {
    use \CustomExceptions\Exceptions\OverPricedException,
        \CustomExceptions\Exceptions\IncorrectTitleException,
        Throwable;

    try {
        $product = new \CustomExceptions\Product(1, 'tt', 300, true);
    } catch (OverPricedException | IncorrectTitleException $exception) {
        unset($product);
        logToFile($exception->getMessage());
    } catch (Throwable $exception) {
        logToFile($exception->getMessage());
        die('something went wrong (in your life)');
    }

    var_dump('product : ', $product);
}



