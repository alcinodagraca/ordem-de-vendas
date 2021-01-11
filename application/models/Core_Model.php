<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Core_Model extends CI_Model{

	//funcao de retorna busca todos os dados na DB
	public function get_all($table = NULL, $condition = NULL){

		if($table){
			if(is_array($condition)){
				$this->db->where($condition);
			}
			return $this->db->get($table)->result();
		}else{
			return FALSE;
		}
	}
	
	//funcao que retorna busca por ID
	public function get_by_id($table = NULL, $condition = NULL){

		if($table && is_array($condition)){
			$this->db->where($condition);
			$this->db->limit(1);

			return $this->db->get($table)->row();
		}else{
			return FALSE;
		}

	}

	//funcao para inserir dados
	public function insert($table = NULL, $data = NULL, $get_last_id = NULL){

		if($table && is_array($data)){

			$this->db->insert($table, $data);

			if($get_last_id){
				$this->session->set_userdata('last_id', $this->db->insert_id());
			}

			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('sucess', 'Dados inseridos com sucess!');
			}else{
				$this->session->set_flashdata('error', 'Erro ao salvar dados!');
			}

		}else{
			return FALSE;
		}

	}

	//funcao de actualizacao
	public function update($table = NULL, $data = NULL, $condition = NULL){

		if($table && is_array($table) && is_array($condition)){

			if($this->db->update($table, $data, $condition)){
				$this->session->set_flashdata('sucess', 'Dados actualizados com sucess!');
			}else{
				$this->session->set_flashdata('error', 'Erro ao actualizar os sucess!');
			}

		}else{
			return FALSE;
		}

	}

	//funcao delete
	public function delete($table, $condition){
		$this->db->db_debug = false;
		if($table && is_array($condition)){
			$status = $this->db->delete($table, $condition);
			$error = $this->db->error();

			if(!$status){
				foreach ($error as $code){
					if($code == 1451){
						$this->session->set_flashdata('error','this object is used in other table');
					}
				}
			}else{
				$this->session->set_flashdata('success','object deleted');
			}
			$this->db->db_debug = true;
			return true;
		}else{
			return false;
		}
	}

}

