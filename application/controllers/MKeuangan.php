<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MKeuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('user_login') == false) {
            redirect('auth');
        }

        $this->load->model('admin/MKeuangan_model');
    }

    public function index()
    {
        $data['data'] = $this->MKeuangan_model->getData();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/menu');
        $this->load->view('admin/pages/MKeuangan_view', $data);
        $this->load->view('admin/templates/footer');
    }

    public function addCashIn()
    {
        if (!isset($_POST)) {
            show_404();
        }

        $this->MKeuangan_model->add('K');
        redirect('MKeuangan');
    }

    public function addCashOut()
    {
        if (!isset($_POST)) {
            show_404();
        }

        $this->MKeuangan_model->add('D');
        redirect('MKeuangan');
    }
}
