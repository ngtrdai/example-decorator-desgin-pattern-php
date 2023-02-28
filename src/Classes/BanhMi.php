<?php

namespace App\Classes;

use App\Interfaces\BanhMiInterface;

class BanhMi implements BanhMiInterface
{
    public function cost(): int
    {
        // Base cost of a Banh Mi is 3000 VND
        return 3000;
    }
}