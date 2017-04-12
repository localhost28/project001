<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MLogin extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function GetUser($usr, $pwd)
     {
          $sql = "select id_user, username, id_role from user where username = '$usr' and password = '$pwd'";
          $query = $this->db->query($sql);
          return $query->row();
     }
}?>
