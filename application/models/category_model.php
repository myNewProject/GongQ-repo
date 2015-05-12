<?php
class Category_model extends CI_Model{
 
    function __construct()
    {
        parent::__construct();
    }
 
    function gets(){
        $strQuery = "SELECT * FROM test";
 
        return $this->db->query($strQuery)->result();
    }
 
    function get1($seq){
        $strQuery = "SELECT * FROM test where seq = " . $seq;
 
        return $this->db->query($strQuery)->result();
    }
 
    function get2($seq){ 
		$this->db->select('seq');
		$this->db->select('title');
		$this->db->select('UNIX_TIMESTAMP(regdate) AS created');
        return $this->db->get_where('test',array('seq'=>$seq))->row();
    }
	
	function add($title, $description) {
		$this->db->set('regdate', 'NOW()', false);
		$this->db->insert('test', array(
			'title'=>$title,
			'contents'=>$description
		));
		
		return $this->db->insert_id();
	}
 
}
?>
