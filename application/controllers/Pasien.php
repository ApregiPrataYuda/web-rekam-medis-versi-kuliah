<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	 function __construct()
	{
		 parent::__construct();
		 check_not_login();
		 $this->load->model('Pasien_m');
		 
	}

	public function index()
	{
		$data['row'] = $this->Pasien_m->get();
		$this->template->load('Template','pasien/data_pasien',$data);
	}

	public function add()
	{
		   $Pasien = new stdclass();
			 $Pasien->pasien_id = null;
			  $Pasien->no_identitas = null;
			   $Pasien->name = null;
			    $Pasien->jenis_kelamin = null;
				$Pasien->address = null;
				 $Pasien->no_telp = null;
				 $data = array(
						   'page' => 'add',
						     'row' => $Pasien,
						   
				);
	    	$this->template->load('Template','pasien/pasien_form', $data);
	}



	public function edit($id)
	{

		$query = $this->Pasien_m->get($id);
		 if ($query->num_rows() > 0 ) {
			 $Pasien =  $query->row();
			 $data = array(
				           'page' => 'edit',
						     'row' => $Pasien,
			  );
				  $this->template->load('Template','pasien/pasien_form', $data);
					
		 }else{
			         $this->session->set_flashdata('messages','id data tidak di temukan di database!');
					 redirect('Pasien');
		 }
      
	}

	
	public function hapus($id)
	{
			$Pasien =  $this->Pasien_m->get($id)->row();
			  if ($Pasien->image != null) {
				   $target_file = './image/pasien/'.$Pasien->image;
				    unlink( $target_file );
			  }

	   $this->Pasien_m->delete($id);
	   if ($this->db->affected_rows() > 0 ) {
		    $this->session->set_flashdata('messages','data berhasil di Hapus!');
	   }
	  redirect('Pasien');
	}


	public function proses()
	{

		            $config['upload_path']          = './image/pasien/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
					$config['max_size']             = 2048;
					$config['file_name']            = 'pasien-'.date('ymd').'-'.substr(md5(rand()),0,10);
					$this->load->library('upload', $config);
					
		  $post = $this->input->post(null, TRUE);
		     if (isset($_POST['add'])) {

			     	if (@$_FILES['image']['name']) {
					 if ($this->upload->do_upload('image'))
                {
				     $post['image'] = $this->upload->data('file_name');
					 $this->Pasien_m->add($post);
						if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('messages','data berhasil di simpan!');
	                            }
	                          redirect('Pasien');
                }else {
					 $error = $this->upload->display_errors();
                        if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('error',$error);
	                            }
	                          redirect('Pasien');
				}
					 
				}else {
				   $post['image'] = null;
					 $this->Pasien_m->add($post);
						if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('messages','data berhasil di simpan!');
	                            }
	                          redirect('Pasien');
				}
			    
			 }elseif (isset($_POST['edit'])) {

				if (@$_FILES['image']['name']) {
					 if ($this->upload->do_upload('image'))
                    {
						  $Pasien = $this->Pasien_m->get($post['id'])->row();
						  if ($Pasien->image != null) {
							   $target_file = './image/pasien/'.$Pasien->image;
							   unlink($target_file);
						  }
						  
				     $post['image'] = $this->upload->data('file_name');
					  $this->Pasien_m->edit($post);
						if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('messages','data berhasil di simpan!');
	                            }
	                          redirect('Pasien');
                }else {
					 $error = $this->upload->display_errors();
                        if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('error',$error);
	                            }
	                          redirect('Pasien');
				}
					 
				}else {
				   $post['image'] = null;
					  $this->Pasien_m->edit($post);
						if ($this->db->affected_rows() > 0) {
			              $this->session->set_flashdata('messages','data berhasil di simpan!');
	                            }
	                          redirect('Pasien');
				}
				 
			 }
	}

	
}
