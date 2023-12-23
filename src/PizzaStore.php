<?php

namespace lw3\Pizza;

require '../vendor/autoload.php';

use Lw3\Library\PizzaStore;
use Lw3\Library\Pizza;

class OnePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        }
        if ($type === 'margarita') {
            return new MargaritaPizza();
        }if ($type === 'fourcheeses') {
            return new FourCheesesPizza();
        }else {
            throw new Exception('Неверный тип пиццы.');
        }
    }
}
