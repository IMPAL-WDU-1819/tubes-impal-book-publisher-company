<?php defined('BASEPATH') or exit('No Script Allowed Here');

class Penerbit extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('book_model');
        $this->load->model('account_model');
    }

    function index(){
        $data['book'] = $this->book_model->get_book();
        $this->load->view('home',$data);
    }

    function register(){
        $this->load->view('signup');
    }

    function promo(){
        $this->load->view('promo');
    }

    function featured(){
        $this->load->view('featured');
    }

    function login(){
        $data_form = $this->input->post(null,TRUE);
        if (($data_form['username'] == NULL) and ($data_form['password'] == NULL)) {
            $this->session->set_flashdata('login_customer','allNull');
        } else if ($data_form['username'] == NULL) {
            $this->session->set_flashdata('login_customer','usernameNull');
        } else if ($data_form['password'] == NULL) {
            $this->session->set_flashdata('login_customer','passwordNull');
        } else {
            $user = $this->account_model->get_account_customer($data_form);
            if ($user == NULL){
                $this->session->set_flashdata('login','invalid');
            } else {
                $this->session->set_flashdata('login','valid');
                $this->session->set_userdata('user', $user[0]);
            }
        }
        redirect();
    }

    function signup(){
        $data_form = $this->input->post(null,TRUE);
        $null = 0;

        //cek apakah ada field yang kosong
        if ($data_form['sUsername'] == NULL) {
            $this->session->set_flashdata('susername', 'null');
            $null = $null + 1;
        } 
        if ($data_form['sName'] == NULL) {
            $this->session->set_flashdata('sname', 'null');
            $null = $null + 1;
        } 
        if ($data_form['sPassword'] == NULL) {
            $this->session->set_flashdata('spassword', 'null');
            $null = $null + 1;
        } 

        //jika field sudah terisi semua, dicek apakah username sudah ada dalam database
        if ($null == 0) {
            $check_user = array(
                'username' => $data_form['sUsername'],
                'password' => $data_form['sPassword']
            );
            
            $user = $this->account_model->get_account_customer($check_user);

            if ($user == NULL) {
                $user = array(
                    'nama_customer' => $data_form['sName'],
                    'username' => $data_form['sUsername'],
                    'password' => $data_form['sPassword']
                );
                $this->account_model->insert_account($user);
                $this->session->set_flashdata('signup', 'valid');

                $check_user = array(
                    'username' => $data_form['sUsername'],
                    'password' => $data_form['sPassword']
                );

                $user = $this->account_model->get_account_customer($check_user);
                $this->session->set_flashdata('login', 'valid');
                $this->session->set_userdata('user', $user[0]);
            } else {
                $this->session->set_flashdata('signup', 'invalid');
            }
        }
        redirect();
    }

    function logout(){
        $this->session->unset_userdata('user');
        redirect();
    }

}