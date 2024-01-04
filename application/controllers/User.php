<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{

    /**
     * User Controller
     *
     * @package        User Controller
     * @version        1.0
     * @since        11-Apr-2018
     */

    private $json_param = array();


    public function __construct()
    {
        // Call the Model constructor latest_product
        parent::__construct();
        $this->load->library('session');
    }

    // Login/Signup View
    public function index()
    {

        global $config;
        
        $this->load->helper('url');
        $currentURL = current_url();
        if($currentURL == 'https://cleantocloseco.com/user'){
            redirect('https://cleantocloseco.com/', 'location');
            }
        // debug(1,1);

        // Temporary redirect
        //redirect(l('user/login'));
  

        // Redirect user if session set
        if ($this->userid  > 0) {
            redirect(l(''));
        }
        // Get banner
        //$data['banner'] = $this->model_inner_banner->find_by_pk(2);
        // Sign up / Login main page
        //$this->load_view('login', $data);

        $data['login'] = $this->model_cms_page->get_page(15);
        $data['register'] = $this->model_cms_page->get_page(16);
        $this->load_view('index', $data);
    }

    public function cleaner_index()
    {
        // Temporary redirect
        //redirect(l('user/login'));
        global $config;

        // Redirect user if session set
        if ($this->userid  > 0) {
            redirect(l(''));
        }
        // Get banner
        //$data['banner'] = $this->model_inner_banner->find_by_pk(2);
        // Sign up / Login main page
        //$this->load_view('login', $data);
        $data['pkg_first'] = $this->model_packages->find_by_pk(1);
        $data['pkg_second'] = $this->model_packages->find_by_pk(2);
        $data['pkg_third'] = $this->model_packages->find_by_pk(3);

        $data['login'] = $this->model_cms_page->get_page(15);
        $data['register'] = $this->model_cms_page->get_page(16);
        $this->load_view('cleaner_index', $data);
    }

    // Login Viewlogin-process
    public function login()
    {
        // debug($_POST,1);
        global $config;


        redirect(l('user'));


        // Redirect user if session set
        if ($this->userid) {
            redirect(l(''));
        }
        // Get banner
        $data['banner'] = $this->model_inner_banner->find_by_pk(8);
        // Sign up / Login main page
        $this->load_view('login', $data);
    }

    // Sign up View
    public function register()
    {
        global $config;

        redirect(l('user'));

        // Redirect user if session set
        if ($this->userid) {
            redirect(l(''));
        }
        // Get banner
        $data['banner'] = $this->model_banner->get_banners(7);
        // Get Countries
        //$data['countries'] = $this->model_country->find_all_active();
        // Sign up / Login main page
        $this->load_view('register', $data);
    }

    // Sign up View
    public function signup()
    {
        // debug($_POST,1);
        global $config;

        // Redirect user if session set
        if ($this->userid) {
            redirect(l(''));
        }
        // Get banner
        $data['banner'] = $this->model_inner_banner->find_by_pk(7);
        // Get Countries
        //$data['countries'] = $this->model_country->find_all_active();
        // Sign up / Login main page
        $this->load_view('signup', $data);
    }

    // Insert Record
    public function saveTeam()
    {
        // debug($_POST);
        // debug($_FILES,1);
        $this->load->library('session');
        $vg = $_POST['teamMem'];
        // debug($vg);
        $team_member = json_decode($vg, true);
        // debug($team_member,1);
        //  $this->session->set_userdata(array($team_member));
        $this->session->set_userdata('teamdata', $team_member);
    }


    public function check_email()
    {
        # code...

        $email = $_POST['email'];
        // debug($email,1);
        $paramemail['where']['signup_status !='] = 2;
        $paramemail['where']['signup_email'] = $email;
        $check_email_data = $this->model_signup->find_one($paramemail);
        if ($check_email_data == null) {
            echo json_encode(array(
                'status' => '2',
            ));
        } else {
            echo json_encode(array(
                'status' => '3',
            ));
        }
    }
    //     public function save()
    //     {
    //         // debug($_POST);
    //         // debug($_FILES);
    //         global $config;
    //         $amount = $this->model_member_amount->find_all();
    //         // debug($amount,1);
    //         $signup = $this->input->post('signup');

    //         $datateam =  $this->session->userdata('teamdata');
    //         //    debug( $datateam,1);
    //         $memberAmount = count($datateam) *  $amount[0]['member_amount_value'];
    // // debug($memberAmount);
    //         if (array_filled($signup) > 0) {
    //             $custom_rule = array(
    //                 'signup_password_confirm' => array(
    //                     'field' => 'signup_password_confirm',
    //                     'label' => 'Confirm Password',
    //                     'rules' => 'required|md5|trim|matches[signup[signup_password]]'
    //                 )
    //             );

    //             // Validation success
    //             if ($this->validate("model_signup", $custom_rule)) {

    //                 $file_name1 = $_FILES['signup']['name']['signup_insurance_company_image'];
    //                 $tmp_name = $_FILES['signup']['tmp_name']['signup_insurance_company_image'];
    //                 move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name1);

    //                 $file_name = $_FILES['signup']['name']['signup_w_9_image'];
    //                 $tmp_name = $_FILES['signup']['tmp_name']['signup_w_9_image'];
    //                 move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name);

    //                 $signup['signup_team_name'] = serialize($_POST['signup']['signup_team_name']);
    //                 $signup['signup_team_contact'] = serialize($_POST['signup']['signup_team_contact']);
    //                 $signup['signup_team_email'] = serialize($_POST['signup']['signup_team_email']);

    //                 $signup['signup_insurance_company_image'] = $file_name1;
    //                 $signup['signup_w_9_image'] = $file_name;
    //                 $signup['signup_members_amount'] = $memberAmount;

    //                 if ($this->session->userdata('packageAmount') == $_POST['signup']['signup_package_amount']) {

    //                     $signup['signup_package_total_amount'] = $this->session->userdata('calcultedDiscountAmount1');
    //                 } else {

    //                     $signup['signup_package_total_amount'] = $_POST['signup']['signup_package_amount'] + $memberAmount;
    //                 }

    //                 $signup['signup_password'] = md5($signup['signup_password']);

    //                 $signup['signup_firstname'] = $signup['signup_name'].''.$signup['signup_lastname'];

    //                  $signup['signup_city'] = $_POST['signup']['signup_city'];

    //                 $signup['signup_state'] = $_POST['signup']['signup_state'];


    //                 $this->model_signup->set_attributes($signup);

    //                 $inserted_id = $this->model_signup->insert_record($signup);
    //                 // debug($inserted_id);

    //                 $this->session->set_userdata('user_save_latest', $inserted_id);

    //                 // $signup_user_id = $inserted_id;
    //                 $signup1['signup_payment_user_id'] = $inserted_id;
    //                 $signup1['signup_payment_package_name'] = $_POST['signup']['signup_package_name'];
    //                 $signup1['signup_payment_package_amount'] = $_POST['signup']['signup_package_amount'];

    //                 if ($this->session->userdata('packageAmount') == $_POST['signup']['signup_package_amount']) {
    //                     // debug(1,1);
    //                     $signup1['signup_payment_package_total_amount'] = $this->session->userdata('calcultedDiscountAmount1');
    //                     $this->session->unset_userdata('calcultedDiscountAmount1');
    //                 } else {
    //                     // debug(2);
    //                     $signup1['signup_payment_package_total_amount'] = $_POST['signup']['signup_package_amount'] + $memberAmount;
    //                 }
    //                 $inserted_id_signup = $this->model_signup_payment->insert_record($signup1);
    //                 // debug($inserted_id_signup);
    //                 $this->session->set_userdata('user_payment_latest', $inserted_id_signup);

    //                 $team_name = $_POST['signup']['signup_team_name'];
    //                 $team_contact = $_POST['signup']['signup_team_contact'];
    //                 $team_email = $_POST['signup']['signup_team_email'];
    //                 $teamArr = [];
    //                 $testArry = [
    //                     'team_name_user_id' => '',
    //                     'team_name_memeber' => '',
    //                     'team_name_contact' => '',
    //                     'team_name_email' => '',
    //                 ];
    //                 foreach ($team_name as $key => $value) {
    //                     array_push($teamArr, $testArry);
    //                 }
    //                 $teamdata = [];
    //                 foreach ($teamArr as $key => $value) {
    //                     $teamArr[$key]['team_name_user_id'] = $inserted_id;
    //                     $teamArr[$key]['team_name_memeber'] = $team_name[$key];
    //                     $teamArr[$key]['team_name_contact'] = $team_contact[$key];
    //                     $teamArr[$key]['team_name_email'] = $team_email[$key];

    //                     $team_data = $this->model_team_name->insert_record($teamArr[$key]);
    //                     array_push($teamdata, $team_data);
    //                 }

    //                 // debug($team_data);
    //                 $count = 0;
    //                 foreach ($datateam as $key => $value) {
    //                     // debug($inserted_id,1);
    //                     $data = array(
    //                         'user_team_user_id' => $inserted_id,
    //                         'user_team_form_id' => $count == 0 ? '' : $teamdata[$count - 1],
    //                         'user_team_member_name' => $value['member_name'],
    //                         'user_team_name' => $value['team_member_name'],
    //                         'user_team_date_of_birth' => $value['team_date_of_birth'],
    //                         'user_team_print_name' => $value['team_print_name'],
    //                         'user_team_print_other_name' => $value['team_print_other_name'],
    //                         'user_team_social_security_number' => $value['team_social_security_number'],
    //                         'user_team_driver_license' => $value['team_driver_license'],
    //                         'user_team_address' => $value['team_address'],
    //                         'user_team_date' => $value['team_date'],
    //                         'user_team_initials' => $value['team_initials'],
    //                         'user_team_signature' => $value['team_signature']
    //                     );
    //                     $count++;
    //                     $memeber_data = $this->model_user_team->insert_record($data);
    //                 }

    //                 // inserting user team member 
    //                 // Record insert successfully
    //                 if ($inserted_id > 0) {
    //                     $this->model_email->welcome_cleaner_email($inserted_id);
    //                     $this->json_param['status'] = true;
    //                     $this->json_param['txt'] = 'You will receive an approval or denial email within 48-72. 
    //                     You are responsible for the background check regardless of approval/denial. In the event you are denied, you will be credited back the subscription fee';
    //                 }
    //                 // Record not insert
    //                 else {
    //                     $this->json_param['status'] = false;
    //                     $this->json_param['txt'] = 'Something went wrong.Please try later.';
    //                 }
    //             }
    //             // Validation failed
    //             else {
    //                 $this->json_param['status'] = false;
    //                 $this->json_param['txt'] = validation_errors();
    //             }
    //         }
    //         echo json_encode($this->json_param);
    //     }


    public function save()
    {
        // debug($_POST);
        // debug($_FILES);
        global $config;
        $amount = $this->model_member_amount->find_all();
        // debug($amount,1);
        $signup = $this->input->post('signup');

        $datateam =  $this->session->userdata('teamdata');


        // $user_file_data =  $this->session->set_userdata('user_save_file', $_FILES);
        // $user_file = $this->session->userdata('user_save_file');
        // debug($user_file,1);
        //    debug( $datateam,1);
        $memberAmount = count($datateam) *  $amount[0]['member_amount_value'];
        $this->session->set_userdata('memberAmount', $memberAmount);
        $this->session->set_userdata('post_signup',  $_POST['signup']);

        // debug($memberAmount);
        if (array_filled($signup) > 0) {
            $custom_rule = array(
                'signup_password_confirm' => array(
                    'field' => 'signup_password_confirm',
                    'label' => 'Confirm Password',
                    'rules' => 'required|md5|trim|matches[signup[signup_password]]'
                )
            );

            // Validation success
            if ($this->validate("model_signup", $custom_rule)) {

                // $file_name1 = uniqid(rand(), true).''.$_FILES['signup']['name']['signup_insurance_company_image'];
                $file_name1 = mt_rand(100000, 999999) . '' . $_FILES['signup']['name']['signup_insurance_company_image'];
                $tmp_name = $_FILES['signup']['tmp_name']['signup_insurance_company_image'];
                move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name1);
                $this->session->set_userdata('file_name1', $file_name1);
                //  debug($file_name1);

                // $file_name = uniqid(rand(), true).''.$_FILES['signup']['name']['signup_w_9_image'];
                $file_name = mt_rand(100000, 999999) . '' . $_FILES['signup']['name']['signup_w_9_image'];
                $tmp_name = $_FILES['signup']['tmp_name']['signup_w_9_image'];
                move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name);
                //  debug($file_name,1);

                $this->session->set_userdata('file_name', $file_name);
                $signup['signup_team_name'] = serialize($_POST['signup']['signup_team_name']);
                $signup['signup_team_contact'] = serialize($_POST['signup']['signup_team_contact']);
                $signup['signup_team_email'] = serialize($_POST['signup']['signup_team_email']);

                $signup['signup_insurance_company_image'] = $file_name1;
                $signup['signup_w_9_image'] = $file_name;
                // $signup['signup_members_amount'] = $memberAmount;

                // if ($this->session->userdata('packageAmount') == $_POST['signup']['signup_package_amount']) {

                //     $signup['signup_package_total_amount'] = $this->session->userdata('calcultedDiscountAmount1');
                // } else {

                //     $signup['signup_package_total_amount'] = $_POST['signup']['signup_package_amount'] + $memberAmount;
                // }

                $signup['signup_password'] = md5($signup['signup_password']);

                $signup['signup_firstname'] = $signup['signup_name']  . '   ' .  $signup['signup_lastname'];

                $signup['signup_city'] = $_POST['signup']['signup_city'];

                $signup['signup_state'] = $_POST['signup']['signup_state'];

                $datecreated = new DateTime();

                $signup['signup_createdon'] = $datecreated->format("m/d/Y g:i A");

                $this->model_signup->set_attributes($signup);

                $inserted_id = $this->model_signup->insert_record($signup);
                // debug($inserted_id);

                $this->session->set_userdata('user_save_latest', $inserted_id);

                // $this->session->set_userdata('user_save_upload', $inserted_id);


                // $signup_user_id = $inserted_id;
                $signup1['signup_payment_user_id'] = $inserted_id;
                $signup1['signup_payment_package_name'] = $_POST['signup']['signup_package_name'];
                $signup1['signup_payment_package_amount'] = $_POST['signup']['signup_package_amount'];

                if ($this->session->userdata('packageAmount') == $_POST['signup']['signup_package_amount']) {
                    // debug(1,1);
                    $signup1['signup_payment_package_total_amount'] = $this->session->userdata('calcultedDiscountAmount1');
                    $this->session->unset_userdata('calcultedDiscountAmount1');
                } else {
                    // debug(2);
                    $signup1['signup_payment_package_total_amount'] = $_POST['signup']['signup_package_amount'] + $memberAmount;
                }
                $inserted_id_signup = $this->model_signup_payment->insert_record($signup1);
                // debug($inserted_id_signup);
                $this->session->set_userdata('user_payment_latest', $inserted_id_signup);

                $team_name = $_POST['signup']['signup_team_name'];
                $team_contact = $_POST['signup']['signup_team_contact'];
                $team_email = $_POST['signup']['signup_team_email'];
                $teamArr = [];
                $testArry = [
                    'team_name_user_id' => '',
                    'team_name_memeber' => '',
                    'team_name_contact' => '',
                    'team_name_email' => '',
                ];
                foreach ($team_name as $key => $value) {
                    array_push($teamArr, $testArry);
                }
                $teamdata = [];
                foreach ($teamArr as $key => $value) {
                    $teamArr[$key]['team_name_user_id'] = $inserted_id;
                    $teamArr[$key]['team_name_memeber'] = $team_name[$key];
                    $teamArr[$key]['team_name_contact'] = $team_contact[$key];
                    $teamArr[$key]['team_name_email'] = $team_email[$key];

                    $team_data = $this->model_team_name->insert_record($teamArr[$key]);
                    array_push($teamdata, $team_data);
                }

                // debug($team_data);
                $count = 0;
                foreach ($datateam as $key => $value) {
                    // debug($inserted_id,1);
                    $data = array(
                        'user_team_user_id' => $inserted_id,
                        'user_team_form_id' => $count == 0 ? '' : $teamdata[$count - 1],
                        'user_team_member_name' => $value['member_name'],
                        'user_team_name' => $value['team_member_name'],
                        'user_team_date_of_birth' => $value['team_date_of_birth'],
                        'user_team_print_name' => $value['team_print_name'],
                        'user_team_print_other_name' => $value['team_print_other_name'],
                        'user_team_social_security_number' => $value['team_social_security_number'],
                        'user_team_driver_license' => $value['team_driver_license'],
                        'user_team_address' => $value['team_address'],
                        'user_team_date' => $value['team_date'],
                        'user_team_initials' => $value['team_initials'],
                        'user_team_signature' => $value['team_signature']
                    );
                    $count++;
                    $memeber_data = $this->model_user_team->insert_record($data);
                }

                // inserting user team member 
                // Record insert successfully
                if ($inserted_id > 0) {
                    $this->model_email->welcome_cleaner_email($inserted_id);
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'success';
                }
                // Record not insert
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Something went wrong.Please try later.';
                }
            }
            // Validation failed
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        }
        echo json_encode($this->json_param);
    }





    public function save_realtor()
    {
        global $config;
        $signup = $this->input->post('signup');

        // if($signup['type'] == 2){
        // $datateam =  $this->session->userdata('teamdata');
        // $memberAmount = count($datateam) * g('db.admin.member_form_amount');
        // }

        if (array_filled($signup) > 0) {

            $custom_rule = array(
                'signup_password_confirm' => array(
                    'field' => 'signup_password_confirm',
                    'label' => 'Confirm Password',
                    'rules' => 'required|md5|trim|matches[signup[signup_password]]'
                )
            );

            // Validation success
            if ($this->validate("model_signup", $custom_rule)) {
                // $file_name1 = $_FILES['signup']['name']['signup_insurance_company_image'];
                // $tmp_name = $_FILES['signup']['tmp_name']['signup_insurance_company_image'];
                // move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name1);
                // $file_name = $_FILES['signup']['name']['signup_w_9_image'];
                // $tmp_name = $_FILES['signup']['tmp_name']['signup_w_9_image'];
                // move_uploaded_file($tmp_name, 'assets/uploads/signup/' . $file_name);
                // $signup['signup_team_name'] = serialize($_POST['signup']['signup_team_name']);
                // $signup['signup_team_contact'] = serialize($_POST['signup']['signup_team_contact']);
                // $signup['signup_insurance_company_image'] = $file_name1;
                // $signup['signup_w_9_image'] = $file_name;
                $signup['signup_password'] = md5($signup['signup_password']);
                $signup['signup_firstname'] = $signup['signup_name'] . '   ' . $signup['signup_lastname'];
                $this->model_signup->set_attributes($signup);

                $datecreated = new DateTime();

                $signup['signup_createdon'] = $datecreated->format("m/d/Y g:i A");

                $inserted_id = $this->model_signup->insert_record($signup);
                // Record insert successfully
                if ($inserted_id > 0) {

                    $this->model_email->welcome_relator_email($inserted_id);

                    $this->model_signup->auto_login($inserted_id);

                    $this->json_param['status'] = true;
                    //$this->json_param['txt'] = 'Thanks for registration. Please check your inbox for account verification.';
                    $this->json_param['txt'] = 'Thank you for registration.';
                }
                // Record not insert
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Something went wrong.Please try later.';
                }
            }
            // Validation failed
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        }
        echo json_encode($this->json_param);
    }
    // Email Verification
    public function confirmation()
    {
        // Get data
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        if ((!empty($email)) && (!empty($token))) {
            // Where condition
            $params['where']['signup_email'] = $email;
            $params['where']['signup_token'] = $token;

            // Run query
            $query = $this->model_signup->find_one($params);

            //Check record found or not
            if (count($query) > 0) {
                // Change user status active
                $upd_data = array(
                    'signup_token' => '',
                    'signup_status' => 1
                );

                $upd_query = $this->model_signup->update_by_pk($query['signup_id'], $upd_data);
                $msg = 'Thank you! Your Email has been verified successfully.';
                redirect(l('?msgtype=success&msg=' . urlencode($msg)));
            } else {
                $msg = 'Something went wrong.Please try later.';
                redirect(l('404'));
            }
        } else {
            $msg = 'Invalid credentials.';
            redirect(l('?msgtype=error&msg=' . urlencode($msg)));
        }
    }
  
    // // Login action
    public function login_process()
    {
        $this->load->library('session');
        // Get post data
        $login = $this->input->post('signup');

        if (array_filled(array_filter($login)) > 0) {
            // Set params
            $params['where']['signup_email'] = $login['signup_email'];
            $params['where']['signup_status !='] = STATUS_DELETE;
            $data = $this->model_signup->find_one($params);

            // deleted data
            $paramsdelete['where']['signup_email'] = $login['signup_email'];
            $datadeleted = $this->model_signup->find_one($paramsdelete);
            
            // Login success
            if (
                $login['signup_email'] == $data['signup_email'] && (md5($login['signup_password'])) ==
                $data['signup_password']  && ($data['signup_realtor_status'] == '0') &&  ($data['signup_status'] == '1')  &&
                ($login['signup_type'] == '1')
            ) {
                // debug(1,1);
                $this->model_signup->set_user_session($data);
                $this->json_param['status'] = 5;
                $this->json_param['txt'] = 'Login successfully.';
                // debug(1,1);
            } elseif (
                $login['signup_email'] == $data['signup_email'] && (md5($login['signup_password'])) ==
                $data['signup_password']  && ($data['signup_status'] == '1')   &&
                $login['signup_type'] == $data['signup_type']
            ) {
                // debug(1,1);
                // Set user session (session will be set on layout data
                $this->model_signup->set_user_session($data);
                $this->json_param['status'] = true;
                $this->json_param['txt'] = 'Login successfully.';
                //$this->json_param['refer'] = (isset($refer_url))?$refer_url:g('base_url');

            }
            // Deleted Account
            elseif (
                $login['signup_email'] == $data['signup_email'] && (md5($login['signup_password'])) ==
                $data['signup_password']  &&  ($data['signup_status'] == '0')  &&
                $login['signup_type'] == $data['signup_type']
            ) {
                // $this->session->set_flashdata('pending_approval', 'Your account is pending approval. You will receive an email withing 72 hours');
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Your account is pending approval. You will receive an email withing 72 hours';
            }
            // Suspend Account
            elseif (
                $login['signup_email'] == $data['signup_email'] && (md5($login['signup_password'])) ==
                $data['signup_password']  &&  ($data['signup_status'] == '3')  &&
                $login['signup_type'] == $data['signup_type']
            ) {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Your account is suspended  from Admin';
            }

            // Inactive and unverified
            elseif ($data['signup_status'] == '0' && (!empty($data['signup_token']))) {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Account verification is required.Kindly Check your inbox.';
            }
            // In active
            elseif ($login['signup_email'] == $datadeleted['signup_email'] && (md5($login['signup_password'])) ==
                $datadeleted['signup_password']  &&  ($datadeleted['signup_status'] == '2')) {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Your Account Deleted from Admin.';
            }
            // Login fail
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Invalid email / password';
                //$this->json_param['refer'] = g('base_url');
            }
        } else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = 'Fields required';
            //$this->json_param['refer'] = g('base_url');
        }
        echo json_encode($this->json_param);
    }

    // Load edit user view
    public function edit()
    {
        // Redirect user if session not set
        if ($this->session->userdata('userdata') == null) {
            redirect(l('login'));
        }

        // Define layout
        $this->layout = 's8_main';

        // Set body class
        $this->layout_data['body_class'] = "responsive timelineBody";

        // Define page
        $this->load_view('edit_profile');
    }

    // Check user password
    public function password_check($str)
    {
        $user_id = $this->session->userdata('userdata')['signup_id'];
        $params['where']['signup_id'] = $user_id;
        $params['where']['signup_password'] = md5($str);
        if ($this->model_signup->find_one($params, true)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('password_check', lang('invalid_pass'));
            return FALSE;
        }
    }

    // Delete Record
    public function delete()
    {
    }

    // Forgot Password
    public function forgot()
    {
        // Get Post Data
        $email = $this->input->post('signup');
        // Get Captcha
        $captcha_answer = $this->input->post('g-recaptcha-response');

        // check Input data empty or not
        $this->form_validation->set_rules('signup[signup_email]', 'Email', 'required|valid_email');
        // Set validation rules for google captcha
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'required');
        $this->form_validation->set_error_delimiters("<span style=\"color:white;\" for=\"%s\" class=\"has-error help-block\">", '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = validation_errors();
        } else {
            // Verify user's answer
            $response = $this->recaptcha->verifyResponse($captcha_answer);
            // Processing ...
            if ($response['success']) {
                // Send email
                // Query to check email exists or not
                $params['where']['signup_email'] = $email['signup_email'];
                $query = $this->model_signup->find_one_active($params);
                if (count($query) > 0) {
                    // Remove old token if exist
                    $where_params['where']['token_user_id'] = $query['signup_id'];
                    $data = array(
                        'token_status' => STATUS_INACTIVE
                    );
                    $this->model_token->update_model($where_params, $data);
                    // Generate token
                    $token = md5(time());
                    $data = array(
                        'token_user' => $token,
                        'token_user_id' => $query['signup_id'],
                        'token_status' => 1
                    );
                    // Save token
                    $this->model_token->set_attributes($data);
                    $this->model_token->save();

                    // debug($query,1);
                    // Send email
                    // CHANGE THIS FOR OTHER PROJECT
                    $this->model_email->_notification_forgot_password($query, $token);
                    //$this->model_email->_notification_forgot_password_smtp($query,$token);
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.';
                } else {
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.';
                }
            } else {
                // Something goes wrong
                $this->json_param['status'] = 0;
                $this->json_param['txt'] = 'Captcha not verified';
            }
        }
        echo json_encode($this->json_param);
    }

    public function forgotpasswordclient()
    {

        if ($this->userid > 0) {
            redirect(g('base_url'));
        }

        $banner = $this->model_inner_banner->find_by_pk(5);
        $data['banner'] = Links::img($banner['banner_image_path'], $banner['banner_image']);


        $data['breadcrumb'] = array('child_one' => "Login", 'child_two' => '');
        $this->load_view("forgot_password", $data);
    }

    // Forgot Password View
    // public function forgot_password()
    // {
    //     // Get data
    //     $user_id = $this->input->get('id');
    //     $token   = $this->input->get('token');

    //     if((!empty($user_id)) && (!empty($token)) && (!$this->session->userdata('userdata')['signup_id'])){
    //         // Where condition for token expire
    //         $params['where']['token_user_id'] = $user_id;
    //         $params['where']['token_user']    = $token;

    //         // Token found
    //         if($this->model_token->find_one_active($params)){
    //             // Run query
    //             $params_user['where']['signup_id'] = $user_id;
    //             $query = $this->model_signup->find_one($params_user);

    //             // Set banner heading
    //             $data['banner_heading'] = "Reset Password";

    //             //Check record found
    //             if(count($query)>0){
    //                 $data['token_user'] = $token;
    //                 $data['user_id'] = $user_id;

    //                 // Get banner
    //                 $data['banner'] = $this->model_inner_banner->find_by_pk(2);

    //                 $this->load_view('forgot_password',$data);
    //             }
    //             // User ID not found
    //             else{
    //                 redirect(l('404'));
    //             }
    //         }
    //         // Token not found
    //         else{
    //             redirect(l('404'));
    //         }
    //     }
    //     // Invalid credentials
    //     else{
    //         redirect(l('404'));
    //     }
    // }

    public function reset_password()
    {
        // Get Post data
        $user_id  = $this->input->post('user_id');
        $token    = $this->input->post('token');
        $password = $this->input->post('password');

        // check Input data empty or not
        $this->form_validation->set_rules('user_id', 'User ID', 'required|trim');
        $this->form_validation->set_rules('token', 'Token', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_error_delimiters("<span style=\"color:white;\" for=\"%s\" class=\"has-error help-block\">", '</span>');

        // Validation error
        if ($this->form_validation->run() == FALSE) {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = validation_errors();
        }
        // No validation
        else {
            // Where condition for token expire
            $params['where']['token_user_id'] = $user_id;
            $params['where']['token_user']    = $token;

            // Token found
            if ($this->model_token->find_one_active($params)) {
                // Set token status to 0
                $this->model_token->update_model($params, array('token_status' => STATUS_INACTIVE));

                // Change password
                $this->model_signup->update_by_pk($user_id, array('signup_password' => md5($password)));

                $this->json_param['status'] = true;
                $this->json_param['txt'] = 'Reset password successfully.';
            }
            // Token not found
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Authentication fail.';
            }
        }

        echo json_encode($this->json_param);
    }

    // Logout
    public function logout()
    {
        $user_id = $this->session->userdata('userdata')['signup_id'];

        $this->cart->destroy();

        // Clear user session
        $this->session->unset_userdata('userdata');
        redirect(l(''));
    }
    public function couponCode()
    {
        $team_member_for_coupon = $_POST['team_memebr'];
        $team_member_decode = json_decode($team_member_for_coupon, true);
        $amount1 = $this->model_member_amount->find_all();
        $a[] = $_POST['team_memebr'];
        $memberAmount3 = count($team_member_decode) *  $amount1[0]['member_amount_value'];


        $coupon_code = $_POST['coupon_code'];
        $package_amount  = $_POST['package_amount'];
        $total_amount = $package_amount + $memberAmount3;
        $param['where']['coupon_code'] = $coupon_code;
        $check_coupon_exist = $this->model_coupon->find_one($param);
        if ($check_coupon_exist) {
            // debug($check_coupon_exist['coupon_percent'], 1);
            $calcultedDiscountAmount = $total_amount - ($total_amount * ($check_coupon_exist['coupon_percent'] / 100));

            $this->session->set_userdata("calcultedDiscountAmount1", $calcultedDiscountAmount);
            $this->session->set_userdata("packageAmount", $package_amount);

            echo json_encode(array(
                'status' => '4',
            ));
        } else {
            echo json_encode(array(
                'status' => '3',
            ));
        }
    }

    public function forgot_password_user()
    {
        //   debug($_POST,1);
        $email = $this->input->post('signup');

        if (isset($email) and array_filled($email)) {
            // if($check_user_data)
            $param['where']['signup_email'] = $_POST['signup']['signup_email'];
            $check_user_data = $this->model_signup->find_one($param);
            // debug($check_user_data['signup_email'],1);

            if ($check_user_data['signup_email'] != $_POST['signup']['signup_email']) {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Your email not match from our data kindly enter correct email';
            } else {
                $this->model_email->_notification_forgot_password($email);
                $this->json_param['status'] = true;
                $this->json_param['txt'] = 'We send a link on your email for change your password';
            }
        }

        echo json_encode($this->json_param);
    }

    // Forgot Password View
    public function forgot_password()
    {
        $this->load_view('update_password');
    }
    public function update()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['signup']['signup_id']);
            $this->model_signup->update_by_pk($id, array(
                'signup_password' => md5($_POST['signup']['signup_password']),
                'signup_password_show' => $_POST['signup']['signup_password_show'],
            ));
            $this->json_param['status'] = 1;
            $this->json_param['txt'] = 'Password has been updated.';
            echo json_encode($this->json_param);
        }
    }
        public function checkoutPackage25()
    {
        // debug("hereee",1);
        require_once('application/libraries/stripe-php/init.php');
        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey('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');

        header('Content-Type: application/json');
        $YOUR_DOMAIN = g('base_url');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => 'price_1L1F0GFks7M9JQ0nmPSnvS4L',
                'quantity' => 1,
            ]],
            'allow_promotion_codes' => true,
            'mode' => 'subscription',

            'success_url' => g('base_url') . "user/subscription",
            'cancel_url' => g('base_url'),
        ]);

        header("HTTP/1.1 303 See Other");
        // $this->session->set_userdata('checkCharge', $session);
        header("Location: " . $session->url);

        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $session);
    }

    public function checkoutPackage10()
    {


        require_once('application/libraries/stripe-php/init.php');
        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey('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');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = g('base_url');

        $checkout_session = \Stripe\Checkout\Session::create([
            'mode' => 'subscription',
            'allow_promotion_codes' => true,
            'line_items' => [[
                'price' => "price_1L1F4fFks7M9JQ0n97dqZtPt",
                'quantity' => 1,
            ]],
            'success_url' => g('base_url') . "user/subscription",
            'cancel_url' => g('base_url'),
        ]);
        // debug($checkout_session,1);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);
        // $this->session->set_userdata('checkCharge', $charge);
    }

    public function checkoutPackage05()
    {
        require_once('application/libraries/stripe-php/init.php');
        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey('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');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = g('base_url');

        $checkout_session1 = \Stripe\Checkout\Session::create([
            'mode' => 'subscription',
            'allow_promotion_codes' => true,
            'line_items' => [[
                'price' => "price_1L1F6JFks7M9JQ0nRNzvShO0",
                'quantity' => 1,
            ]],
            'success_url' => g('base_url') . "user/subscription",
            'cancel_url' => g('base_url'),
        ]);
        // debug($checkout_session,1);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session1->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session1);
    }


    public function subscription()
    {
        require_once('application/libraries/stripe-php/init.php');
        $stripe = new \Stripe\StripeClient(
            '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'
        );
        $package_value = $stripe->events->all(['limit' => 1]);
        // debug($package_value);
        $user_id = $this->session->userdata('user_save_latest');
        $payment_id = $this->session->userdata('user_payment_latest');

        $amount_paid = $package_value["data"][0]["data"]["object"]["amount_subtotal"];
        $coupon_name = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["name"];
        $percent_off = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["percent_off"];

        // debug($amount_paid,1);
        $param12345['where']['signup_id'] = $user_id;
        $user = $this->model_signup->find_one($param12345);

        $future_timestamp = strtotime("+1 month");
        $after_one_month_date = date('Y-m-d', $future_timestamp);

        if (isset($user) and array_filled($user)) {
            $id =  intval($user['signup_id']);
            $memeber_data =  $this->model_signup->update_by_pk($id, array(
                'signup_id' => $id,
                'signup_amount_paid' => $amount_paid,
                'signup_coupon_name' => $coupon_name,
                'signup_percent_off' => $percent_off,
                'after_one_month_date' => $after_one_month_date,
            ));
        }

        // payment data update in package table
        $param1236['where']['signup_payment_id'] = $payment_id;
        $user_payment = $this->model_signup_payment->find_one($param1236);
        if (isset($user_payment) and array_filled($user_payment)) {
            $id =  intval($user_payment['signup_payment_id']);
            $memeber_data_payment =  $this->model_signup_payment->update_by_pk($id, array(
                'signup_payment_id' => $id,
                'signup_subscription_amount' => $amount_paid,
            ));
        }
        // debug(1,1);
        // signup_subscription_amount
        if ($memeber_data > 0) {
        
        }
        redirect(base_url() .'information-page');
    }
    public function memebr_amount_pay()
    {
        $user_id = $this->session->userdata('user_save_latest');
        $param12345['where']['signup_id'] = $user_id;
        $user = $this->model_signup->find_one($param12345);

        require_once('application/libraries/stripe-php/init.php');
        \Stripe\Stripe::setApiKey('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');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = g('base_url');
        $checkout_session32 = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Members Amount',
                    ],
                    'unit_amount' => $this->session->userdata('memberAmount') * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' =>  g('base_url') . "user/member_amount_update",
            'cancel_url' => g('base_url'),

        ]);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session32->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session32);
    }

    public function member_amount_update()
    {
        $this->session->set_flashdata('success_payment', 'You will receive an approval or denial email within 48-72.You are responsible for the background check regardless of approval/denial. In the event you are denied, you will be credited back the subscription fee');
        $memberAmount = $this->session->userdata('memberAmount');
        $post_signup = $this->session->userdata('post_signup');
        $user_id = $this->session->userdata('user_save_latest');

        if ($this->session->userdata('packageAmount') == $post_signup['signup_package_amount']) {
            $memeber_data_file =  $this->model_signup->update_by_pk($user_id, array(
                'signup_package_total_amount' => $this->session->userdata('calcultedDiscountAmount1'),
                'signup_members_amount' => $memberAmount,
                'signup_status_final_payment' => 1,
            ));
        } else {
            $memeber_data_file =  $this->model_signup->update_by_pk($user_id, array(
                'signup_package_total_amount' => $post_signup['signup_package_amount'] + $memberAmount,
                'signup_members_amount' => $memberAmount,
                'signup_status_final_payment' => 1,

            ));
        }
        redirect(base_url() .  "user-login?type=2");
    }
    // public function checkoutPackage25()
    // {
    //     // debug("hereee",1);
    //     require_once('application/libraries/stripe-php/init.php');
    //     // This is a public sample test API key.
    //     // Don’t submit any personally identifiable information in requests made with this key.
    //     // Sign in to see your own test API key embedded in code samples.
    //     \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

    //     header('Content-Type: application/json');
    //     $YOUR_DOMAIN = g('base_url');
    //     $session = \Stripe\Checkout\Session::create([
    //         'payment_method_types' => ['card'],
    //         'line_items' => [[
    //             'price' => 'price_1KW3kBGgXkd9k1VNLP9dxPoK',
    //             'quantity' => 1,
    //         ]],
    //         'allow_promotion_codes' => true,
    //         'mode' => 'subscription',

    //         'success_url' => g('base_url') . "user/subscription",
    //         'cancel_url' => g('base_url'),
    //     ]);

    //     header("HTTP/1.1 303 See Other");
    //     // $this->session->set_userdata('checkCharge', $session);
    //     header("Location: " . $session->url);

    //     $charge = str_replace('Stripe\Checkout\Session JSON:', '', $session);
    // }

    // public function checkoutPackage10()
    // {


    //     require_once('application/libraries/stripe-php/init.php');
    //     // This is a public sample test API key.
    //     // Don’t submit any personally identifiable information in requests made with this key.
    //     // Sign in to see your own test API key embedded in code samples.
    //     \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

    //     header('Content-Type: application/json');

    //     $YOUR_DOMAIN = g('base_url');

    //     $checkout_session = \Stripe\Checkout\Session::create([
    //         'mode' => 'subscription',
    //         'allow_promotion_codes' => true,
    //         'line_items' => [[
    //             'price' => "price_1KW5fTGgXkd9k1VNI7IAkNlU",
    //             'quantity' => 1,
    //         ]],
    //         'success_url' => g('base_url') . "user/subscription",
    //         'cancel_url' => g('base_url'),
    //     ]);
    //     // debug($checkout_session,1);
    //     header("HTTP/1.1 303 See Other");
    //     header("Location: " . $checkout_session->url);
    //     $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);
    //     // $this->session->set_userdata('checkCharge', $charge);
    // }

    // public function checkoutPackage05()
    // {
    //     require_once('application/libraries/stripe-php/init.php');
    //     // This is a public sample test API key.
    //     // Don’t submit any personally identifiable information in requests made with this key.
    //     // Sign in to see your own test API key embedded in code samples.
    //     \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

    //     header('Content-Type: application/json');

    //     $YOUR_DOMAIN = g('base_url');

    //     $checkout_session1 = \Stripe\Checkout\Session::create([
    //         'mode' => 'subscription',
    //         'allow_promotion_codes' => true,
    //         'line_items' => [[
    //             'price' => "price_1KW5frGgXkd9k1VNDp558EDv",
    //             'quantity' => 1,
    //         ]],
    //         'success_url' => g('base_url') . "user/subscription",
    //         'cancel_url' => g('base_url'),
    //     ]);
    //     // debug($checkout_session,1);
    //     header("HTTP/1.1 303 See Other");
    //     header("Location: " . $checkout_session1->url);
    //     $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session1);
    // }


    // public function subscription()
    // {
    //     require_once('application/libraries/stripe-php/init.php');
    //     $stripe = new \Stripe\StripeClient(
    //         'sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ'
    //     );
    //     $package_value = $stripe->events->all(['limit' => 1]);
    //     $user_id = $this->session->userdata('user_save_latest');
    //     $payment_id = $this->session->userdata('user_payment_latest');
    //     $amount_paid = $package_value["data"][0]["data"]["object"]["amount_paid"];
    //     $coupon_name = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["name"];
    //     $percent_off = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["percent_off"];


    //     $param12345['where']['signup_id'] = $user_id;
    //     $user = $this->model_signup->find_one($param12345);

    //     $future_timestamp = strtotime("+1 month");
    //     $after_one_month_date = date('Y-m-d', $future_timestamp);

    //     if (isset($user) and array_filled($user)) {
    //         $id =  intval($user['signup_id']);
    //         $memeber_data =  $this->model_signup->update_by_pk($id, array(
    //             'signup_id' => $id,
    //             'signup_amount_paid' => $amount_paid,
    //             'signup_coupon_name' => $coupon_name,
    //             'signup_percent_off' => $percent_off,
    //             'after_one_month_date' => $after_one_month_date,
    //         ));
    //     }

    //     // payment data update in package table
    //     $param1236['where']['signup_payment_id'] = $payment_id;
    //     $user_payment = $this->model_signup_payment->find_one($param1236);
    //     if (isset($user_payment) and array_filled($user_payment)) {
    //         $id =  intval($user_payment['signup_payment_id']);
    //         $memeber_data_payment =  $this->model_signup_payment->update_by_pk($id, array(
    //             'signup_payment_id' => $id,
    //             'signup_subscription_amount' => $amount_paid,
    //         ));
    //     }
    //     // debug(1,1);
    //     // signup_subscription_amount
    //     if ($memeber_data > 0) {
    //         // $user_file23 = $this->session->userdata('user_save_file');
    //         // $param123457['where']['signup_id'] = $user_id;
    //         // $user_file = $this->model_signup->find_one($param123457);
    //         // $id3 =  intval($user_file['signup_id']);

    //         // $file_name12 =  $this->session->userdata('file_name1');
    //         // $file_name23 =  $this->session->userdata('file_name');
    //         // // debug($file_name1);
    //         // //  debug($file_name);
    //         // $memeber_data_file =  $this->model_signup->update_by_pk($id3, array(
    //         //     'signup_insurance_company_image' => $file_name12,
    //         //     'signup_w_9_image' => $file_name23,
    //         // ));
    //     }
    //     redirect(base_url() . 'information-page');
    // }
    // public function memebr_amount_pay()
    // {
    //     $user_id = $this->session->userdata('user_save_latest');
    //     $param12345['where']['signup_id'] = $user_id;
    //     $user = $this->model_signup->find_one($param12345);

    //     require_once('application/libraries/stripe-php/init.php');
    //     \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');
    //     header('Content-Type: application/json');
    //     $YOUR_DOMAIN = g('base_url');
    //     $checkout_session32 = \Stripe\Checkout\Session::create([
    //         'payment_method_types' => ['card'],
    //         'line_items' => [[
    //             'price_data' => [
    //                 'currency' => 'usd',
    //                 'product_data' => [
    //                     'name' => 'Members Amount',
    //                 ],
    //                 'unit_amount' => $this->session->userdata('memberAmount') * 100,
    //             ],
    //             'quantity' => 1,
    //         ]],
    //         'mode' => 'payment',
    //         'success_url' =>  g('base_url') . "user/member_amount_update",
    //         'cancel_url' => g('base_url'),

    //     ]);
    //     header("HTTP/1.1 303 See Other");
    //     header("Location: " . $checkout_session32->url);
    //     $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session32);
    // }

    // public function member_amount_update()
    // {
    //     $this->session->set_flashdata('success_payment', 'You will receive an approval or denial email within 48-72.You are responsible for the background check regardless of approval/denial. In the event you are denied, you will be credited back the subscription fee');
    //     $memberAmount = $this->session->userdata('memberAmount');
    //     $post_signup = $this->session->userdata('post_signup');
    //     $user_id = $this->session->userdata('user_save_latest');

    //     if ($this->session->userdata('packageAmount') == $post_signup['signup_package_amount']) {
    //         $memeber_data_file =  $this->model_signup->update_by_pk($user_id, array(
    //             'signup_package_total_amount' => $this->session->userdata('calcultedDiscountAmount1'),
    //             'signup_members_amount' => $memberAmount,
    //             'signup_status_final_payment' => 1,
    //         ));
    //     } else {
    //         $memeber_data_file =  $this->model_signup->update_by_pk($user_id, array(
    //             'signup_package_total_amount' => $post_signup['signup_package_amount'] + $memberAmount,
    //             'signup_members_amount' => $memberAmount,
    //             'signup_status_final_payment' => 1,

    //         ));
    //     }
    //     redirect(base_url() .  "user-login?type=2");
    // }

    public function backgroundcheck()
    {
        $this->load_view('backgroundpayemt');
    }


    public function webhookListener()
    {
        require_once('application/libraries/stripe-php/init.php');
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

        // If you are testing your webhook locally with the Stripe CLI you
        // can find the endpoint's secret by running `stripe listen`
        // Otherwise, find your endpoint's secret in your webhook settings in the Developer Dashboard
        $endpoint_secret = 'whsec_ucDqIB1RnAfFcM3WXxkrXILmtTIsApTg';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            $memeber_data =  $this->model_signup->update_by_pk('47', array(

                'signup_coupon_name' => "catchit",

            ));
            http_response_code(400);
            exit();
        }

        // Handle the event
        switch ($event->type) {
            case 'charge.succeeded':
                $memeber_data =  $this->model_signup->update_by_pk('47', array(

                    'signup_coupon_name' => "Next day update hy tomo roy charge succees",
                    'signup_amount_paid' => $payload,
                    'signup_note' => "chrage.succeeded",

                ));
                // $paymentIntent = $event->data->object; // contains a \Stripe\PaymentIntent
                // handlePaymentIntentSucceeded($paymentIntent);
                break;
            case 'customer.subscription.updated':
                $memeber_data =  $this->model_signup->update_by_pk('47', array(
                    'signup_coupon_name' => "Next day update roy abcd efgth chrage updated",
                    'signup_amount_paid' => $payload,
                    'signup_form_detail' => "customer.subscription.updated",
                ));
                break;
                // ... handle other event types

            default:
                echo 'Received unknown event type ' . $event->type;
        }

        http_response_code(200);
    }
}
