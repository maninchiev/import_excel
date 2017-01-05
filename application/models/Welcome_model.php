<?php
class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCSV($data)
            {
                $this->db->insert('import', $data);
                return TRUE;
            }



	public function view_data(){
        $query=$this->db->query("SELECT im.*
                                 FROM import im 
                                 ORDER BY im.id DESC
                                 limit 10");
        return $query->result_array();
    }

}