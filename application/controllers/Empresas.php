<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_empresas');
	}

	public function index()
	{

		$data['title'] = 'Empresas';
		$data['js_files'] 		= array('empresa.js?v=0.1');
		$data['css_files'] 		= array();



		$data['empresas'] = $this->model_empresas->get_all();
		// VIEWS
		$this->load->view('header', $data);
		$this->load->view('empresas/index', $data);
		$this->load->view('footer', $data);
	}

	public function profile($id)
	{  
		//TODO: se nao for passado id nenhum retorna erro
		if ($id > 0) {
			$data['title'] = 'Empresas';
			$data['js_files'] 		= array('empresas.js?v=0.1');
	

			$empresa = $this->model_empresas->get($id);
				$data['empresas'] = $empresa[0];
				$this->load->view('header', $data);
				$this->load->view('empresas/profile', $data);
				$this->load->view('footer', $data);
			
			
		}else{
			$data['title'] = 'Error';
			$data['heading'] = 'Empresas';
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
				'cnpj' => $this->input->post('cnpj')
			);
			
			$this->model_empresas->edit($this->input->post('id'), $data);
			return print_r(json_encode(array(
				'message' => 'empresa alterada com sucesso',
				'url' => site_url('/empresas/profile/'. $this->input->post('id'))
			)));
		}
	}

	public function add()
	{
		$data['title'] = 'Empresas';
		$data['js_files'] 		= array('empresas.js?v=0.1');

		$this->load->view('header', $data);
		$this->load->view('empresas/add', $data);
		$this->load->view('footer', $data);
	}


	public function ajax_delete()
	{
		
		if ($this->input->post()) 
		{
			$this->model_empresas->delete($this->input->post('id'));

			return print_r(json_encode(array(
				'message' => 'empresa deletado com sucesso',
				'url' => site_url('/empresas')
			)));
		}
	}

	public function ajax_save()
	{
		if ($this->input->post()) 
		{
			$data = array(
				'nome' => $this->input->post('name'),
				'cnpj' => $this->input->post('cnpj')
			);
			
			$id = $this->model_empresas->insert($data);
			return print_r(json_encode(array(
				'message' => 'empresa criado com sucesso',
				'url' => site_url('/empresas/profile/'. $id)
			)));
		}
	}
}
