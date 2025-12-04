<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use PizzaStore\MyPizzaStore;

$store = new MyPizzaStore();

echo "Заказываем пиццу Пепперони:\n";
$pepperoniPizza = $store->orderPizza('pepperoni');
echo "\n";

echo "Заказываем сырную пиццу:\n";
$cheesePizza = $store->orderPizza('cheese');
echo "\n";

echo "Заказываем вегетарианскую пиццу:\n";
$veggiePizza = $store->orderPizza('veggie');