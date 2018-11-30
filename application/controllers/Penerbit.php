<?php defined('BASEPATH') or exit('No Script Allowed Here');

class Penerbit extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('book_m');
        
    }

    function index(){
        $data['book'] = $this->book_m->getAll_book();
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

        } else if ($data_form['username'] == NULL) {

        } else if ($data_form['password'] == NULL) {

        } else {

            $this->session->set_userdata($data_form)
        }
    }

}