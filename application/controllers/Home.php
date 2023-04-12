<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model');
	}

	public function tes()
	{
		echo "tes";
	}

	public function index()
	{
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu']   = $this->Model->menu_header()->result_array();
		$this->load->view('header', $data_header);

		$data['tampil_slider'] = $this->Model->tampil_slider(3)->result_array();
		$data['home'] 	   = $this->Model->terbaru(3)->result_array();
		$data['foto'] = $this->Model->foto()->result_array();

		$data['grafik_internal'] = $this->Model->grafik_internal();
		$this->load->view('index', $data);

		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	public function tentang()
	{
		$tentang_meta = $this->Model->tentang()->row();
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$this->load->view('header', $data_header);

		$data['home'] = $this->Model->terbaru(3)->result_array();
		$data['tampil_slider'] = $this->Model->tampil_slider(4)->result_array();
		$data['tentang'] = $this->Model->tentang()->row();
		$this->load->view('about', $data);

		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function galeri_room($id)
	{
		$galeri_meta = $this->Model->tampil($id)->row();
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$this->load->view('header', $data_header);

		$data['room_nama'] = $this->Model->tampil($id)->row();
		$data['menu'] = $this->Model->menu_header()->result_array();
		$data['room_jenis'] = $this->Model->tampil($id)->result_array();
		$data['produk'] = $this->Model->produk_all()->result_array();
		$this->load->view('room', $data);

		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function produk($id)
	{
		$produk_meta = $this->Model->tampil(4, $id)->row();
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['room'] = $this->Model->tampil(4, $id)->row();
		$this->load->view('header', $data_header);
		$this->load->view('single', $data);
		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function galleri()
	{
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['galeri_album'] = $this->Model->album_galeri()->result_array();
		$this->load->view('header', $data_header);
		$this->load->view('gallery', $data);
		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function room()
	{
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['produk'] 	 = $this->Model->kategori_produk()->result_array();
		$this->load->view('headerroom', $data_header);
		$this->load->view('kategori_room', $data);
		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function galeri_album($id)
	{
		$galeri_meta = $this->Model->album_galeri(2, $id)->row();
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$data['galeri_album'] = $this->Model->album_galeri(1, $id)->result_array();
		$data['galeri_album_room'] = $this->Model->album_galeri(2, $id)->row();
		$this->load->view('header', $data_header);
		$this->load->view('gallery_album', $data);
		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function hubungi()
	{
		$data_header['title'] = 'ChocoShakes';
		$data_header['description'] = 'ChocoShakes Coklat Enak Malang';
		$data_header['keyword'] = 'ChocoShakes';
		$data['hubungi'] = $this->Model->hubungi()->row();
		$data_header['menu'] = $this->Model->menu_header()->result_array();
		$this->load->view('header', $data_header);
		$this->load->view('mail', $data);
		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}

	function simpan_kontak()
	{
		$data['nama_form'] = $this->input->post('Name');
		$data['email_form'] = $this->input->post('Email');
		$data['phone_form'] = $this->input->post('Telephone');
		$data['pesan_form'] = $this->input->post('Message');
		$this->Model->simpan_kontak($data);
		redirect(base_url('home/hubungi'));
	}

	function video()
	{
		$data_header['menu']   = $this->Model->menu_header()->result_array();
		$this->load->view('header', $data_header);

		$data['video'] 	   = $this->Model->tampil_video()->result_array();
		$this->load->view('video', $data);

		$data_footer['terbaru'] = $this->Model->terbaru(5)->result_array();
		$this->load->view('footer', $data_footer);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */