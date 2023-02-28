<?php

use App\Classes\BanhMi;
use App\Decorators\ChaLua;
use App\Decorators\DuaLeo;
use App\Decorators\Thit;
use App\Decorators\TuongOt;

require_once 'vendor/autoload.php';

class Main
{
    public function __construct()
    {
        $firstBanhMi = new Thit(
                        new TuongOt(
                            new DuaLeo(
                                new ChaLua(
                                    new BanhMi()))));

        echo "Cost of first banh mi: " . $firstBanhMi->cost() . " VND" . PHP_EOL;

        $secondBanhMi = new Thit(
                            new TuongOt(
                                new DuaLeo(
                                    new BanhMi()
                                )
                            )
                        );
        
        echo "Cost of second banh mi: " . $secondBanhMi->cost() . " VND" . PHP_EOL;
    }
}

new Main();