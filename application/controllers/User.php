<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
   
      public function __construct()
         {
                  parent::__construct();
               $this->load->library('form_validation');
         $this->load->model("CrudModel");
         }

public function index(){
   $records=$this->CrudModel->fetchAll("user");
   $data=array("users"=>$records);
   $this->load->view("view_users",$data);

}
   
   public function createUser(){
     $data=array("userId"=>""); //id is set to null
      if($this->input->post("submit")){
         $this->form_validation->set_rules("username","Username","required|valid_email|is_unique[user.username]");
         $this->form_validation->set_rules("fullname","Fullname","required|min_length[6]");
         $this->form_validation->set_rules("password","Password","required|min_length[6]");
         if($this->form_validation->run()){
         $username =$this->input->post("username");
         $fullname =$this->input->post("fullname");
         $password=$this->input->post("password");
         $user_array=array("username"=>$username,"password"=>$password,"fullname"=>$fullname);
         $id=$this->CrudModel->create("user",$user_array);
         $data["userId"]=$id;
         }
      }
      $this->load->view("create_user",$data);
      }

   public function removeUser(){
   if($this->input->get("userId")){
         $userId=$this->input->get("userId");
            $where_clause =array("id"=>$userId);
         $this->CrudModel->delete("user",$where_clause);
   }
   $records=$this->CrudModel->fetchAll("user");
   $data=array("users"=>$records);
   $this->load->view("remove_user",$data);

}

public function updateUser(){
   if($this->input->get("userId")){
            $userId=$this->input->get("userId");
   $where_clause =array("id"=>$userId);
         $record=$this->CrudModel->fetchOne("user",$where_clause);
         $data=array("record"=>$record);
         $this->load->view("create_user2",$data);
   }
   else{
   $records=$this->CrudModel->fetchAll("user");
   $data=array("users"=>$records);
   $this->load->view("update_user",$data);
   }
}
   public function updateuserrecord(){
      if($this->input->post("submit")){
         $username =$this->input->post("username");
         $fullname =$this->input->post("fullname");
         $password=$this->input->post("password");
         $id=$this->input->post("user_id");
         $user_array=array("username"=>$username,"password"=>$password,"fullname"=>$fullname);
       $where=array("id"=>$id);
       $id=$this->CrudModel->update("user",$user_array,$where);
       echo "Your record was successfully updated";
    }
    
  }



}

