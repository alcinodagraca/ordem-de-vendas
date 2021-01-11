<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$data = array(

			'title' => 'Registered users',

			'styles' => array(
				'vendor/datatables/dataTables.bootstrap4.min.css'
			),

			'scripts'  => array(
				'vendor/datatables/jquery.dataTables.min.js',
				'vendor/datatables/dataTables.bootstrap4.min.js',
				'vendor/datatables/app.js'
			),

			'users' => $users = $this->ion_auth->users()->result(), // get all users
		);

		$this->load->view('layout/header', $data);
		$this->load->view('usuarios/index');
		$this->load->view('layout/footer');

	}

	public function add(){

		$this->form_validation->set_rules('first_name', 'name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'last name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('confirm_password', 'password confirmation', 'matches[password]');


		if($this->form_validation->run()){
			exit('validated');
		}else{
			//Validation Error
			$data = array(
				'title' => 'Register User'
			);

			$this->load->view('layout/header', $data);
			$this->load->view('usuarios/add');
			$this->load->view('layout/footer');

		}


	}

	public function edit($user_id = NULL){

		if(!$user_id || !$user = $this->ion_auth->user($user_id)->row()){

			$this->session->set_flashdata('error', 'User not found');
			redirect('usuarios');

		}else{

			$this->form_validation->set_rules('first_name', 'name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'last name', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|callback_email_check');
			$this->form_validation->set_rules('username', 'username', 'trim|required|callback_username_check');
			$this->form_validation->set_rules('password', 'password', 'min_length[5]|max_length[255]');
			$this->form_validation->set_rules('confirm_password', 'password confirmation', 'matches[password]');

			if($this->form_validation->run()){


				$data = elements(

					array(

						'first_name',
						'last_name',
						'email',
						'username',
						'active',
						'password'

					), $this->input->post()

					//perfil_usuario //verificar

				);

				$data = $this->security->xss_clean($data);

				/* Verifica se foi passada a senha */
				$password = $this->input->post('password');
				if(!$password){
					unset($data['password']);
				}

				if($this->ion_auth->update($user_id, $data)){
					$profile_user_db = $this->ion_auth->get_users_groups($user_id)->row();
					$profile_user_post = $this->input->post('user_group');

					/*Se for diferente, actualiza o grupo*/
					if($profile_user_post != $profile_user_db->id){
						$this->ion_auth->remove_from_group($profile_user_db->id, $user_id);
						$this->ion_auth->add_to_group($profile_user_post, $user_id);
					}

					$this->session->set_flashdata('success', 'Dados salvos com sucesso');

				}else{
					$this->session->set_flashdata('error', 'Erros ao salvar dados');
				}
				redirect('usuarios');
			}else{

				$data = array(
					'title' => 'Edit title',
					'user' => $this->ion_auth->user($user_id)->row(),
					'user_group' => $this->ion_auth->get_users_groups($user_id)->row(),
				);

				$this->load->view('layout/header', $data);
				$this->load->view('usuarios/edit');
				$this->load->view('layout/footer');

			}


		}

	}

	public function email_check($email){

		$user_id = $this->input->post('user_id');

		if ($this->core_model->get_by_id('users', array('email' => $email, 'id !=' => $user_id))){

			$this->form_validation->set_message('email_check','Email already exist');

			return FALSE;

		}else{
			return TRUE;
		}


	}

	public function username_check($username){

		$user_id = $this->input->post('user_id');

		if ($this->core_model->get_by_id('users', array('username' => $username, 'id !=' => $user_id))){

			$this->form_validation->set_message('username_check','This username already exist');

			return FALSE;

		}else{
			return TRUE;
		}


	}

}
