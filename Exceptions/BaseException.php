<?php

namespace CustomExceptions\Exceptions;

use Throwable;

class BaseException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = (new \DateTime())->format('Y-m-d H:i:s') . ' | ' . get_called_class() . ' | ' . $message . PHP_EOL;
        parent::__construct($message, $code, $previous);
    }
}