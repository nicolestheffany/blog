<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$postagens['posts'] = $this->db->get('post')->result();
		$postagens['carousel'] = $this->db->get('post', 3)->result();
		$data['usuario'] = $this->db->get('usuario', 1)->result();
		$data['titulo'] = 'My Blog - Página Inicial';
		$data['pagina'] = 'Home';

		$this->load->view('menu', $data);
		$this->load->view('home', $postagens, $data);
		$this->load->view('footer');
	}

	public function buscar(){
		$parametro['posts'] = $this->db->get('post')->result();
		
		$busca = $this->input->post('busca');
		$data['busca'] = $busca;
		$this->db->like('titulo',$busca);
		$this->db->or_like('descricao',$busca);
		$data['post'] = $this->db->get('post')->result();
		
		$this->load->view('pesquisa',$data);
		
	}

}
