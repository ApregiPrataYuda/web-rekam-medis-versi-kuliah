<?php
class Rekam_medis_m extends CI_model {

	public function get($id = null)
	{
        $this->db->select('tb_rekam_medis.*,tb_dokter.name as dokter_name,tb_pasien.name as pasien_name,tb_poliklinik.name as poli_name,tb_obat.name as obat_name');
       $this->db->from('tb_rekam_medis');
       $this->db->join('tb_dokter','tb_dokter.dokter_id = tb_rekam_medis.dokter_id');
       $this->db->join('tb_pasien','tb_pasien.pasien_id = tb_rekam_medis.pasien_id');
       $this->db->join('tb_poliklinik','tb_poliklinik.poli_id = tb_rekam_medis.poli_id');
       $this->db->join('tb_obat','tb_obat.obat_id = tb_rekam_medis.obat_id');
       if ($id != null) {
          $this->db->where('rm_id', $id);
       }

        $this->db->order_by('kode_rekam','asc');
        $query = $this->db->get(); 
        return $query;
		
   }
   

   public function add($post)
   {
       $params =[
             'kode_rekam' => $post['kode_rekam'],
             'pasien_id' => $post['pasien_id'],
             'dokter_id' => $post['dokter_id'],
             'keluhan' => $post['keluhan'],
             'diagnosa' => $post['diagnosa'],
             'poli_id' => $post['poli_id'],
             'obat_id' => $post['obat_id'],
             'tanggal_periksa' => $post['tanggal_periksa'],
       ];
        $this->db->insert('tb_rekam_medis', $params);
   }

    public function delete($id)
    {
       $this->db->where('rm_id', $id);
       $this->db->delete('tb_rekam_medis');
    }


   
   
}
