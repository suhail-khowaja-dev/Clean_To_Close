<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signup_cleaner extends MY_Controller
{


    public $_list_data = array();

    public function __construct()
    {

        global $config;


        parent::__construct();
        //$this->dt_params['dt_headings'] = "signup_id, signup_firstname, signup_lastname, signup_email, signup_status";
        $this->dt_params['dt_headings'] = "signup_id, signup_name, signup_lastname,signup_email, signup_contact,signup_zip,signup_createdon, signup_job_opportunities,signup_status";
        $this->dt_params['searchable'] = array("signup_id", "signup_type", "signup_name", "signup_lastname","signup_zip","signup_job_opportunities","signup_status");
        $this->dt_params['action'] = array(
            "hide_add_button" => true,
            "hide" => false,
            "show_delete" => true,
            "show_edit" => false,
            "order_field" => false,
            "show_view" => false,
            "extra" => array(
                '<a title="View" href="' . $config['admin_base_url'] . 'signup_cleaner/detail?id=%d" class="btn-xs btn btn-primary cleaner_details_btn" target="_blank"><i class="icon-users"></i></a>',
                '<a title="View" href="' . $config['admin_base_url'] . 'signup_cleaner/suspend?id=%d" class="btn-xs btn btn-primary cleaner_re_active" target="_blank"><i class="fa fa-power-off"></i></a>'
            ),
        );


        // $this->_list_data['signup_status_cleaner'] = array(
        //                                 STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>",
        //                                 STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        //                             );

        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        $param22['where']['signup_type'] = 2;
        $this->_list_data['signup'] = $this->model_signup_cleaner->find_all_active($param22);


        $_POST = $this->input->post(NULL, false);
    }

    public function add($id = '', $data = array())
    {
        // debug($id,1);
        $param['where']['signup_id'] = $id;
        $data = $this->model_signup_cleaner->find_one($param);
        // debug($data,1);
        // Unset password to avoid pass change
        if ((isset($_POST)) && (count($_POST) > 0) && (!empty($id))) {
            unset($_POST['signup']['signup_password']);
        }
        parent::add($id, $data);
    }

    // update_password
    public function update_password()
    {
        $data = $this->input->post('signup');
        if ((count($_POST) > 0) && (isset($data['signup_password'])) && (!empty($data['signup_password']))) {
            $param['signup_password'] = md5($data['signup_password']);
            $status = $this->model_signup_cleaner->update_by_pk($data['signup_id'], $param);
            if ($status) {
                $msg = 'Password changed successfully.';
                redirect($this->admin_path . "?msgtype=success&msg=$msg", 'refresh');
            } else {
                $msg = "Unable to change password. Please user different password";
                redirect($this->admin_path . "?msgtype=error&msg=$msg", 'refresh');
            }
        } else {
            $msg = "Record not updated.";
            redirect($this->admin_path . "?msgtype=error&msg=$msg", 'refresh');
        }
    }


    public function detail()
    {
        $class_name = $this->router->class;
        $page_name = $class_name . "_edit";

        $this->layout_data['template_config']['show_toolbar'] = false;
        $this->register_plugins(array(
            "jquery-ui",
            "bootstrap",
            "bootstrap-hover-dropdown",
            "jquery-slimscroll",
            "uniform",
            "boots",
            "font-awesome",
            "simple-line-icons",
            "select2",
            "bootbox",
            "bootstrap-toastr",
            "bootstrap-datetimepicker"
        ));

        $param2['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = user_team.user_team_user_id "
        );
        $param2['joins'][] = array(
            "table" => "team_name",
            "joint" => "team_name.team_name_id = user_team.user_team_form_id"
        );
        // $param2['joins'][] = array(
        //     "table" => "team_name",
        //     "joint" => "team_name.team_name_id = user_team.user_team_form_id"
        // );
        $param2['where']['signup_id'] = $_GET['id'];
        $param2['where']['signup_type'] = 2;
        $param2['where']['team_name_status'] = 1;
        $param2['where']['user_team_status'] = 1;
        // $param2['group'] = 'user_team_id';
        $data['team_memeber'] = $this->model_user_team->find_all_active($param2);
        // debug($data['team_memeber'],1);

        $params3['joins'][] = array(
            "table" => "team_name",
            "joint" => "team_name.team_name_user_id = user_team.user_team_user_id"
        );
        $params3['where']['team_name_user_id'] = $_GET['id'];;
        $params3['where']['team_name_status'] = 1;
        $params3['group'] = 'user_team_id';
        $data['team_form'] = $this->model_user_team->find_all_active($params3);
        // debug($data['team_form'],1);

        $param4['where']['signup_id'] = $_GET['id'];
        $param4['where']['signup_type'] = 2;
        $data['signup_data_cleaner'] = $this->model_signup_cleaner_unapproved->find_one($param4);
        // debug($data['signup_data'],1);

        $param5['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = signup_payment.signup_payment_user_id "
        );
        $param5['where']['signup_payment_user_id'] = $_GET['id'];
        $param5['where']['signup_type'] = 2;
        $data['signup_data_package'] = $this->model_signup_payment->find_all($param5);
        // debug($data['signup_data_package'] ,1);

        $this->load_view("detail", $data);
        # code...
    }

    public function suspend()
    {
        $class_name = $this->router->class;
        $page_name = $class_name . "_edit";

        $this->layout_data['template_config']['show_toolbar'] = false;
        $this->register_plugins(array(
            "jquery-ui",
            "bootstrap",
            "bootstrap-hover-dropdown",
            "jquery-slimscroll",
            "uniform",
            "boots",
            "font-awesome",
            "simple-line-icons",
            "select2",
            "bootbox",
            "bootstrap-toastr",
            "bootstrap-datetimepicker"
        ));
        $paramsus['where']['signup_id'] = $_GET['id'];
        $paramsus['where']['signup_type'] = 2;
        $data['signup_suspend_cleaner'] = $this->model_signup_cleaner_unapproved->find_one($paramsus);

        $this->load_view("suspend",$data);
    }


    // suspend 
    public function suspend_cleaner(){

        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanersuspended']['signup_id']);
            $this->model_signup_cleaner->update_by_pk($id, array(  
                'signup_note'=>$_POST['cleanersuspended']['signup_note'],
                'signup_type' => 2,
                'signup_status' => 3,
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }

    // re_active
    public function re_active(){
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['reactive']['signup_id']);
            $this->model_signup_cleaner->update_by_pk($id, array(  
                'signup_note'=> '',
                'signup_type' => 2,
                'signup_status' => 1,
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    // approved cleaner 
    public function update_cleaner_unapproved()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleaner']['signup_id']);
            $this->model_signup_cleaner_unapproved->update_by_pk($id, array(
                'signup_id' => $_POST['cleaner']['signup_id'],
                'signup_name' => $_POST['cleaner']['signup_name'],
                'signup_lastname' => $_POST['cleaner']['signup_lastname'],
                'signup_address' => $_POST['cleaner']['signup_address'],
                'signup_email' => $_POST['cleaner']['signup_email'],
                'signup_contact' => $_POST['cleaner']['signup_contact'],
                'signup_business_name' => $_POST['cleaner']['signup_business_name'],
                'signup_company' => $_POST['cleaner']['signup_company'],
                'signup_contact' => $_POST['cleaner']['signup_contact'],
                'signup_unit' => $_POST['cleaner']['signup_unit'],
                'signup_miles' => $_POST['cleaner']['signup_miles'],
                'signup_ref1_name' => $_POST['cleaner']['signup_ref1_name'],
                'signup_ref1_contact' => $_POST['cleaner']['signup_ref1_contact'],
                'signup_ref1_relation' => $_POST['cleaner']['signup_ref1_relation'],
                'signup_ref1_address' => $_POST['cleaner']['signup_ref1_address'],
                'signup_ref2_name' => $_POST['cleaner']['signup_ref2_name'],
                'signup_ref2_contact' => $_POST['cleaner']['signup_ref2_contact'],
                'signup_ref2_relation' => $_POST['cleaner']['signup_ref2_relation'],
                'signup_ref2_address' => $_POST['cleaner']['signup_ref2_address'],
                'signup_ref3_name' => $_POST['cleaner']['signup_ref3_name'],
                'signup_ref3_contact' => $_POST['cleaner']['signup_ref3_contact'],
                'signup_ref3_relation' => $_POST['cleaner']['signup_ref3_relation'],
                'signup_ref3_address' => $_POST['cleaner']['signup_ref3_address'],
                'signup_team_insured' => $_POST['cleaner']['signup_team_insured'],
                'signup_miles' => $_POST['cleaner']['signup_miles'],
                'signup_type' => 2,
                'signup_status' => 1,
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    // end

    // update password
    public function update_password_cleaner_unapproved()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['signup_data_cleaner']['signup_id']);
            $this->model_signup_cleaner_unapproved->update_by_pk($id, array(
                'signup_password' => md5($_POST['signup_data_cleaner']['signup_password']),
                'signup_password_show' => $_POST['signup_data_cleaner']['signup_password_show'],
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    // end
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */