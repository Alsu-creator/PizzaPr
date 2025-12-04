<?php

declare(strict_types=1);

namespace PizzaStore;

use Pizza\Pizza;
use Pizza\PizzaStore;

/**
 * Конкретная реализация магазина пиццерии
 */
class MyPizzaStore extends PizzaStore
{
    /**
     * Создание пиццы
     *
     * @param string $type Тип пиццы
     * @return Pizza Созданная пицца
     */
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'pepperoni' => new \PizzaLibrary\PepperoniPizza(),
            'cheese' => new \PizzaLibrary\CheesePizza(),
            'veggie' => new \PizzaLibrary\VeggiePizza(),
            default => throw new \InvalidArgumentException("Неизвестный тип пиццы: {$type}"),
        };
    }
}