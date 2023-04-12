<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Mdl_produk');
		$this->auth->restrict();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library("session");
	}
	
	function index(){
       // $this->mdl_home->getsqurity();
        $data['view_file']    = "moduls/produk";
        $this->load->view('admin_view',$data);
    }
	
	public function ajax_list() {
		$list = $this->Mdl_produk->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->produk_utama;
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$produk->id_produk."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapus('."'".$produk->id_produk."'".')">Delete</a></li>
							<li class="divider"></li>
							<li><a href="produk/'.$produk->id_produk.'/detail">Detail</a></li>
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_produk->count_all(),
						"recordsFiltered" => $this->Mdl_produk->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}
	
	function produk_detail($key){
    	$row = $this->Mdl_produk->get_by($key);

    	if (!empty($row)) {
            $data = array(
            	'id_produk' => $row->id_produk,
				'id_detail' => $row->id_detail
            );
		$data['view_file']  = "moduls/detail_produk";
        $this->load->view('admin_view',$data);
        } else {
            $data['view_file']  = "moduls/detail_produk";
        	$this->load->view('admin_view',$data);
        } 	
    }
	
	public function ajax_add() {
		$data = array(
				'produk_utama'         	=> $this->input->post('produk_utama'),
				'produk_title_meta'     => $this->input->post('produk_title_meta'),
				'produk_deskripsi_meta' => $this->input->post('produk_deskripsi_meta'),
				'produk_keyword_meta'   => $this->input->post('produk_keyword_meta'),
				'id_admin' => $this->session->userdata('id_admin')
			);
		$insert = $this->Mdl_produk->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_produk->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'produk_utama'         	=> $this->input->post('produk_utama'),
				'produk_title_meta'     => $this->input->post('produk_title_meta'),
				'produk_deskripsi_meta' => $this->input->post('produk_deskripsi_meta'),
				'produk_keyword_meta'   => $this->input->post('produk_keyword_meta'),
				'id_admin' => $this->session->userdata('id_admin')
			);
		$this->Mdl_produk->update(array('id_produk' => $this->input->post('id_produk')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_produk->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
	
	public function create_load(){
		$this->load->view('moduls/load_produk');
	}
	
	function detail(){
       // $this->mdl_home->getsqurity();
	    $data['produk']       = $this->Mdl_produk->get_produk();
        $data['view_file']    = "moduls/produk_det";
        $this->load->view('admin_view',$data);
    }
	
	public function ajax_listid() {
		$kdProduk = $this->uri->segment(3);
		$list = $this->Mdl_produk->get_datatablesid($kdProduk);
		//print_r($this->db->last_query());
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk_det) {
			if($produk_det->detail_gambar==''){ $cover = 'no_image.jpg'; }else{ $cover = $produk_det->detail_gambar; }
			$row3 = '<img src="'.base_url().'../assets/images/'.$cover.'" style="height: 500px; width: 600px;">';
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk_det->detail_judul;
			$row[] = $produk_det->detail_deskripsi;
			$row[] = '
					  <a href="#modal-table'.$produk_det->id_detail.'" data-toggle="modal" class="tooltip-success" data-rel="tooltip" title="Edit">
						<span class="green">
							<i class="ace-icon fa fa-eye bigger-120"></i>
						</span>
					  </a>
					  <div id="modal-table'.$produk_det->id_detail.'" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header no-padding">
									<div class="table-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
									Gambar
									</div>
								</div>

								<div class="modal-body no-padding">
								<div align="center">
									'.$row3.'
								</div>		
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div>
					';
			$row[] = '
			<div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="edit('."'".$produk_det->id_detail."'".')">Edit</a></li>
                            <li><a href="javascript:void(0)" onclick="hapuse('."'".$produk_det->id_detail."'".')">Delete</a></li>
							
                        </ul>
            </div>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_produk->count_allid($kdProduk),
						"recordsFiltered" => $this->Mdl_produk->count_filteredid($kdProduk),
						"data" => $data,
				);
		echo json_encode($output);
	}
	
	public function ajax_addproduk() {
		$id_produk = $this->input->post('id_produk');
		$judul = $this->input->post('detail_judul');
		$deskripsi = $this->input->post('detail_deskripsi');
		$title_meta = $this->input->post('detail_title_meta');
		$deskripsi_meta = $this->input->post('detail_deskripsi_meta');
		$keyword_meta = $this->input->post('detail_keyword_meta');
		//$gambar = str_replace(' ', '_', $nama_file);

		
		$config['upload_path'] = realpath('../assets/images');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';
		
		$new_name = 'fotoproduk_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);

		if(!$this->upload->do_upload('userfile')){
 			$data = array(
			'id_produk' => $id_produk,
			'detail_judul' => $judul,
			'detail_deskripsi' => $deskripsi,
			'detail_title_meta' => $title_meta,
			'detail_deskripsi_meta' => $deskripsi_meta,
			'detail_keyword_meta' => $keyword_meta,
			'id_admin' => $this->session->userdata('id_admin')
			);
 		}else{
 			//unlink('../assets/galeri/'.$this->input->post('terserah'));
 			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar1 = $nama_foto;
			$data = array(
			'id_produk' => $id_produk,
			'detail_judul' => $judul,
			'detail_deskripsi' => $deskripsi,
			'detail_title_meta' => $title_meta,
			'detail_deskripsi_meta' => $deskripsi_meta,
			'detail_keyword_meta' => $keyword_meta,
			'detail_gambar' => $gambar1,
			'id_admin' => $this->session->userdata('id_admin')
			); 			
 		}	
 		

		$this->Mdl_produk->addproduk($data);
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_editproduk($id) {
		$data = $this->Mdl_produk->get_by_prod($id);
		echo json_encode($data);
	}
	
	public function update() {
		
		$judul = $this->input->post('detail_judul');
		$deskripsi = $this->input->post('detail_deskripsi');
		$title_meta = $this->input->post('detail_title_meta');
		$deskripsi_meta = $this->input->post('detail_deskripsi_meta');
		$keyword_meta = $this->input->post('detail_keyword_meta');
		
		$data = array(
				'detail_judul' => $judul,
				'detail_deskripsi' => $deskripsi,
				'detail_title_meta' => $title_meta,
				'detail_deskripsi_meta' => $deskripsi_meta,
				'detail_keyword_meta' => $keyword_meta,
				'id_admin' => $this->session->userdata('id_admin')
			);
		$this->Mdl_produk->update_produk(array('id_detail' => $this->input->post('id_detail')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function upload() {
       
		$config['upload_path'] = realpath('../assets/images/');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] = '2000000';
        $config['max_width'] = '2024';
        $config['max_height']= '1468';	
        
        $new_name = 'fotodetail_'.time();
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
 		$this->upload->initialize($config);
 		
 	    if($this->upload->do_upload('file-upload')){	
			$id_img1 = $this->input->post('id_detail');
			$oldImage1 = $this->Mdl_produk->get_by_id2($id_img1);
			if ($oldImage1->detail_gambar != "") {
			@unlink('../assets/images/'.$oldImage1->detail_gambar);
			}
			$get_name = $this->upload->data();
	   		$nama_foto = $get_name['file_name'];
	   		$gambar1 = $nama_foto;
			$data['detail_gambar'] = $gambar1;
		}
		$data['id_admin'] = $this->session->userdata('id_admin');
 		
		$where = array('id_detail' => $this->input->post('id_detail'));			 
		$this->Mdl_produk->update_data_2($where,$data,'tb_produk');	
		
		echo json_encode(array('status' => TRUE));
		
// 		$this->load->library('upload', $config);
//  		$this->upload->initialize($config);
// 		$this->upload->do_upload('file-upload');
 			
// 			$data = array(
// 			'detail_gambar' => $gambar,
// 			'id_admin' => $this->session->userdata('id_admin')
// 			); 			
 		
 		

// 		$where = array('id_detail' => $this->input->post('id_detail'));			 
// 		$this->Mdl_produk->update_data($where,$data,'tb_produk');	
		
// 		echo json_encode(array('status' => TRUE));
    }
	
	public function ajax_delproduk($id) {
      $this->Mdl_produk->delete_by($id);
      echo json_encode(array("status" => TRUE));
    }
}