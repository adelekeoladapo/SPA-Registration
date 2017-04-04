<?php

/**
 * Description of User
 *
 * @author DELL
 */
class User extends CI_Controller  {
    
    private $model;
            
    function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->model = new UserModel();
    }
    
    
    function registerUser(){
        
        $this->load->library('form_validation'); 
        
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        
        $this->form_validation->set_rules('fullname', 'full name', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone number', 'trim|required|is_unique[tb_user.phone]', array('is_unique' => 'This %s already exists'));
        $this->form_validation->set_rules('email', 'email address','trim|required|is_unique[tb_user.email]|valid_email',
            array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]|max_length[40]');
        $this->form_validation->set_rules('terms', 'terms & conditions', 'required', array('required' => 'You must agree to our terms'));
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('sign-up');
        }else{
            
            $user = new stdClass();
            $user->fullname = $this->input->post('fullname');
            $user->phone = $this->input->post('phone');
            $user->email = $this->input->post('email');
            $user->password = $this->encrypt->encode_password($this->input->post('password')); 
            $user->date_registered = $this->penguin->getTime();
            
            /** get referral **/
            $ref_email = $this->input->post('ref-email');
            if($ref_email)
                $referral = $this->model->getUserByEmail ($ref_email);
            if($referral)
                $user->ref_id = $referral->user_id;
            
            $id = $this->model->insertUser($user);
            
            redirect(base_url().'sign-in?ref_contr=reg_master');
        }
        
    }
    
    function doLogin(){
        $email = $this->input->post('email');
        $password = $this->encrypt->encode_password($this->input->post('password'));
        $user = $this->model->getUser_2($email, $password);

        if(!$user){
            $data['error'] = "Invalid email and/or password";
            $this->load->view('sign-in', $data);
        }else {
            $user_id = $user->user_id;
            $user_status = 1; //$this->model->getUserStatus($id);
            if($user_status == 1){
                $this->model->setSession($user_id);
                redirect(base_url().'admin');
            }else if($user_status == 2){
                echo 'Your account was deactivated, please contact the administrator';
            }else if($user_status == 0){
                echo 'Your account has not been activated. <br>Please check your email and follow the specified instruction.';
            }
        }
    }
    
    function logout(){
        session_destroy();
        redirect(base_url().'admin');
    }
    
    
    function getUser(){
        $id = $this->input->get('user-id');
        echo json_encode($this->model->getUser($id));
    }
    
    function updateUser(){
        $data = new stdClass();
        $data = json_decode(file_get_contents('php://input'));
        echo $this->model->updateUser($data);
    }
    
    function updateAccountDetails(){
        $data = new stdClass();
        $data = json_decode(file_get_contents('php://input'));
        $acc_no = $data->account_number;
        if($this->model->isRegisteredBankAccountNo($acc_no)){
            echo json_encode(array('status' => false, 'message' => 'This account number has been used.'));
        }else{
            $this->model->updateUser($data);
            echo json_encode(array('status' => true, 'message' => 'Account updated successfully.'));
        }
    }
    
    function updatePassword(){
        $data = new stdClass();
        $data = json_decode(file_get_contents('php://input'));
        $cur_pwd = $this->encrypt->encode_password($data->current_password);
        $new_password = $this->encrypt->encode_password($data->new_password);
        $user = $this->model->getUser($data->user_id);
        if($user->password != $cur_pwd){
            echo json_encode(array('status' => false, 'message' => 'Invalid password'));
        }else{
            $user->password = $new_password;
            $this->model->updateUser($user);
            echo json_encode(array('status' => true, 'message' => 'Password updated successfully'));
        }
    }
    
    function updateProfilePicture(){
        $data = new stdClass();
        
        $user_id = $this->input->post('user-id');
        
        /** Upload Logo **/
        $image = $this->upload->upload_image('photo');
        
        if($image->status){
            $data->photo = $image->message['file_name'];
            $data->user_id = $user_id;
            $d = $this->model->updateUser($data);
            echo json_encode(array('status' => true, 'message' => 'Picture updated successfully', 'data' => $this->model->getUser($user_id)));
        }else{
            if($image->message == '<p>You did not select a file to upload.</p>'){
                echo json_encode(array('status' => false, 'message' => 'You did not select a file to upload'));
            }else{
                echo json_encode(array('status' => false, 'message' => $image->message));
            }
        }
    }
    
    function getUsers(){
        $sort_field = $this->input->get('sort-field');
        $sort_order_mode = $this->input->get('sort-order-mode');
        $filter_field = $this->input->get('filter-field');
        $filter_value = $filter_value = $this->input->get('filter-value');
        $page = $this->input->get('page');
        $page_size = $this->input->get('page-size');
        echo json_encode($this->model->getUsers($sort_field, $sort_order_mode, $filter_field, $filter_value, $page, $page_size));
    }
    
    
    function insertDepositor(){
        $data = new stdClass();
        
        /** Upload Logo **/
        $image = $this->upload->upload_image('photo');
        if($image->status){
            $data->photo = $image->message['file_name'];
        }else{
            if($image->message == '<p>You did not select a file to upload.</p>'){
                
            }else{
                echo json_encode($image);
                return;
            }
        }
        
        $data->firstname = $this->input->post('firstname');
        $data->lastname = $this->input->post('lastname');
        $data->othernames = $this->input->post('othernames');
        $data->email = $this->input->post('email');
        $data->phone = $this->input->post('phone');
        $data->country_id = $this->input->post('country-id');
        $data->state_id = $this->input->post('state-id');
        $data->city = $this->input->post('city');
        $data->address = $this->input->post('address');
        $data->postcode = $this->input->post('post-code');
        $data->gender = $this->input->post('gender');
        $data->dob = $this->input->post('dob');
        $data->date_registered = $this->penguin->getTime(); 
        
        $this->model->insertDepositor($data);
        echo json_encode(array('status' => true, 'message' => 'Account has been created successfully'));
    }
    
    function getDepositors(){
        $sort_field = $this->input->get('sort-field');
        $sort_order_mode = $this->input->get('sort-order-mode');
        $filter_field = $this->input->get('filter-field');
        $filter_value = $filter_value = $this->input->get('filter-value');
        $page = $this->input->get('page');
        $page_size = $this->input->get('page-size');
        echo json_encode($this->model->getDepositors($sort_field, $sort_order_mode, $filter_field, $filter_value, $page, $page_size));
    }
    
    function getDepositor(){
        $id = $this->input->get('depositor-id');
        echo json_encode($this->model->getDepositor($id));
    }
    
}
