<?php

namespace Firmino\Bootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class Html extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'Bootstrap.html';
	}
}