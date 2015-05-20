<?php
class Forum_model extends CI_Model{
 
    function __construct()
    {
        parent::__construct();
    }
 
    function gets($table){
        $strQuery = "SELECT forum_id, host, title, context, poster, forum_date FROM ".$table;
 
        return $this->db->query($strQuery)->result();
    }

    function add($host, $title, $context, $poster, $forum_date, $day_night, $hour) {
        $this->db->set('post_date', 'NOW()', false);
        $this->db->insert('forum_schedule', array(
            'host'=>$host,
            'title'=>$title,
            'context'=>$context,
            'poster'=>$poster,
            'forum_date'=>$forum_date,
            'day_night'=>$day_night,
            'hour'=>$hour
        ));
        
        return $this->db->insert_id();
    }
 /*
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
 */
}
?>
