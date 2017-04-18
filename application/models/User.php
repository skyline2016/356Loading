<?php

class User extends MY_Model {

  function __construct()
    {
        parent::__construct();
    }

  //Login
  function login($para){
    $this->read_db->select('*');
    $this->read_db->from('user');
    $this->read_db->where("(username='".$para['account']."'AND password='".$para['password']."')");

    $query = $this->read_db->get();

    if($query->num_rows() > 1)
    {
      return 'error';
    }
    if($query->num_rows() == 1)
    {
      return TRUE;
    }
    if($query->num_rows() < 1)
    {
      return FALSE;
    }
  }

  //register
  function register($para){
    $array = array(
					'table' => 'user',
					'data' => $para,
				);
		return $this->addData($array);
  }
}
