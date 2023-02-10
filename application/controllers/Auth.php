<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $data = [
            'view'  =>  'frontend/login'
        ];

        $this->load->view('frontend/layouts/Main', $data);
    }
    public function register()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[confPassword]');
        $this->form_validation->set_rules('confPassword', 'Konfirmasi password', 'required|trim');

        $data = [
            'view'  =>  'frontend/register',
            'title' =>  'DrianStore'
        ];

        
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('frontend/layouts/Main', $data);

        } else {

            $data = [
                'name'      =>      $this->input->post('name'),
                'username'      =>      $this->input->post('username'),
                'email'      =>      $this->input->post('email'),
                'password'      =>      $this->input->post('password'),
            ];

            $this->AuthModel->register($data);
        }
        
    }
}
