<?php namespace Jackiedo\Shoppingcart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Cart facade
 *
 * Adapted from https://github.com/Crinsane/LaravelShoppingcart
 *
 * @package 	JackieDo/ShoppingCart
 * @author 		Jackie Do <anhvudo@gmail.com>
 * @author 		Rob Gloudemans <http://robgloudemans.nl>
 */
class Cart extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
