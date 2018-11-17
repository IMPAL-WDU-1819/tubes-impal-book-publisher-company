<?php defined('BASEPATH') or exit('No script allowed here');

class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin_m');
    }

    function index(){
        //cek apakah sudah ada login session
        //jika sudah maka langsung menuju admin panel
        if ($this->session->userdata('status')) {
            $this->load->view('admin/panel');
        } 
        
        //jika belum maka akan menuju halaman login
        else {
            $this->load->view('admin/login');
        }
    }

    function writer(){
        $this->load->view('admin/writer');
    }

    function editor(){
        $this->load->view('admin/editor');
    }

    function product(){
        $this->load->view('admin/product');
    }

    function insert_book(){
        $this->load->view('admin/insert_book');
    }

    function edit_book(){
        $this->load->view('admin/edit_book');
    }

    function aksi_login(){
        $data = $this->input->post(null,TRUE);
        // $where = array(
        //     'username' => $username,
        //     'password' => md5($password)
        // );
        // $cek = $this->login_model->cek_login("customer",$where)->num_rows();

        //Jika Username dan password ada di databasee
        if (($data['username'] == 'admin') && ($data['password'] == 'admin')) {
            $data_session = array(
                'nama' => $data['username'],
                'status' => "true"
            );
            $this->session->set_userdata($data_session);
        } 
        
        //Jika Username dan password field tidak diisi
        else  if (($data['username'] == NULL) && ($data['password'] == NULL)){
            $this->session->set_flashdata('login','allNull');
        } 
        
        //Jika username field tidak diisi
        else if ($data['username'] == NULL) {
            $this->session->set_flashdata('login','usernameNull');
        }

        //Jika password field tidak diisi
        else if ($data['password'] == NULL) {
            $this->session->set_flashdata('login','passwordNull');
        }
        
        //Jika username atau password tidak ada di database
        else {
            $this->session->set_flashdata('login','invalid');
        }

        redirect('admin');
    }

    function aksi_logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }

}