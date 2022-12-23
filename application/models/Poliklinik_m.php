<?php

class Poliklinik_m extends CI_model
{


   // start datatables
    var $column_order = array(null, 'name', 'gedung'); //set column field database for datatable orderable
    var $column_search = array('name', 'gedung'); //set column field database for datatable searchable
    var $order = array('poli_id' => 'asc'); // default order 
 
    private function _get_datatables_query() {
        $this->db->from('tb_poliklinik');
        $i = 0;
        foreach ($this->column_search as $poli) { // loop column 
            if(@$_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($poli, $_POST['search']['value']);
                } else {
                    $this->db->or_like($poli, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }  else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all() {
        $this->db->from('tb_poliklinik');
        return $this->db->count_all_results();
    }
    // end datatables






    //batas

    public function get($id = null)
    {
        $this->db->from('tb_poliklinik');
         if ($id != null) {
            $this->db->where('poli_id', $id);
         }
          $query = $this->db->get();
            return  $query;
    }

    public function add($post)
    {
       $params =[
               'name' => $post['name'],
                'gedung' => $post['gedung'],
       ];
        $this->db->insert('tb_poliklinik', $params);
    }


    public function delete($id)
    {
         $this->db->where('poli_id', $id);
           $this->db->delete('tb_poliklinik');
    }


     public function edit($post)
    {
       $params =[
               'name' => $post['name'],
                'gedung' => $post['gedung'],
                 'updated' => date('Y-m-d H-i-s'),

       ];  
        $this->db->where('poli_id', $post['id']);
        $this->db->update('tb_poliklinik', $params);
    }


}
