<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function getUser()
    {
        $this->load->view('welcome_message');
    }
}
