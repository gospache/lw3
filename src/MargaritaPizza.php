<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\Pizza;

class MargaritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита; ';
        $this->sauce = 'кисло-сладкий соус; ';
        $this->toppings = ['огурцы, ', 'курица, ', 'помидоры; ', 'сыр; '];
    }
}
