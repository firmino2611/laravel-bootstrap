<?php

namespace Firmino\Bootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class Form extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'Bootstrap.form';
	}
}