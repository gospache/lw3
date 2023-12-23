<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони; ';
        $this->sauce = 'барбекю соус; ';
        $this->toppings = ['курица, ', 'двойная пепперони, ', 'сыр; '];
    }
}
