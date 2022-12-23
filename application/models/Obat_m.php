<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_model {

	public function get($id = null)
	{
           $this->db->from('tb_obat');
            if ($id != null) {
                $this->db->where('obat_id', $id);
            }
              $query = $this->db->get();
               return $query;
    }


public function add($post)
{
       $params = [
                  'name' => $post['name'],
                   'keterangan' => $post['keterangan'],
       ];
          $this->db->insert('tb_obat',$params);
}

 public function delete($id)
 {
     $this->db->where('obat_id', $id);
      $this->db->delete('tb_obat');
 }


 public function edit($post)
 {
    $params = [
                  'name' => $post['name'],
                   'keterangan' => $post['keterangan'],
                   'updated' => date('Y-m-d H-i-s'),
       ];
            $this->db->where('obat_id', $post['id']);
          $this->db->update('tb_obat',$params);
 }
}
