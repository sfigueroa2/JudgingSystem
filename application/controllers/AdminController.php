<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminController extends CI_Controller{

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
         if (isset($this->session->userdata['logged_inA'])) {
           $data['numPosters'] = $this->Judge_Model->numberOfPosters();
           $data['numJudges'] = $this->Judge_Model->numberOfjudges();
           $data['session'] = $this->Judge_Model->session_display();
           $this->load->view('Templates/adminHeader_loggedin',$data);
           $this->load->view('AdminView/adminMenu');
         }
      }
      public function ManageAdmin(){
        $data['numPosters'] = $this->Judge_Model->numberOfPosters();
        $data['numJudges'] = $this->Judge_Model->numberOfjudges();
        $data['session'] = $this->Judge_Model->session_display();
        $this->load->view('Templates/adminHeader_loggedin',$data);
        $this->load->view('AdminView/ManageAdmin/manageAdmin');
      }
      public function ManageJudges(){
        $data['numPosters'] = $this->Judge_Model->numberOfPosters();
        $data['numJudges'] = $this->Judge_Model->numberOfjudges();
        $data['session'] = $this->Judge_Model->session_display();
        $this->load->view('Templates/adminHeader_loggedin',$data);
        $this->CreateJudge();
        $this->load->view('AdminView/ManageJudge/manageJudges');
      }
      //SESSIONS
      public function SetSession(){
        $data['numPosters'] = $this->Judge_Model->numberOfPosters();
        $data['numJudges'] = $this->Judge_Model->numberOfjudges();
        $data['session'] = $this->Judge_Model->session_display();
        $this->load->view('Templates/adminHeader_loggedin',$data);
        $this->load->view('AdminView/session');
        if($id= $this->input->post('session')){
        $this->Judge_Model->set_session($id);
        redirect('AdminController/SetSession');
      }
      }
      //VIEW JUDGE LIST
      public function JudgeList(){
         $this->data['Judges'] = $this->Judge_Model->getJudges();
         $data['numPosters'] = $this->Judge_Model->numberOfPosters();
         $data['numJudges'] = $this->Judge_Model->numberOfjudges();
         $data['session'] = $this->Judge_Model->session_display();
         $this->load->view('Templates/adminHeader_loggedin',$data);
         $this->load->view('AdminView/ManageJudge/judgeList', $this->data);
     }
      //VIEW POSTERS
      public function PosterList(){
          $this->data['Posters'] = $this->Judge_Model->getAllPosters();
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->load->view('AdminView/ManagePoster/posterList', $this->data);
      }
      public function ManagePoster(){
        $data['numPosters'] = $this->Judge_Model->numberOfPosters();
        $data['numJudges'] = $this->Judge_Model->numberOfjudges();
        $data['session'] = $this->Judge_Model->session_display();
        $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->load->view('AdminView/ManagePoster/managePoster');
      }
      //VIEW POSTERS
      public function AdminList(){
        $data['numPosters'] = $this->Judge_Model->numberOfPosters();
        $data['numJudges'] = $this->Judge_Model->numberOfjudges();
        $data['session'] = $this->Judge_Model->session_display();
        $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->data['Admins'] = $this->Judge_Model->getAdmin();
          $this->load->view('AdminView/ManageAdmin/adminList', $this->data);
      }
        //CREATE NEW JUDGE
      public function CreateJudge(){
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('jname', 'User Name', 'required');
        $this->form_validation->set_rules('jpass', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
              $data['numPosters'] = $this->Judge_Model->numberOfPosters();
              $data['numJudges'] = $this->Judge_Model->numberOfjudges();
              $data['session'] = $this->Judge_Model->session_display();
              $this->load->view('Templates/adminHeader_loggedin',$data);
              $this->load->view('AdminView/ManageJudge/CreateJudge');
            } else {
                //Setting values for tabel columns
                $data = array(
                'JudgeName' => $this->input->post('jname'),
                'JudgePass' => $this->input->post('jpass'),
                'JFirst' => $this->input->post('jfirst'),
                'JLast' => $this->input->post('jlast'),

                );
                $this->Judge_Model->insertJudge($data); //Transfering data to Model
                $data['numPosters'] = $this->Judge_Model->numberOfPosters();
                $data['numJudges'] = $this->Judge_Model->numberOfjudges();
                $data['session'] = $this->Judge_Model->session_display();
                $this->load->view('Templates/adminHeader_loggedin',$data);
                $this->load->view('AdminView/ManageJudge/CreateJudge');
            }
        }
        public function CreateAdmin(){
            //Validating Fields
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('aname', 'Admin Name', 'required');
            $this->form_validation->set_rules('apass', 'Admin Pass', 'required');

            if ($this->form_validation->run() == FALSE) {
              $data['numPosters'] = $this->Judge_Model->numberOfPosters();
              $data['numJudges'] = $this->Judge_Model->numberOfjudges();
              $data['session'] = $this->Judge_Model->session_display();
              $this->load->view('Templates/adminHeader_loggedin',$data);
                $this->load->view('AdminView/ManageAdmin/CreateAdmin');
            } else {
                //Setting values for tabel columns
                $data = array(
                'AdminName' => $this->input->post('aname'),
                'AdminPass' => $this->input->post('apass'),
                );
                $this->Judge_Model->insertAdmin($data); //Transfering data to Model
                $data['message'] = 'Data Inserted Successfully';
                $data['numPosters'] = $this->Judge_Model->numberOfPosters();
                $data['numJudges'] = $this->Judge_Model->numberOfjudges();
                $data['session'] = $this->Judge_Model->session_display();
                $this->load->view('Templates/adminHeader_loggedin',$data);
                $this->load->view('AdminView/ManageAdmin/CreateAdmin', $data);
            }
        }
        public function CreatePoster(){
            //Validating Fields
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_rules('did', 'Poster #', 'required');
            $this->form_validation->set_rules('dsid', 'Session', 'required');
            $this->form_validation->set_rules('dnid', 'Submission #', 'required');
            $this->form_validation->set_rules('djcategory', 'Judge Category', 'required');
            $this->form_validation->set_rules('dtitle', 'Poster Title', 'required');
            $this->form_validation->set_rules('dfirst', 'Presenter First Name', 'required');
            $this->form_validation->set_rules('dlast', 'Presenter Last Name', 'required');
            $this->form_validation->set_rules('demail', 'Presenter Email', 'required');
            $this->form_validation->set_rules('dmentor', 'Mentor Full Name', 'required');
            $this->form_validation->set_rules('dmemail', 'Mentor Email', 'required');

            if ($this->form_validation->run() == FALSE) {
              $data['numPosters'] = $this->Judge_Model->numberOfPosters();
              $data['numJudges'] = $this->Judge_Model->numberOfjudges();
              $data['session'] = $this->Judge_Model->session_display();
              $this->load->view('Templates/adminHeader_loggedin',$data);
              $this->load->view('AdminView/ManagePoster/createPoster');
            } else {
                $this->Judge_Model->insertPoster(); //Transfering data to Model
                $data['message'] = 'Data Inserted Successfully';
                $data['numPosters'] = $this->Judge_Model->numberOfPosters();
                $data['numJudges'] = $this->Judge_Model->numberOfjudges();
                $data['session'] = $this->Judge_Model->session_display();
                $this->load->view('Templates/adminHeader_loggedin',$data);
                $this->load->view('AdminView/ManagePoster/createPoster', $data);
            }
        }
        function DeleteAdmin() {
            $id = $this->uri->segment(3);
            $this->Judge_Model->removeAdmin($id);
            $this->showAdminName();
        }
        function showAdminName() {
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $id = $this->uri->segment(3);
            $data['Admins'] = $this->Judge_Model->showAdmins();
            $data['single_Admin'] = $this->Judge_Model->showAdminName($id);
            $this->load->view('AdminView/ManageAdmin/deleteAdmin', $data);

        }
        function showAdminNameU() {
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $id = $this->uri->segment(3);
            $data['Admins'] = $this->Judge_Model->showAdmins();
            $data['single_Admin'] = $this->Judge_Model->showAdminName($id);
            $this->load->view('AdminView/ManageAdmin/updateAdmin', $data);

        }
        function UpdateAdmin() {
            $id= $this->input->post('did');
            $data = array(
                'AdminName' => $this->input->post('aname'),
                'AdminPass' => $this->input->post('apass'),
            );
            $this->Judge_Model->updateAdmin($id,$data);
            $this->showAdminNameU();
        }
        function DeleteJudge() {
            $id = $this->uri->segment(3);
            $this->Judge_Model->removeJudge($id);
            $this->showJudgeName();
        }
        function showJudgeName() {
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $id = $this->uri->segment(3);
            $data['Judges'] = $this->Judge_Model->showJudges();
            $data['single_Judge'] = $this->Judge_Model->showJudgeName($id);
            $this->load->view('AdminView/ManageJudge/deleteJudge', $data);
        }
        function showJudgeNameU() {
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $id = $this->uri->segment(3);
            $data['Judges'] = $this->Judge_Model->showJudges();
            $data['single_Judge'] = $this->Judge_Model->showJudgeName($id);
            $this->load->view('AdminView/ManageJudge/updateJudge', $data);
        }
        function UpdateJudge() {
            $id= $this->input->post('jname');
            $data = array(
                'JudgeName' => $this->input->post('jname'),
                'JudgePass' => $this->input->post('jpass'),
                'JFirst' => $this->input->post('jfirst'),
                'JLast' => $this->input->post('jlast'),
            );
            $this->Judge_Model->updateJudge($id,$data);
            $this->showJudgeNameU();
        }
        function DeletePoster(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->load->view('AdminView/ManagePoster/deletePoster');
          if ($this->input->post('snumber')) {
                $pnumber = $this->input->post('pnumber');
                $data['poster'] = $this->Judge_Model->searchByPosterId($pnumber);
                $this->load->view('AdminView/ManagePoster/deletePosterHelper',$data);
          }
          if ($this->input->post('semail')) {
              $pemail = $this->input->post('pemail');
              $data['poster'] = $this->Judge_Model->searchByEmail($pemail);
              $this->load->view('AdminView/ManagePoster/deletePosterHelper',$data);
            }
        }
        function DeletePosterHelper($PosterID = NULL){
          $split = explode("-",$PosterID);
          $data['PosterID'] =isset($split[0]) ? $split[0]: NULL;
          $data['SessionID'] = isset($split[1]) ? $split[1]: NULL;
            $PosterID = $this->uri->segment(3);
            $this->Judge_Model->removePoster($data['PosterID'], $data['SessionID']);
            $this->DeletePoster();
        }
        function ModifyPosterHelper() {
            $id= $this->input->post('pid');
            //print_r($id);
            $this->Judge_Model->modifyPoster($id);
            $this->ModifyPoster();
        }
        function ModifyPoster(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->load->view('AdminView/ManagePoster/modifyPoster');
            if ($this->input->post('snumber')) {
                  $pnumber = $this->input->post('pnumber');
                  $data['poster'] = $this->Judge_Model->searchByPosterId($pnumber);
                  $this->load->view('AdminView/ManagePoster/modifyPosterHelper',$data);
            }
            if ($this->input->post('semail')) {
                $pemail = $this->input->post('pemail');
                $data['poster'] = $this->Judge_Model->searchByEmail($pemail);
                $this->load->view('AdminView/ManagePoster/modifyPosterHelper',$data);
              }
        }
        function DeleteTables(){
         if (isset($_POST['yes'])) {
                $this->Judge_Model->deleteTables();
                redirect('AdminController/index');
        }
        }
        function ManageArchive(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);
          $this->load->view('AdminView/ManageArchive/archiveMenu');

        }
        function RawScores(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $data['rawscores'] = $this->Judge_Model->exportRawScores();
            $this->load->view('AdminView/ManageArchive/rawScores',$data);
        }
        function JudgeScoreTimes(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $data['judgetimes'] = $this->Judge_Model->judgeScoreTimes();
            $this->load->view('AdminView/ManageArchive/judgeScoreTimes',$data);
        }
        function FinalScores(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $this->load->view('Templates/adminHeader_loggedin',$data);

            $data['finalscores'] = $this->Judge_Model->finalScores();
            $this->load->view('AdminView/ManageArchive/finalScores',$data);

        }
        function PostersToJudge(){
          $data['numPosters'] = $this->Judge_Model->numberOfPosters();
          $data['numJudges'] = $this->Judge_Model->numberOfjudges();
          $data['session'] = $this->Judge_Model->session_display();
          $SessionID = $data['session'][0]['Session'];
          $this->load->view('Templates/adminHeader_loggedin',$data);

          $data['judgedzero'] = $this->Judge_Model->judged_zeroTimes($SessionID);
          $data['judgedonce'] = $this->Judge_Model->judged_oneTimes($SessionID);
          $data['judgedtwice'] = $this->Judge_Model->judged_twoTimes($SessionID);
          $this->load->view('AdminView/ManagePoster/postersToJudge',$data);
        }
        function importPostersHelper(){
          $fileName = $_FILES["file"]["tmp_name"];
          $flag = true;
          if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
              if($flag){
                $flag = false;
                continue;
              }
              $data = array(
                'ID' => $column[0],
                'idNumber' => $column[1],
                'PosterID' => $column[2],
                'SessionID' => $column[3],
                'Title' => $column[4],
                'SFirst' => $column[5],
                'SLast' => $column[6],
                'Semail' => $column[7],
                'Mentor' => $column[8],
                'Memail' => $column[9],
                'JudgingCategory' => $column[10],
                'Term' => $column[11],
              );
              $data2 = array(
                'ID' => $column[0],
                'PosterID' => $column[2],
                'SessionID' => $column[3],
                'jcount' => 0
              );
              $this->db->insert('PosterA', $data);
              $this->db->insert('timesJudged', $data2);
            }
          }
        }
        function importJudgesHelper(){
          $flag = true;
          $fileName = $_FILES["file"]["tmp_name"];
          if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                if($flag){
                  $flag = false;
                  continue;
                }
              $data = array(
                'JudgeID' => $column[0],
                'JudgeName' => $column[1],
                'JudgePass' => $column[2],
                'JFirst' => $column[3],
                'JLast' => $column[4],
              );
              $this->db->insert('Judge', $data);
            }
          }
          redirect('AdminController/index');

        }
}
