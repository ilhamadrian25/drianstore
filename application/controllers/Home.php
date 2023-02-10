<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('frontend/home');
    }

    public function profile()
    {
        $this->form_validation->set_rules();

        $this->load->view('frontend/profile');
    }
}
