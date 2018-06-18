<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\FactoryMethod;

/**
 * Class FactoryMethod
 * @package Creational\FactoryMethod
 */
class FactoryMethod implements FactoryMethodInterface
{

    /**
     * @param string $name
     * @return ProductInterface
     */
    public function getProduct(string $name): ProductInterface
    {
        $product = __NAMESPACE__ . '\\' . $name;

        return new $product();
    }
}
