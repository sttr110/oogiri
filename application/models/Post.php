<?php
class Post extends CI_model {
  public function __construct() {
    parent::__construct();

    //DB接続
    $this->load->database();
  }

  public function getPost()
  {
    $query = $this->db->query("select * from posts");
    return $query->result();
  }
}
