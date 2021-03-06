<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ValidationController extends CI_Controller{

      public function __construct(){
          parent::__construct();
         $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->helper('url');
          $this->load->database();
          $this->load->helper('html');
          $this->load->model('Judge_Model');
      }
      public function index(){
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          $username = $this->input->post("username");
          $password = $this->input->post("password");

              if ($this->form_validation->run() == FALSE) {
                  if(isset($this->session->userdata['logged_in'])){
                      redirect("PosterController/index");
                  }
                  else{
                      $this->load->view('ValidationView/judgeLogin');
                  }
              }  else {

                      //check if username and password is correct
                      $usr_result = $this->Judge_Model->get_user($username, $password);
                      $id = $this->Judge_Model->get_user_id($username, $password);
                  if ($usr_result > 0){
                      //set the session variables
                      $sessiondata = array(
                          'login' => TRUE,
                          'JudgeName' => $username,
                          'uid' => $id);
                      $sessiondata = array($this->session->set_userdata('logged_in', $sessiondata));
                      //redirect("PosterController/MainMenu");
                      redirect("PosterController/index");


                  }
                  else{
                      redirect('ValidationController/index');
                    }
              }
          }
      public function AdminIndex(){
          if ($this->input->post('btn_loginJudge') == "Go to Judge's Login"){
              redirect('ValidationController/index');
          }

          $this->form_validation->set_rules('usernameA', 'Username', 'required');
          $this->form_validation->set_rules('passwordA', 'Password', 'required', array('required' => 'You must provide a %s.'));

          $usernameA = $this->input->post("usernameA");
          $passwordA = $this->input->post("passwordA");

          if ($this->form_validation->run() == FALSE){
            if(isset($this->session->userdata['logged_in'])){
              redirect("AdminController/index");
            }  else{
              $this->load->view('ValidationView/adminLogin');
            }
          }
          else{
                  //check if username and password is correct
                  $usr_result = $this->Judge_Model->get_Admin($usernameA, $passwordA);
                  $id = $this->Judge_Model->get_Admin_id($usernameA, $passwordA);
                  if ($usr_result > 0){
                      //set the session variables
                      $sessiondata = array('login' => TRUE,
                      'AdminName' => $usernameA,
                      'uid' => $id);
                      $sessiondata = array($this->session->set_userdata('logged_inA',$sessiondata));
                      redirect('AdminController/index');
                  }
                  else{
                      redirect('ValidationController/AdminIndex');
                  }
              }
      }
      //logout judge
      public function logout() {
        $this->session->unset_userdata(array("login"=>FALSE,"JudgeName"=>"","uid"=>""));
        $this->session->sess_destroy();
        redirect('ValidationController/index');
      }
      //logout admin
      public function logoutAdmin() {
        $this->session->unset_userdata(array("login"=>FALSE,"AdminName"=>"","uid"=>""));
        $this->session->sess_destroy();
        redirect('ValidationController/AdminIndex');
      }
}
