<?php
/**
 * Created by PhpStorm.
 * User: ondrej
 * Date: 1.6.17
 * Time: 15:57
 */

namespace App;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class RouterFactory
{
	use Nette\StaticClass;
	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = \AdminModule\RouterFactory::createRouter();
		$router[] = \FrontModule\RouterFactory::createRouter();
		return $router;
	}
}