<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SalesBundle\Model;

/**
 * State constants for Order
 */
final class OrderStates
{
    const CART            = 1;
    const CART_LOCKED     = 2;
    const ORDER           = 3;
    const ORDER_CONFIRMED = 4;

    const INITIAL = self::CART;
}