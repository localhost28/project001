<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MBasic extends CI_Model {
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function GetMenu()
     {
          $sql = "select menu.* from menu, privileges where menu.id_menu = privileges.id_menu and privileges.id_role = ".$this->session->userdata('role')."";
          $query = $this->db->query($sql);
          return $query->result_object();
     }
}
