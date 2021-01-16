<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata('info', 'Login using username and password');
			redirect('login');
		}
	}

	public function index(){

		$data = array(

			'title'  => 'Edit System Information',
			'system' => $this->core_model->get_by_id('sistema', array('sistema_id => 1')),

		);


		/*
		 stdClass Object
(
    [sistema_id] => 1
    [sistema_razao_social] => Amyn inc.
    [sistema_nome_fantasia] => Sistema de ordem
    [sistema_cnpj] => 20.734.622/0001-50
    [sistema_ie] =>
    [sistema_telefone_fixo] =>
    [sistema_telefone_movel] =>
    [sistema_email] => amyn@amyndm.com
    [sistema_site_url] => http://localhost/ordem/
    [sistema_cep] =>
    [sistema_endereco] =>
    [sistema_numero] =>
    [sistema_cidade] =>
    [sistema_estado] =>
    [sistema_txt_ordem_servico] =>
    [sistema_data_alteracao] => 2021-01-14 14:50:19
)
		 * */


/*		echo '<pre>';
		print_r($data['system']);
		exit();*/

		$this->load->view('layout/header', $data);
		$this->load->view('sistema/index');
		$this->load->view('layout/footer');


	}


}
