<?php

class Obat extends CI_controller
{
     function __construct()
    {
       parent::__construct();
         check_not_login();
        $this->load->model('Obat_m');
    }

    public function index()
    {
         $data['row'] = $this->Obat_m->get();
        $this->template->load('Template','obat/data_obat',$data);
    }


 public function delete($id)
 {
    $this->Obat_m->delete($id); 
       if ($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('messages','data berhasil di hapus');
       }

      redirect('Obat');
 }



    public function add()
    {
          $Obat = new stdclass();
          $Obat->obat_id = null;
            $Obat->name = null;
              $Obat->keterangan = null;
              $data = array( 
                           'page' => 'add',
                           'row' => $Obat,
            
            );
               $this->template->load('Template','obat/data_form',$data);
    }


   public function proses()
   {
       $post = $this->input->post(null, TRUE);
       if (isset($_POST['add'])) {
               $this->Obat_m->add($post);
       }elseif (isset($_POST['edit'])) {
              $this->Obat_m->edit($post);
       }if ($this->db->affected_rows() > 0 ) {
            $this->session->set_flashdata('messages','data berhasil disimpan');
       }
       redirect('Obat');
       
   }


   public function edit($id)
   {
       $query =  $this->Obat_m->get($id);
        if ($query->num_rows() > 0) {
            $Obat =  $query->row();
             $data = array( 
                           'page' => 'edit',
                           'row' => $Obat,
            
            );
               $this->template->load('Template','obat/data_form',$data);
        }else {
                $this->session->set_flashdata('messages','data tidak di temukan di data base');
                redirect('Obat/edit');
        }
   }
}




?>