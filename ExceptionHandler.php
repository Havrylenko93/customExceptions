<?php

namespace CustomExceptions;

class ExceptionHandler
{
    public function handle(\Throwable $exception)
    {
        die('God handler. Message: ' . PHP_EOL . $exception->getMessage());
    }
}