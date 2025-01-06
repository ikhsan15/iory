<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  function __construct(){
    parent::__construct();
		error_reporting(0);
		
    // $this->load->model('M_Home');
		// if($this->session->userdata('logged') != TRUE){
    //   redirect(base_url('login'));
    // }
  }

	function index(){
    // if($this->session->userdata('access') == 'Administrator' || $this->session->userdata('access') == 'Magang'){
			redirect(base_url('home/dashboard'));
    // }
    // else{
    //   redirect(base_url('login'));
    // }
  }

  function dashboard(){    
		$data['judul']				= $judul;
		$data['current_url']	= current_url();
		$data['class']				= $this->router->fetch_class();
		$data['method']				= $this->router->fetch_method();
		
		$this->load->view('v_home', $data);
  }

	function article() {
    $data['judul']				= $judul;
    $data['current_url']	= current_url();
    $data['class']				= $this->router->fetch_class();
    $data['method']				= $this->router->fetch_method();
    $data['rNum']					= $rNum;

		$article_title    		= '';
		$article_content    	= '';

		$data['article_title'] 			= $article_title;
		$data['article_content'] 		= $article_content;

		$data['rec_article']		= $this->db->query("SELECT * FROM public.article ORDER BY article_id DESC")->result();
		$this->load->view('article/v_article', $data);
	}

  function cpu($mode = '', $cpu_id = 0) {
    $rNum = $this->input->get('rNum');
		
		$cpu_tipe    = '';
    $cpu_speed    = '';
		$cpu_merk    = '';

    if ($mode == 'crud') {
			$action = $this->input->post('submit_crud');

			if ($action == 'update') {
				$query = "SELECT * FROM public.cpu WHERE cpu_id = ".$rNum;
				$row = $this->db->query($query);
				$rr = $row->row();

				$cpu_tipe		= $rr->cpu_tipe;
				$cpu_speed	= $rr->cpu_speed;
				$cpu_merk		= $rr->cpu_merk;
			}
			elseif ($action == 'simpan') {				
				$inp_cpu_tipe		= $this->input->post('inp_cpu_tipe');
				$inp_cpu_speed	= $this->input->post('inp_cpu_speed');
        $inp_cpu_merk		= $this->input->post('inp_cpu_merk');

				if($inp_cpu_tipe != ''){
					$data = array(
						'cpu_tipe'		=> $inp_cpu_tipe,
						'cpu_speed'		=> $inp_cpu_speed,
						'cpu_merk'		=> $inp_cpu_merk
					);

					if ($rNum > 0) {
						$this->M_Home->update_table('public.cpu', $data, 'cpu_id='.$rNum);
						// Cek apakah baris terpengaruh setelah update
						if ($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('success', 'Data berhasil diupdate!');
						}
						else {
							$this->session->set_flashdata('error', 'Data gagal diupdate!');
						}
					}
					else {
						$rNum = $this->M_Home->insert_table('public.cpu', $data);
						// Cek apakah baris terpengaruh setelah insert
						if ($this->db->affected_rows() > 0) {
							$this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
						}
						else {
							$this->session->set_flashdata('error', 'Data gagal ditambahkan!');
						}
					}
				}
				else{
					$this->session->set_flashdata('warning', 'Mohon isi data!!!');
				}
				redirect($this->router->fetch_class().'/'.$this->router->fetch_method());
			}
			elseif ($action == 'hapus') {
				$this->M_Home->delete_table('public.cpu', 'cpu_id='.$rNum);
				// Cek apakah baris terpengaruh setelah penghapusan
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data berhasil dihapus!');
				}
				else {
					$this->session->set_flashdata('error', 'Data gagal dihapus!');
				}
				redirect($this->router->fetch_class().'/'.$this->router->fetch_method());
			}
			elseif ($action == 'reset') {
				redirect($this->router->fetch_class() . '/' . $this->router->fetch_method());
			}
    }

    $data['judul']				= $judul;
    $data['current_url']	= current_url();
    $data['class']				= $this->router->fetch_class();
    $data['method']				= $this->router->fetch_method();
    $data['rNum']					= $rNum;

    $data['cpu_id']				= $cpu_id;  
    $data['cpu_tipe']			= $cpu_tipe;
    $data['cpu_speed']		= $cpu_speed;
    $data['cpu_merk']			= $cpu_merk;

		$data['rec_cpu']			= $this->db->query("SELECT * FROM public.cpu ORDER BY cpu_tipe ASC");

    $this->load->view('det_komp/dk_cpu', $data);
	}



}
