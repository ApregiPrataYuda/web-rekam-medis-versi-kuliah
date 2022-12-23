<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_controller
{
    function __construct()
    {
        parent::__construct();
          check_not_login();
        $this->load->model('Poliklinik_m');

    }


     function get_ajax() {
        $list = $this->Poliklinik_m->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $poli) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $poli->name;
            $row[] = $poli->gedung;
            // add html for action
            $row[] = '<a href="'.site_url('Poliklinik/edit/'.$poli->poli_id).'" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                    <a href="'.site_url('Poliklinik/delete/'.$poli->poli_id).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->Poliklinik_m->count_all(),
                    "recordsFiltered" => $this->Poliklinik_m->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }






    //batas


    public function index()
    {
         $data['row']= $this->Poliklinik_m->get();
         $this->template->load('Template', 'poliklinik/poliklinik_data', $data);
    }

    public function add()
    {
        $Poliklinik = new stdClass();
         $Poliklinik->poli_id = null;
           $Poliklinik->name = null;
             $Poliklinik->gedung = null;
             $data = array(
                           'page' => 'add',
                           'row' =>  $Poliklinik,
            
                         );
                     $this->template->load('Template', 'poliklinik/poliklinik_form', $data );
    }

    public function proses()
    {
       $post = $this->input->post(null, TRUE);
       if (isset($_POST['add'])) {
            $this->Poliklinik_m->add($post);
       }elseif (isset($_POST['edit'])) {
            $this->Poliklinik_m->edit($post);
       }if ($this->db->affected_rows() > 0) {
             $this->session->set_flashdata('messages','data berhasil di simpan!');
       }
            redirect('Poliklinik');
    }


    public function delete($id)
    {
        $this->Poliklinik_m->delete($id);
        if ($this->db->affected_rows() > 0) {
              $this->session->set_flashdata('messages','data berhasil di hapus!');
        }
           redirect('Poliklinik');
    }


    public function edit($id)
    {   
         $query = $this->Poliklinik_m->get($id);
           if ($query->num_rows() > 0 ) {
                $Poliklinik = $query->row();
                 $data = array(
                           'page' => 'edit',
                           'row' =>  $Poliklinik,
                         );
                         $this->template->load('Template', 'poliklinik/poliklinik_form', $data );
           }else {
                  $this->session->set_flashdata('messages','data tidak ada di database!');
                    redirect('Poliklinik');
             
           }
    }
}


?>