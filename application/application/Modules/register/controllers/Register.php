<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : Auth.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 8:31:02 am
 * | Last Modified   : Thursday, 12th March 2020 8:33:33 am
 * |==============================================================|
 */

class Register extends CI_Controller{

  function __construct(){
    parent::__construct();		
    $this->load->model('Auth_model');

}
    function index(){
      $this->load->view('register_view');
    }

    function check_register()
    {
     
        $this->Auth_model->reg();
        $pesan['message'] = "Pendaftaran berhasil";
       
        
        redirect(base_url("login"),$pesan);
      }
    }
  
