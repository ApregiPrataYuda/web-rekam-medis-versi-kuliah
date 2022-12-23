<?php


class Dokter_m extends CI_model
{
     public function get($id = null)
     {
            $this->db->from('tb_dokter');
            if ($id != null) {
                 $this->db->where('dokter_id', $id);
            }
             $query = $this->db->get();
                return $query;
     }

     public function add($post)
     {
            $params = [
                      'name' => $post['name'],
                       'spesialis' => $post['spesialis'],
                        'alamat' => $post['alamat'],
                         'no_telp' => $post['no_telp'],
                          'image' => $post['image'],
            ];
                  $this->db->insert('tb_dokter', $params);
     }

        public function delete($id)
        {
            $this->db->where('dokter_id', $id);
            $this->db->delete('tb_dokter');
        }





        public function edit($post)
     {
            $params = [
                      'name' => $post['name'],
                       'spesialis' => $post['spesialis'],
                        'alamat' => $post['alamat'],
                         'no_telp' => $post['no_telp'],
                         'updated' => date('Y-m-d H:i:s')
            ];
                if ($post['image'] != null) {
                      $params['image'] = $post['image'];
                }
                     $this->db->where('dokter_id', $post['id']);
                     $this->db->update('tb_dokter', $params);
     }

}









?>