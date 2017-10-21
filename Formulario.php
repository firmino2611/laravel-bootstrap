<?php

namespace Firmino\Bootstrap;

class Formulario
{

	/* 
	|---------------------------------------------------------------------------------
	|	Cria um campo de formulario do tipo especifico
	|---------------------------------------------------------------------------------
	|	Recebe um array com as seguintes informacoes:
	|	tipo: tipo do campo que deseja-se criar,
	|	config: um array com as informacoes do campo.
	|		array(
	|			'label' => label do campo,
	|			'name' => valor do atributo name do campo,
	|			'value' => valor do atributo value,
	|			'placeholder' => valor do atributo placeholder
	|		)
	*/

	public function text(Array $config){
		$value =  isset($config['value']) ? $config['value'] : '';
		$type =  isset($config['type']) ? $config['type'] : 'text';
		$placeholder =  isset($config['placeholder']) ? $config['placeholder'] : '';
		$required =  isset($config['required']) ? $config['required'] : '';

		if (isset($config['hidden'])) 
			$hidden = $config['hidden'] ? 'none' : 'block' ;
		else
			$hidden = '';


		$input = '<div style="display: '. $hidden .'" class="form-group"><label for="">'. $config['label'] .'</label><input type="'.$type.'" '. $required .' name="'. $config['name'] .'" id="'. $config['name'] .'" value="'. $value .'" placeholder="'. $placeholder .'" class="form-control"></div>';

		return $input;
	}

	public function select(Array $config)
	{
		$options = '';

		if (isset($config['options'])){ 
			foreach ($config['options'] as $opt) {
				if (isset($opt[2])) {
					if(($opt[2] == $opt[0]))
						$options .= '<option selected value="'. $opt[0] .'">'. $opt[1] .'</option>';
					else
						$options .= '<option value="'. $opt[0] .'">'. $opt[1] .'</option>';
				}else{
					$options .= '<option value="'. $opt[0] .'">'. $opt[1] .'</option>';
				}
			}
		}else
			$options .= '<option value="">Nenhum item listado</option>';
		

		if (isset($config['multiple'])) 
			$multiple = $config['multiple'] ? 'multiple' : '' ;
		else
			$multiple = '';

		$input = '<div class="form-group">';
		$input .= '<label for="">'. $config['label'] .'</label>';
		$input .= '<select type="text"  name="'. $config['name'] .'" class="form-control" '. $multiple .' > ' . $options .'</select>';
		$input .= '</div>';

		return $input;

	}

	public function textarea(Array $config)
	{
		$value =  isset($config['value']) ? $config['value'] : '';
		if (isset($config['rows'])) {
			$rows = $config['rows'];
		}else{
			$rows = 5;
		}
		$input = '<div class="form-group">';
		$input .= '<label for="">'. $config['label'] .'</label>';
		$input .= '<textarea type="text" name="'. $config['name'] .'" rows="'. $rows .'" class="form-control">'. $value .'</textarea>';
		$input .= '</div>';

		return $input;
	}

	public function file(Array $config)
	{

		$input = '<label class="custom-file">';
		$input .= '<input type="file" name="'. $config['name'] .'" id="file2" class="custom-file-input">';
		$input .= '<span class="custom-file-control"></span>';
		$input .= '</label>';

		return $input;
	}

	public function checkbox(Array $config)
	{
		//$check =  isset($config['checked']) and $config['checked'] == true ? $config['checked'] : '';
		if (isset($config['checked'])) {
			if ($config['checked']) {
				$check = 'checked';
			}else{
				$check = '';
			}
		}else{
			$check = '';
		}

		$input = '<label class="custom-control custom-checkbox">';
		$input .= '<input '. $check .' name="'. $config['name'] .'" type="checkbox" class="custom-control-input">';
		$input .= '<span class="custom-control-indicator"></span>';
		$input .= '<span class="custom-control-description">'. $config['label'] .'</span>';
		$input .= '</label>';

		return $input;
	}
}
