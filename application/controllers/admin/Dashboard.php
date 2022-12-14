<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_res', 'res');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['komen_us'] = $this->web->get_komen_us();
        $data['komen_id'] = $this->web->get_komen_id();
        $data['resource_us'] = $this->res->get_resource_us()->num_rows();
        $data['resource_id'] = $this->res->get_resource_id()->num_rows();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/layout/footer');
    }
}
