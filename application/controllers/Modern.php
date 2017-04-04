<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modern extends CI_Controller {
    
    private $user_model;
    
    function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->user_model = new UserModel();
    }
    
    function index(){
        $this->load->view('register');
    }

    public function admin(){
        $is_logged_in = $this->session->userdata('logged_in');
        if(!$is_logged_in){
            $this->show_sign_in_page();
        }else{
            $data['user_id'] = $this->session->userdata('user_id');
            $this->load->view('home', $data);
        }
    }
    
    function show_sign_in_page(){
        $data['error'] = false;
        $this->load->view('sign-in', $data);
    }
    
    function show_depositor_register_page(){
        $this->load->view('register');
    }
    
    function initApp(){
        $user_id = $this->input->get('filter-value');
        
        $sort_field = $this->input->get('sort-field');
        $sort_order_mode = $this->input->get('sort-order-mode');
        $filter_field = $this->input->get('filter-field');
        $school_id = $filter_value = $this->input->get('filter-value');
        $page = $this->input->get('page');
        $page_size = $this->input->get('page-size');
        
        $data = new ArrayObject();
        $data['user'] = $this->user_model->getUser($user_id);
        echo json_encode($data);
    }
        
}
