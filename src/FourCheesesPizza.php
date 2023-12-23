<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class FourCheesesPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Четыре сыра; ';
        $this->sauce = 'сырный соус; ';
        $this->toppings = ['моцарелла, ', 'пармезан; ', 'куцрица; '];
    }
}
