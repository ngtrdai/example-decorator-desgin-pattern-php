<?php

namespace App\Decorators;

use App\Classes\BanhMiDecorator;
use App\Interfaces\BanhMiInterface;

class Thit extends BanhMiDecorator
{
    public function __construct(BanhMiInterface $inner)
    {
        parent::__construct($inner);
    }

    public function cost(): int
    {
        return parent::cost() + 4000;
    }
}