
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_m extends CI_model {

	public function get($id = null)
	{
             $this->db->from('tb_pasien');
             if ($id != null) {
                 $this->db->where('pasien_id', $id);
             }
             $query = $this->db->get();
             return $query;
               
    }
    

    public function add($post)
    {
          $params = [
                    'no_identitas' => $post['no_identitas'],
                      'name' => $post['name'],
                        'jenis_kelamin' => $post['jenis_kelamin'],
                          'address' => $post['address'],
                            'no_telp' => $post['no_telp'],
                             'image' => $post['image'],
          ];
           $this->db->insert('tb_pasien', $params);
    }


    public function delete($id)
    {
       $this->db->where('pasien_id', $id);
       $this->db->delete('tb_pasien');
    }



public function edit($post)
    {
          $params = [
                    'no_identitas' => $post['no_identitas'],
                      'name' => $post['name'],
                        'jenis_kelamin' => $post['jenis_kelamin'],
                          'address' => $post['address'],
                            'no_telp' => $post['no_telp'],
                            'updated' => date('Y-m-d H-i-s'),
          ];
           

           if ($post['image'] != null) {
              $params['image'] = $post['image'];
           }
           $this->db->where('pasien_id', $post['id']);
           $this->db->update('tb_pasien', $params);
    }


}
