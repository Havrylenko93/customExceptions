<?php

namespace CustomExceptions;

use CustomExceptions\Exceptions\IncorrectTitleException,
    CustomExceptions\Exceptions\OverPricedException;

class Product
{
    public $id;
    public $title;
    public $cost;
    public $available;

    public function __construct(int $id, string $title, float $cost, bool $available)
    {
        if (strlen($title) < 10) {
            throw new IncorrectTitleException('incorrect title');
        }

        if ($cost > 100) {
            throw new OverPricedException('over price');
        }

        $this->id = $id;
        $this->title = $title;
        $this->cost = $cost;
        $this->available = $available;
    }

    public function __unset($name)
    {
        $this->available = false;
    }
}