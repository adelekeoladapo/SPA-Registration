<?php

/**
 * 
 * Description of UserModel
 *
 */

class UserModel extends CI_Model {
    
    private $table_name = 'tb_user', $table_depositor = 'tb_depositor';
    
    function insertUser($data){
        $this->db->insert($this->table_name, $data);
        return $this->db->insert_id();
    }
    
    function getUsers($sort_field = false, $sort_order_mode = false, $filter_field = false, $filter_value = false, $page = false, $page_size = false){ 
        $this->db->select('*');
        $this->db->order_by($sort_field, $sort_order_mode);
        ($filter_value) ? $this->db->where($filter_field, $filter_value) : '';
        ($page) ? $this->db->limit($page_size, $page) : $this->db->limit($page_size);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? $query->result() : [];
    }
    
    function getUser($id){
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? $query->row() : null;
    }
    
    function getUserByEmail($email){
        $this->db->select('*');
        $this->db->where('email', $email);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? $query->row() : null;
    }
    
    function getUser_2($email, $password){
        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? $query->row() : false;
    }
    
    function setSession($userID){
        $user = $this->getUser($userID);
        $data = array(
                'user_id' => $user->user_id,
                'logged_in' => TRUE
        );
        $this->session->set_userdata($data);
    }
    
    function updateUser($user){
        $this->db->where('user_id', $user->user_id);
        $this->db->update($this->table_name, $user);
    }
    
    function isRegisteredBankAccountNo($acc_no){
        $this->db->where('account_number', $acc_no);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? true : false;
    }
    
    function debitUserAccount($user_id, $amount){
        $this->db->set('balance', 'balance-'.$amount, FALSE);
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table_name);
    }
    
    function creditUserAccount($user_id, $amount){
        $this->db->set('balance', 'balance+'.$amount, FALSE);
        $this->db->where('user_id', $user_id);
        $this->db->update($this->table_name);
    }
    
    function getUserCurrentBalance($user_id){
        $this->db->select('balance');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get($this->table_name);
        return ($query->num_rows()) ? $query->row()->balance : null;
    }
    
    /** Depositor **/
    function insertDepositor($data){
        $this->db->insert($this->table_depositor, $data);
        return $this->db->insert_id();
    }
    
    function getDepositors($sort_field = false, $sort_order_mode = false, $filter_field = false, $filter_value = false, $page = false, $page_size = false){ 
        $this->db->select('*');
        $this->db->order_by($sort_field, $sort_order_mode);
        ($filter_value) ? $this->db->where($filter_field, $filter_value) : '';
        ($page) ? $this->db->limit($page_size, $page) : $this->db->limit($page_size);
        $query = $this->db->get($this->table_depositor);
        return ($query->num_rows()) ? $query->result() : [];
    }
    
    function getDepositor($id){
        $this->db->select('*');
        $this->db->where('depositor_id', $id);
        $query = $this->db->get($this->table_depositor);
        return ($query->num_rows()) ? $query->row() : null;
    }
    
}
