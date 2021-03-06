<?php

namespace Firmino\Bootstrap;

class HTML
{
	/*
	|----------------------------------
	|	Pegar os arquivos css
	|----------------------------------
	|	Recebe o numero da versao do Bootstrap que se deseja trabalhar
	|
	*/
	public function css($version = '3')
	{
		switch ($version) {
			case '4':
				$css = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">';
				break;

			default:
				$css = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
				break;
		}

		return $css;
	}

	/*
	|----------------------------------
	|	Pegar os arquivos js
	|----------------------------------
	|	Recebe o numero da versao do Bootstrap que se deseja trabalhar
	|
	*/
	public function js($version = '3')
	{
		switch ($version) {	
			case '4':
				$js = '
				    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>';
				break;
			
			default:
				$js = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';
				break;
		}

		return $js;
	}

	public function localCSS($path)
	{
		$css = public_path($path);
		return $css;
	}

	public function localJS($path)
	{
		$js = public_path($path);
		return $js;
	}

}