<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'templateWelcome';

	public function action_index()
	{
		//$id = 1;
		//$idade = 36;
		//$nome = 'Gustavo';

		$usuarios = ORM::Factory('Usuario')
		//	->where('idade', '=', $idade)
		//	->where('nome', '=', $nome)
			->find_all();
		
		if(isset($usuarios[0])){
		     $this->template->content = View::Factory('index/list')
				 ->bind('usuarios', $usuarios);
		} else {
			  $usuarios = array();
			  $this->template->content = View::Factory('index/list')
				 ->bind('usuarios', $usuarios);
		}

	}

	public function action_teste()
	{
		$this->template->content = 'Iniciando em Kohana na action teste';
	}

	public function action_formulario()
	{
		$id = $this->request->param('id');

		$usuario = ORM::Factory('Usuario', $id);

		$this->template->content = View::Factory('index/editar')
				 ->bind('usuario', $usuario);
	}

	public function action_salvar()
	{
		try{

			$usuario = ORM::Factory('Usuario', $_POST['id']);

			unset($_POST['id']);
		
			$usuario->values($_POST);
			$usuario->save();

			HTTP::redirect('welcome');

		} catch (ORM_Validation_Exception $e) {
			$errors = $e->errors('model');
		}
		
		$this->template->content = View::Factory('index/editar')
				 ->bind('errors', $errors)
				 ->bind('usuario', $usuario);

	}

	Public function action_deletar()
	{
		$id = $this->request->param('id');

		$usuario = ORM::Factory('Usuario', $id)
			->delete();

		HTTP::redirect('welcome');
	}

} // End Welcome
