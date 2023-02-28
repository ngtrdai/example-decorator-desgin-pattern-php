<?php

namespace App\Classes;

use App\Interfaces\BanhMiInterface;

abstract class BanhMiDecorator implements BanhMiInterface
{
    private $_banhMi;

    protected function __construct(BanhMiInterface $inner)
    {
        $this->_banhMi = $inner;
    }

    public function cost(): int
    {
        return $this->_banhMi->cost();
    }
}