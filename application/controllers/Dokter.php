<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dokter extends CI_controller
{
     function __construct()
     {
           parent::__construct();
             check_not_login();
           $this->load->model('Dokter_m');
     }


    public function index()
    {
         $data['row']=$this->Dokter_m->get();
        $this->template->load('Template','Dokter/Dokter_data', $data);
    }


    public function delete($id)
    {
             $Dokter = $this->Dokter_m->get($id)->row();
               if ($Dokter->image != null) {
                       $target_file = './image/dokter/'.$Dokter->image;
                       unlink($target_file);
               }
          
      $this->Dokter_m->delete($id);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('messages','data berhasil di hapus!');
    }
                         echo"<script>window.location='".site_url('Dokter')."'</script>";
    }

    public function add()
    {
           $Dokter =  new stdClass();
           $Dokter->dokter_id = null;
           $Dokter->name = null;
           $Dokter->spesialis = null;
           $Dokter->alamat = null;
           $Dokter->no_telp = null;
           $data = array(
                              'page' =>  'add',
                               'row' =>  $Dokter,
                         );
                            $this->template->load('Template','Dokter/Dokter_form', $data);
    }

   
    public function edit($id)
    {
           $query = $this->Dokter_m->get($id);
              if ($query->num_rows() > 0) {
                   $Dokter = $query->row();
                      $data = array(
                              'page' =>  'edit',
                               'row' =>  $Dokter,
                         );
                           $this->template->load('Template','Dokter/Dokter_form', $data);
    }else {
            $this->session->set_flashdata('messages','data tidak di temukan!');
            redirect('Dokter');
    }
              }



   public function proses()
   {
                       $config['upload_path']          = './image/dokter/';
                       $config['allowed_types']        = 'gif|jpg|png|jpeg';
                       $config['max_size']             = 2048;
                       $config['file_name']        = 'dokter-'.date('ymd').'-'.substr(md5(rand()),0,10);
                       $this->load->library('upload', $config);

           $post =  $this->input->post(null, TRUE);
           if (isset($_POST['add'])) {
                

                   if (@$_FILES['image']['name']) {
                      if ($this->upload->do_upload('image'))
                {
                         $post['image'] = $this->upload->data('file_name');
                        $this->Dokter_m->add($post); 
                        if($this->db->affected_rows() > 0) {
                     $this->session->set_flashdata('messages','berhasil disimpan!');
                     }
                          redirect('Dokter');
                }else {
                         $error = $this->upload->display_errors();
                         $this->session->set_flashdata('error',$error);
                          redirect('Dokter/add');
                }
                         
                   }else {
                           $post['image'] = null;
                           $this->Dokter_m->add($post); 
                          if($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('messages','berhasil disimpan!');
                        }
                          redirect('Dokter');
                        }
              
           }elseif (isset($_POST['edit'])) {
                    if (@$_FILES['image']['name']) {
                      if ($this->upload->do_upload('image'))
                   {
                                      $Dokter = $this->Dokter_m->get($post['id'])->row();
                                      if ($Dokter->image != null) {
                                               $target_file =  './image/dokter/'.$Dokter->image;
                                               unlink($target_file);
                                      }

                         $post['image'] = $this->upload->data('file_name');
                         $this->Dokter_m->edit($post);
                        if($this->db->affected_rows() > 0) {
                     $this->session->set_flashdata('messages','berhasil disimpan!');
                     }
                          redirect('Dokter');
                }else {
                         $error = $this->upload->display_errors();
                         $this->session->set_flashdata('error',$error);
                          redirect('Dokter/add');
                }
                         
                   }else {
                           $post['image'] = null;
                            $this->Dokter_m->edit($post);
                          if($this->db->affected_rows() > 0) {
                       $this->session->set_flashdata('messages','berhasil disimpan!');
                        }
                          redirect('Dokter');
                        }
                 
           }
   }

                
}









