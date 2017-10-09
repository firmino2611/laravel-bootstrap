<?php

namespace Firmino\Bootstrap\Facades;

use Illuminate\Support\Facades\Facade;


class Formulario extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'Bootstrap.formulario';
	}
}