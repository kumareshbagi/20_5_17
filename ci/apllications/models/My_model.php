<?php
class my_model extends CI_Model{
public function get_entry()
{
$data=array('NAME'=>'bagi','PASSWORD'=>'bagi');
$this->db->insert('ADMIN',$data);
}
}
?>