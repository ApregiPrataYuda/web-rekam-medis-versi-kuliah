<?php

class Rekam_medis extends CI_controller
{
    function __construct()
    {
        parent::__construct();
         check_not_login();
        $this->load->model(['Rekam_medis_m','Poliklinik_m','Dokter_m','Pasien_m','Obat_m']);
    }



    public function index()
    { 
        $data['row'] = $this->Rekam_medis_m->get();
        $this->template->load('Template', 'rekam_medis/data_rekam',$data);
    }


    public function add()
    {

        $Rekam_medis = new stdClass();
        $Rekam_medis->rm_id = null;
        $Rekam_medis->kode_rekam = null;
        $Rekam_medis->pasien_id = null;
        $Rekam_medis->dokter_id = null;
        $Rekam_medis->keluhan = null;
        $Rekam_medis->diagnosa = null;
        $Rekam_medis->poli_id = null;
        $Rekam_medis->obat_id = null;
        $Rekam_medis->tanggal_periksa = null;

        $Poliklinik = $this->Poliklinik_m->get();
        $Dokter = $this->Dokter_m->get();
        $Pasien = $this->Pasien_m->get();
        $Obat = $this->Obat_m->get();
        $data = array(
                       'page' => 'add',
                       'row' => $Rekam_medis,
                       'Poliklinik' => $Poliklinik,
                       'Dokter' => $Dokter,
                       'Pasien' => $Pasien,
                       'Obat' => $Obat,
                   );
                $this->template->load('Template', 'rekam_medis/form_rekam', $data);
    }


    public function proses()
    {
         $post =   $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                 $this->Rekam_medis_m->add($post);
            }elseif (isset($_POST['edit'])) {
                $this->Rekam_medis_m->edit($post);
            } if ($this->db->affected_rows() > 0 ) {
               $this->session->set_flashdata('messages','data berhasil di simpan!');
            }
            redirect('Rekam_medis');
    }



    public function delete($id)
    {
       $this->Rekam_medis_m->delete($id);
       if ($this->db->affected_rows() > 0) {
             $this->session->set_flashdata('messages','data berhasil di hapus!');
       }
          redirect('Rekam_medis');
    }

    public function barcode_qrcode($id)
    {
         $data['row'] = $this->Rekam_medis_m->get($id)->row();
        $this->template->load('Template', 'rekam_medis/barcode_qrcode',$data);
    }

    public function print_data($id)
    {
        $data['row'] = $this->Rekam_medis_m->get($id)->row();
         $html = $this->load->view('Rekam_medis/print_data', $data, true);
         $this->fungsi->Pdf_generator($html,'data-'.$data['row']->kode_rekam,'A4','landscape');
    }


    
    public function print_qrcode($id)
    {
        $data['row'] = $this->Rekam_medis_m->get($id)->row();
         $html = $this->load->view('Rekam_medis/print_qrcode', $data, true);
         $this->fungsi->Pdf_generator($html,'qr-'.$data['row']->kode_rekam,'A4','potrait');
    }
 
}





















?>