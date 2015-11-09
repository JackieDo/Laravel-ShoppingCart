<?php namespace Jackiedo\Shoppingcart;

use Illuminate\Support\Collection;

/**
 * CartItem
 *
 * Adapted from https://github.com/Crinsane/LaravelShoppingcart
 *
 * @package     Luni CMS
 * @author      Jackie Do <anhvudo@gmail.com>
 * @copyright   2015 VTech <vtech@gmail.com>
 * @link        https://github.com/overtrue
 */
class CartItemOptions extends Collection {

	/**
     * Magic accessor.
     *
     * @param string $property Property name.
     *
     * @return mixed
     */
	public function __get($arg)
	{
		if($this->has($arg))
		{
			return $this->get($arg);
		}

		return null;
	}

	public function search($search, $strict = false)
	{
		if ($this->intersect($search)->isEmpty()) {
			return false;
		}

		return true;
	}

}