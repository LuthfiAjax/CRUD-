<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		
    }

	public function index()
	{
		$this->form_validation->set_rules('nama_brg', 'Nama Barang', 'required|trim');
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim');
		$this->form_validation->set_rules('id_rak', 'Rak Simpan', 'required|trim');

		$this->load->model('Gudang_model', 'gudang');
		$data['gudangs'] = $this->gudang->select();

		$this->load->model('Gudang_model', 'lokasi');
		$data['lokasi'] = $this->lokasi->selectLok();

			if ($this->form_validation->run() == false){

			$this->load->view('templates/layout/header');
			$this->load->view('welcome_message', $data);
			$this->load->view('templates/layout/modal');
			$this->load->view('templates/layout/footer');
			}else{
				$nama_brg = $this->input->post('nama_brg');
				$stok = $this->input->post('stok');
				$id_rak = $this->input->post('id_rak');

				$data = array(
					'nama_brg' => $nama_brg,
					'stok' => $stok,
					'id_rak' => $id_rak
				);

				$this->db->insert('tbl_gudang', $data);
				redirect(base_url(''));
				
			}
	}

	public function lokasi(){
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'lokasi' => $lokasi
		);

		$this->db->insert('tbl_rak', $data);
		redirect(base_url(''));

	}

	public function hapus($gudang){
		$this->load->model('Gudang_model', 'hapus');
		$this->hapus->delete($gudang);

		redirect(base_url(''));
	}

	public function edit(){
		$id_gudang = $this->input->post('id_gudang');
		$nama_brg = $this->input->post('nama_brg');
		$stok = $this->input->post('stok');
		$id_rak = $this->input->post('id_rak');

		$data = array(
			'nama_brg' => $nama_brg,
			'stok' => $stok,
			'id_rak' => $id_rak
		);

		$this->db->set($data);
		$this->db->where('id_gudang', $id_gudang);
		$this->db->update('tbl_gudang');

		redirect(base_url(''));
	}
}