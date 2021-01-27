<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_usuarios');
	}

	public function index()
	{

		$data['title'] = 'Usuários';
		$data['js_files'] 		= array('usuario.js?v=0.1');
		$data['css_files'] 		= array();



		$data['users'] = $this->model_usuarios->get_all();
		// VIEWS
		$this->load->view('header', $data);
		$this->load->view('usuarios/index', $data);
		$this->load->view('footer', $data);
	}

	public function profile($id)
	{  
		//TODO: se nao for passado id nenhum retorna erro
		if ($id > 0) {
			$data['title'] = 'Usuários';
			$data['js_files'] 		= array('usuario.js?v=0.1');
	

			$user= $this->model_usuarios->get($id);
				$data['users'] = $user[0];
				$this->load->view('header', $data);
				$this->load->view('usuarios/profile', $data);
				$this->load->view('footer', $data);
			
			
		}else{
			$data['heading'] = 'Usuários';
			$data['message'] = 'Usuário não localizado';
			$this->load->view('header', $data);
			$this->load->view('errors/cli/error_404', $data);
			$this->load->view('footer', $data);
		}
	}

	public function ajax_update()
	{
		if ($this->input->post()) 
		{
			$data = array(
				'nome' => $this->input->post('name'),
				'login' => $this->input->post('login'),
				'cargo' => $this->input->post('cargo')
			);
			
			$this->model_usuarios->edit($this->input->post('id'), $data);
			return print_r(json_encode(array(
				'message' => 'usuario criado com sucesso',
				'url' => site_url('/usuarios/profile/'. $this->input->post('id'))
			)));
		}
	}

	public function add()
	{
		$data['title'] = 'Usuários';
		$data['js_files'] 		= array('usuario.js?v=0.1.2');

		$this->load->view('header', $data);
		$this->load->view('usuarios/add', $data);
		$this->load->view('footer', $data);
	}


	public function ajax_delete()
	{
		
		if ($this->input->post()) 
		{
			$this->model_usuarios->delete($this->input->post('id'));

			return print_r(json_encode(array(
				'message' => 'usuario deletado com sucesso',
				'url' => site_url('/usuarios')
			)));
		}
	}

	public function ajax_save()
	{
		if ($this->input->post()) 
		{
			$data = array(
				'nome' => $this->input->post('name'),
				'login' => $this->input->post('login'),
				'cargo' => $this->input->post('cargo')
			);
			
			$id = $this->model_usuarios->insert($data);
			return print_r(json_encode(array(
				'message' => 'usuario criado com sucesso',
				'url' => site_url('/usuarios/profile/'. $id)
			)));
		}
	}
}
