<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{
	
	public $titulo;
	public $categoria_id;
	public $descricao;
	public $texto;
	public $img;
	public $datacadastro;

	public function recuperarPost() //método para recuperação de tabela post 
	{
		return $postagens = $this->db->get('post')->result();
	}
	public function recuperarUsuario() //método para recuperação de tabela usuario
	{
		return $data = $this->db->get('usuario', 1)->result();
	}
	public function recuperarCategoria() //método para recuperação de tabela categoria
	{
		return $categorias = $this->db->get('categoria')->result();
	}
	public function inserirPost(){
		if ($this->img == null) {
			$this->img = "img0.jpg";
		}

		$this->datacadastro = date('Y/m/d H:i:s');

		$data = array(
			"titulo" => $this->titulo,
			"categoria_id" => $this->categoria_id,
			"descricao" => $this->descricao,
			"texto" => $this->texto,
			"img" => $this->img,
			"datacadastro" => $this->datacadastro
		);
		return $this->db->insert('post',$data);
	}
	public function getPost($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('post');
		return $query->row_array();
	}

	public function atualizar($id) {
		$data = array(
			"titulo" => $this->titulo,
			"categoria_id" => $this->categoria_id,
			"descricao" => $this->descricao,
			"texto" => $this->texto
		);

		$this->db->where('id', $id);
		return $this->db->update('post', $data);
	}

	public function deletar($id) {
		$this->db->where('id', $id);
		return $this->db->delete('post');
	}
}
