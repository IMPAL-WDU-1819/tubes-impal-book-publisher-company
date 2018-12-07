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
        redirect(penerbit);
    }

    function logout(){
        $this->session->unset_userdata('user');
        redirect(penerbit);
    }

}