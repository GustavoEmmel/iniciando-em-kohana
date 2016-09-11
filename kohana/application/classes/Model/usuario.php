<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuario extends ORM{
	public function rules(){
		return array(
			'nome' => array(
				array('not_empty')
			),
			'sobrenome' => array(
				array('not_empty')
			),
			'idade' => array(
				array('not_empty')
			)
		);
	}

}