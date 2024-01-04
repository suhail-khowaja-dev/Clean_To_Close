<?
class Model_email extends MY_Model
{

    /**
     * Email MODEL
     *
     */

    private $from = 'mikejason014@gmail.com';
    private $to = 'mikejason014@gmail.com';

    private $customerSportEmail = 'customersupport@lms.com';
    private $salesEmail = 'sales@lms.com';
    private $technicalEmail = 'technical@lms.com';
    private $developerEmail = 'mikejason014@gmail.com';


    private $_template = 'query';

    function __construct()
    {
        parent::__construct();

        self::_set();
    }


    function _set()
    {
        // set from email
        $this->from = $this->_set_email();


        // set template
        //$this->_template = '_template';
    }

    private function _set_email()
    {
        $this->load->model('model_config');

        $config_info = $this->model_config->find_by_pk(6);

        if (isset($config_info) && array_filled($config_info))
            return $config_info['config_value'];
        else
            return 'dalton.developer@gmail.com';
    }


    public function notification_delete_user($userID)
    {
        $param['fields'] = 'signup_id,signup_fname,signup_lname,signup_email';
        $user_data = $this->model_signup->find_by_pk($userID, false, $param);

        $this->_notification_delete_user('user', $user_data);

        $this->_notification_delete_user('admin', $user_data);
    }


    public function _notification_delete_user($type = 'user', $user_data)
    {
        $message = '';

        if ($type == 'user') {
            $message .= 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
            $message .= "Your account has been deleted in our website.<br />";
            $to = $this->to;
            $from = $this->from;
        } else {
            $message .= "Dear Admin<br />";
            $message .= "One account has been deleted in website.<br />";
            $to = $this->from;
            $from = $this->from;
        }


        $param['form_input']['id'] = $user_data['signup_id'];
        $param['form_input']['first_name'] = ucfirst($user_data['signup_fname']);
        $param['form_input']['last_name'] = ucfirst($user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['status'] = 'Account Delete';

        $subject = "User account Deleted";


        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    public function notification_delete_story($id)
    {
        $story_data = $this->model_story->find_by_pk($id);

        $user_data = $this->model_signup->find_by_pk($story_data['story_userid']);


        $subject = "Story Deleted";

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        /**
        CLIENT PARAM
         */

        $message = 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Your Story # " . $story_data['story_id'] . "(" . $story_data['story_title'] . ") has been deleted in our website.<br />";
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        // client
        parent::email_structure($this->to, $this->from, $subject, $msg);


        /**
        ADMIN PARAM
         */

        $message = "Dear Admin<br />";
        $message .= "One Story # " . $story_data['story_id'] . "(" . $story_data['story_title'] . ") has been deleted in website.<br />";
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);


        // client
        parent::email_structure($this->from, $this->from, $subject, $msg);

        return true;
    }


    public function email_new_story($id)
    {
        $story_data = $this->model_story->find_by_pk($id);

        $user_data = $this->model_signup->find_by_pk($story_data['story_userid']);


        $this->to = $user_data['signup_email'];

        $subject = "New story pending for approval";

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        $message = 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Your Story has been uploaded, pending for approval from administrator<br />";
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        // client
        parent::email_structure($this->to, $this->from, $subject, $msg);

        /*
         admin Param
        */



        $subject = "New story has been uploaded pending for approval";

        $url = la('story/add/') . $id;

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        $message = 'Dear Admin <br />';
        $message .= "New Story has been uploaded, pending for approval please <a href='" . $url . "'>Click Here</a> <br />";
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;
        $param['form_input']['link'] = $url;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);


        parent::email_structure($this->from, $this->from, $subject, $msg);

        return true;
    }



    public function email_story_approve($id)
    {
        $story_data = $this->model_story->find_by_pk($id);

        $user_data = $this->model_signup->find_by_pk($story_data['story_userid']);


        $this->to = $user_data['signup_email'];

        $subject = "story Status changed Approve";

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        $message = 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Your Story status has been changed, new status of Approve please see your story in our website<br />";
        $message .= 'Please click here . ' . l('');
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        // client
        parent::email_structure($this->to, $this->from, $subject, $msg);

        /*
         admin Param
        */



        $subject = "Story has been Changed";

        $url = la('story/add/') . $id;

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        $message = 'Dear Admin <br />';
        $message .= "Your Story status has been changed, new status of Approve please see your story in our website<br />";
        $message .= 'Please click here . ' . l('');
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;
        $param['form_input']['link'] = $url;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);


        parent::email_structure($this->from, $this->from, $subject, $msg);

        return true;
    }

    // Disapproved story by admin start
    public function email_story_disapprove($id)
    {
        $story_data = $this->model_story->find_by_pk($id);

        $user_data = $this->model_signup->find_by_pk($story_data['story_userid']);


        $this->to = $user_data['signup_email'];

        $subject = "Story Status changed Disapproved";

        $param['form_input']['customer_name'] = ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['subject'] = $subject;


        $message = 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Your Story status has been Disapproved by Admin.<br />";
        $message .= "Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        // client
        parent::email_structure($user_data['signup_email'], $this->from, $subject, $msg);

        return true;
    }
    // Disapproved story by admin end

    // Create user email
    public function _notification_create_user($user_data, $inserted_id)
    {
        $message = '';

        $message .= 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Registration has been successfully.Now you can Login to proceed further. <br/>";
        $message .= "Thanks for Registration <br />";
        $to = $user_data['signup_email'];
        $from = $this->from;

        $param['form_input']['id'] = $inserted_id;
        $param['form_input']['first_name'] = ucfirst($user_data['signup_fname']);
        $param['form_input']['last_name'] = ucfirst($user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['status'] = 'Account Create';

        $subject = "User Registration";


        $message .= "<br /> Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    // Inquiry Email
    public function inquiry_email($user_data)
    {
        $message = '';

        $message .= 'Dear ' . ucfirst($user_data['inquiry_fullname']) . "<br />";
        $message .= "Thank you for your Inquiry. We will contact you shortly. <br/>";
        $to = $user_data['inquiry_email'];
        $from = g('db.admin.support_email');

        $subject = g('site_name') . " - Inquiry";


        $message .= "<br /> Thanks & Regards <br />";
        $message .= g('site_name') . "<br />";

        //$param['form_input']['comments'] = $message;
        $user_data['message'] = $message;


        $msg = $this->load->view('_layout/email_template/inquiry', $user_data, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    // Send confirmation email to user (confirmation) (template "query.php)
    public function _verification_email($user_data, $inserted_id)
    {
        $message = '';

        $message .= 'Dear ' . ucfirst($user_data['signup_firstname'] . ' ' . $user_data['signup_lastname']) . ",<br />";
        $message .= "Your account has been created in our website.Please verify the below link : <br />";
        $message .= "<a href='" . g('base_url') . "user/confirmation?email=" . $user_data['signup_email'] . "&token=" . $user_data['signup_token'] . "'>CLICK HERE</a>" . "  <br />";
        $to = $user_data['signup_email'];
        //$from = $this->from ;
        $from = g("db.admin.support_email");

        /*$param['form_input']['id'] = $inserted_id;
        $param['form_input']['first_name'] = ucfirst($user_data['signup_firstname']);
        $param['form_input']['last_name'] = ucfirst($user_data['signup_lastname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['status'] = 'Account Create';*/

        $subject = "User Registration";


        $message .= "<br /> Thanks & Regards <br />";

        $param['comments']   = $message;
        $param['logo'] = $this->model_logo->find_one_active();


        //$msg = $this->load->view('_layout/email_template/'.$this->_template , $param , true);
        $msg = $this->load->view('_layout/email_template/confirmation_email', $param, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    public function send_welcome_email($to)
    {

        // debug($inserted_id,1);

        $this->load->library('email');

        $db_to = $to;
        // $db_to = 'johndavid78663@gmail.com' ;
        $send_from = g('db.admin.support_email');
        $name = g('site_name');

        $send_to = $db_to;
        $title = $name . ' – New Account';


        $message = $this->load->view(
            "_layout/email_template/welcome",
            array(
                "form_input" => $_POST['signup']
            ),
            true
        );

        $this->email->from($send_from, $name);
        $this->email->to($send_to);
        $this->email->subject($title);
        $this->email->set_mailtype("html");
        $this->email->message($message);

        $this->email->send();
    }

    // Recover username / password (template "reset_password.php)
    public function _notification_forgot_password($email)
    {

        // debug($email,1);

        $message = '';

        $param13['where']['signup_email'] = $email['signup_email'];
        $param['user_email'] = $this->model_signup->find_one($param13);
        // debug($param['user_email'],1);

        $amout_cleaner = $this->model_emails->find_all();
        // debug($amout_cleaner,1);

        //   debug($param['user_email'],1);

        $message .= 'Dear ' . ucfirst($param['user_email']['signup_name'] . ' ' . $param['user_email']['signup_lastname']) . ",<br />";
        //$message .= "Your Password info<br />";
        $to = $param['user_email']['signup_email'];
        // debug($to);
        //$from = $this->from ;
        $from = $amout_cleaner[0]['emails_value'];
        // debug($from,1);

        $subject = "Password Reset";

        $message .= "Please visit the below link for Password change: <br />";
        $message .= "<a href='" . g('base_url') . "user/forgot_password?id=" . $param['user_email']['signup_id'] . "'>CLICK HERE</a>" . "  <br />";


        $message .= "<br /> Thanks & Regards <br />";

        //$param['form_input']['comments'] = $message;
        $param['comments'] = $message;
        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();

        $msg = $this->load->view('_layout/email_template/reset_password', $param, true);

        // debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    public function _notification_forgot_password_smtp($user_data, $token)
    {
        $message = '';

        $message .= 'Dear ' . ucfirst($user_data['signup_firstname'] . ' ' . $user_data['signup_lastname']) . ",<br />";
        //$message .= "Your Password info<br />";
        $to = $user_data['signup_email'];
        //$from = $this->from ;
        //$from = g("db.admin.support_email") ;
        $from = g("db.admin.service");


        $subject = "Password Reset";

        $message .= "Please visit the below link for Password change: <br />";
        $message .= "<a href='" . g('base_url') . "user/forgot-password?id=" . $user_data['signup_id'] . "&token=" . $token . "'>CLICK HERE</a>" . "  <br />";


        $message .= "<br /> Thanks & Regards <br />";

        //$param['form_input']['comments'] = $message;
        $param['comments'] = $message;
        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();

        $msg = $this->load->view('_layout/email_template/reset_password', $param, true);

        // debug($msg,1);

        $this->load->library('email');

        //SMTP & mail configuration
        /*$config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://mail.sbflamingo.com',
            'smtp_port' => 465,
            'smtp_user' => 'service@sbflamingo.com',
            'smtp_pass' => 'FHuKY,C)xFsn',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );*/
        $this->email->initialize();
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        $send_from =  $from;
        $name  = $send_from;
        $send_to = $to;

        $message = $msg;

        // debug($send_to);
        //  debug($send_from);
        //  debug($name);
        //  debug($message,1);



        $this->email->from($send_from, $name);
        $this->email->to($send_to);
        $this->email->subject($subject);
        $this->email->set_mailtype("html");
        $this->email->message($message);

        if (ENVIRONMENT == 'development') {
            return true;
        }

        if ($this->email->send()) {
            return true;
        } else {
            return false;
            //echo $this->email->print_debugger();
        }

        //parent::email_structure($to , $from ,$subject, $msg);
    }

    // Recover username / password (not using)
    public function _notification_recover_username_password($user_data)
    {
        $message = '';

        $message .= 'Dear ' . ucfirst($user_data['signup_fname'] . ' ' . $user_data['signup_lname']) . "<br />";
        $message .= "Your Password info has been provide: <br />";
        $to = $user_data['signup_email'];
        $from = $this->from;

        $param['form_input']['first_name'] = ucfirst($user_data['signup_fname']);
        $param['form_input']['last_name'] = ucfirst($user_data['signup_lname']);
        $param['form_input']['email'] = $user_data['signup_email'];
        $param['form_input']['password'] = pass_decrypt($user_data['signup_password']);
        $param['form_input']['status'] = 'Recover Username / Password';

        $subject = "Password Recovery";


        $message .= "<br /> Thanks & Regards <br />";

        $param['form_input']['comments'] = $message;


        $msg = $this->load->view('_layout/email_template/' . $this->_template, $param, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    public function client_email($to, $template, $title)
    {


        $this->load->library('email');
        //$this->email->initialize($config); // Add

        $db_to = g("db.admin.sales_email");
        $send_from = $this->from;
        $name = g('site_name');

        $send_to = $this->to;
        $title = 'Virtanix';

        $message = $template;


        $this->email->from($send_from);
        $this->email->to($send_to);
        $this->email->subject($title);
        $this->email->set_mailtype("html");
        $this->email->message($message);
        //$this->email->protocol('smtp');
        $this->email->send();
    }

    // Send email to all subscriber
    public function _new_job_email($subscribe_emails, $job_data, $insert_id, $company_name)
    {
        $message = '';

        $message .= 'Dear ' . ",<br />";
        $to = $subscribe_emails;
        //$from = $this->from ;
        $from = g("db.admin.subscriber_email");

        $subject = g('site_name') . ' - Job Opportunity';


        $message .= "<br /> Thanks & Regards <br />";

        $param['comments']   = $message;
        $param['job_data']   = $job_data;
        $param['insert_id']   = $insert_id;
        $param['company_name']   = $company_name;


        //$msg = $this->load->view('_layout/email_template/'.$this->_template , $param , true);
        $msg = $this->load->view('_layout/email_template/new_job', $param, true);

        parent::email_structure($to, $from, $subject, $msg);
    }

    // Send confirmation email to user (confirmation) (template "query.php)
    public function _subscribe_email($email)
    {
        $message = '';

        $amout_cleaner = $this->model_emails->find_all();

        $message .= "$email has been successfully subscribed.<br />";

        $to = $amout_cleaner[5]['emails_value'];
        
        $from = $amout_cleaner[0]['emails_value'];

        $subject = "User Subscription";


        $message .= "<br /> Thanks & Regards <br />";

        $param['comments']   = $message;

        $param['email']   = $email;

        $msg = $this->load->view('_layout/email_template/subscribe', $param, true);
        // Send to admin
        parent::email_structure($to, $from, $subject, $msg);
        $msg1 = $this->load->view('_layout/email_template/subscribe_user', $param, true);
        // Send to subscribe user
        parent::email_structure($email, $from, $subject, $msg1);
    }

    // Send email from admin (to all subscribers)
    public function _send_all_subscribers($email, $subject, $message)
    {
        $to = $email;
        $from = g("db.admin.subscriber_email");

        $param['message'] = $message;
        $param['email'] = $email;

        $msg = $this->load->view('_layout/email_template/bulk_subscribe_email', $param, true);


        parent::email_structure($to, $from, $subject, $msg);
    }

    // Only use for adshare project.
    public function notification_invoice_custom($id, $type = 'USER')
    {
        $id = intval($id);

        $invoice = $this->model_order->find_by_pk($id);

        $result = $invoice;
        // Company Letter Head
        $result['letter_head']['logo'] = $this->model_logo->get_logo();
        $result['letter_head']['name'] = $this->config->item('site_name');
        $result['letter_head']['address'] = g('db.admin.company_address');
        $result['letter_head']['phone'] = g('db.admin.company_phone');

        // Customer Info
        $result['customer_info']['name'] = ucfirst($invoice['order_firstname'] . ' ' . $invoice['order_lastname']);
        $result['customer_info']['address'] = $invoice['order_address1'];
        $result['customer_info']['phone'] = $invoice['order_phone'];
        $result['customer_info']['email'] = $invoice['order_email'];

        // Amount Info
        $result['amount_info']['sub_total'] = $invoice['order_amount'];
        $result['amount_info']['shipping_charges'] = 0;
        $result['amount_info']['tax'] = 0;
        $result['amount_info']['discount'] = 0;
        $total_amount = ($result['amount_info']['sub_total'] + $result['amount_info']['shipping_charges'] + $result['amount_info']['tax']) - $result['amount_info']['discount'];
        $result['amount_info']['total_amount'] = $total_amount;

        // Invoice Info
        $result['invoice_info']['no'] = $id;
        //$result['invoice_info']['payer'] = $invoice['uc_paypal_verify_sign'];
        $result['invoice_info']['date'] = date("M d,Y", strtotime($invoice['order_createdon']));
        $result['invoice_info']['invoice_amount'] = price($total_amount);

        //$result['items_info']['heading'] = array('Item','Price','Payment');
        $result['items_info']['heading'] = array('Price', 'Payment');
        $result['items_info']['item'][] = array(
            /*$invoice['order_firstname'] . " " . $invoice['order_lastname'],*/
            $total_amount,
            ucfirst('Completed'),
        );

        $content = $this->load->view('_layout/email_template/invoice', $result, true);
        //return $content = $this->load->view('_layout/email_template/invoice',$result,true);


        $send_to = $invoice['order_email'];


        $send_from = g('db.admin.email_contact_us');

        $subject = 'Payment Acknowledgement';

        parent::email_structure($send_to, $send_from, $subject, $content);

        return true;
    }

    public function invoice_email_temp($to, $template, $title)
    {


        $this->load->library('email');
        //$this->email->initialize($config); // Add

        //$db_to = g("db.admin.sales_email");
        $send_from = g("db.admin.sale");
        //$name = g('site_name');

        $send_to = $to;

        $message = $template;


        $this->email->from($send_from);
        $this->email->to($send_to);
        $this->email->subject($title);
        $this->email->set_mailtype("html");
        $this->email->message($message);
        //$this->email->protocol('smtp');
        $this->email->send();
    }

    public function notification_invoice($id, $type = 'USER')
    {
        $id = intval($id);

        $invoice = $this->model_user_credit->find_by_pk($id);

        $result = $invoice;
        // Company Letter Head
        $result['letter_head']['logo'] = $this->model_logo->get_logo();
        $result['letter_head']['name'] = g('site_title');
        $result['letter_head']['address'] = g('db.admin.address');
        $result['letter_head']['phone'] = g('db.admin.phone_number');

        // Customer Info
        $result['customer_info']['name'] = ucfirst($invoice['user_firstname'] . ' ' . $invoice['user_lastname']);
        $result['customer_info']['address'] = $invoice['ui_address_primary'];
        $result['customer_info']['phone'] = $invoice['ui_phone'];
        $result['customer_info']['email'] = $invoice['user_email'];

        // Amount Info
        $result['amount_info']['sub_total'] = $invoice['uc_credit_amount'];
        $result['amount_info']['shipping_charges'] = 0;
        $result['amount_info']['tax'] = 0;
        $result['amount_info']['discount'] = 0;
        $total_amount = ($result['amount_info']['sub_total'] + $result['amount_info']['shipping_charges'] + $result['amount_info']['tax']) - $result['amount_info']['discount'];
        $result['amount_info']['total_amount'] = $total_amount;

        // Invoice Info
        $result['invoice_info']['no'] = order_no($invoice['uc_id']);
        $result['invoice_info']['payer'] = $invoice['uc_paypal_verify_sign'];
        $result['invoice_info']['date'] = date("M d,Y", strtotime($invoice['uc_paypal_date']));
        $result['invoice_info']['invoice_amount'] = price($total_amount);

        // Items List
        //$result['items_info']['heading'] = array('Item','Rate','Quantity','Price','Description');
        // $result['items_info']['item'][] = array(
        //                                     'Front End Consultation',
        //                                     'Experience Review',
        //                                     '1',
        //                                     '150',
        //                                     'Description');


        $result['items_info']['heading'] = array('Item', 'Price', 'Payment');
        $result['items_info']['item'][] = array(
            $invoice['uc_credit_name'],
            price($invoice['uc_credit_amount']),
            ucfirst($invoice['uc_paypal_payment_status']),
        );

        $content = $this->load->view('_layout/email_template/email_template2', $result, true);


        if ($type == 'USER')
            $send_to = $invoice['user_email'];
        else
            $send_to = $this->_set_to_email();


        $send_from = $this->salesEmail;

        $subject = 'Payment Acknowledgement';

        parent::email_structure($send_to, $send_from, $subject, $content);

        return true;
    }

    // // invoice email
    // public function email_send_document($Data, $cleanear, $user)
    // {
    //     // debug($Data);
    //     // debug($cleanear);
    //     // debug($user,1);
    //     $message = '';
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $email = array(
    //         $Data[0]['realtoremail'], $Data[0]['buyer_email'], $Data[0]['seller_email'], $Data[0]['cooperating_agents_informations_seller'], $Data[0]['buyer_information'],
    //         $Data[0]['cooperating_agents_informations_buyer'], $Data[0]['seller_information']
    //     );
    //     $other_email = $Data[0]['otheremail'];
    //     // debug($email);
    //     // debug($other_email,1);
    //     //admin

    //     $admin_email = array($amout_cleaner[0]['emails_value']);
    //     $param['user'] = $user;
    //     $param['cleaning'] = $cleanear;
    //     $all_email = array_merge($email, $other_email, $admin_email);
    //     // debug($all_email,1);
    //     foreach ($all_email as $other_email_user) {
    //         $list = $other_email_user;
    //         $to = $list;
    //         $from = $amout_cleaner[0]['emails_value'];
    //         $subject = "Clean To Close -Invoice";
    //         // Get Logo
    //         $param['logo'] = $this->model_logo->find_one_active();
    //         $msg = $this->load->view('_layout/email_template/invoice_clean', $param, true, $email, $other_email);
    //         // debug($msg,1);
    //         parent::email_structure($to, $from, $subject, $msg);
    //     }
    // }

    // // cancel email
    // public function cancel_email($id)
    // {

    //     $param4['where']['cleaning_service_id'] = $id;
    //     $param['cancel_document'] = $this->model_cleaning_service->find_one($param4);
    //     // relator email
    //     $param5['where']['signup_id'] = $this->userid;
    //     $param['cancel__person_email'] = $this->model_signup->find_one($param5);

    //     // cleaner accept email
    //     $param6['where']['signup_id'] = $param['cancel_document']['cleaning_service_cleaner_id'];
    //     $param['cancel__cleaner_email'] = $this->model_signup->find_one($param6);

    //     $gernal_data = $param['cancel_document'];

    //     $relator_email = $param['cancel__person_email'];

    //     $cleaner_email =  $param['cancel__cleaner_email'];
    //     // debug($cleaner_email,1);
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($relator_email['signup_email'], $cleaner_email['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;
    //     // debug($to);
    //     $from =  $amout_cleaner[0]['emails_value'];
    //     $subject = "Clean To Close - Job Cancellation";
    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     $msg = $this->load->view('_layout/email_template/cancel_order_email', $param, true, $gernal_data, $relator_email, $cleaner_email);
    //     // debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // // realtor email

    // public function welcome_relator_email($inserted_id)
    // {
    //     # code...
    //     $param1['where']['signup_id'] = $inserted_id;
    //     $param['realtor_email'] = $this->model_signup->find_one($param1);

    //     $realtor_email_send =  $param['realtor_email'];
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($realtor_email_send['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     // debug($to);

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Welcome!";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/welcome_realtor_email', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // // cleaner email
    // public function welcome_cleaner_email($inserted_id)
    // {
    //     # code...
    //     $param2['where']['signup_id'] = $inserted_id;
    //     $param['cleaner_email'] = $this->model_signup->find_one($param2);

    //     $cleaner_email_send =  $param['cleaner_email'];
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($cleaner_email_send['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     // debug($to);

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Welcome!";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/welcome_cleaner_email', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // // cleaner email
    // public function update_date_email($id)
    // {
    //     // debug($id,1);
    //     // debug($cleaner_email,1);

    //     # code...
    //     // cleaning data
    //     $param3['where']['cleaning_service_id'] = $id;
    //     $param['cleaning_data'] = $this->model_cleaning_service->find_one($param3);

    //     // cleaner accept email
    //     $param8['where']['signup_id'] = $param['cleaning_data']['cleaning_service_cleaner_id'];
    //     $param['update_cleaner_email'] = $this->model_signup->find_one($param8);


    //     // reltor data
    //     $param7['where']['signup_id'] = $this->userid;
    //     $param['update_relator_email'] = $this->model_signup->find_one($param7);
    //     // debug($param['update_relator_email'],1);
    //     $amout_cleaner = $this->model_emails->find_all();
    //     // cleaner email
    //     $cleaner_email_send = $param['update_cleaner_email'];
    //     // debug($cleaner_email_send);
    //     $relator_email_update = $param['update_relator_email'];

    //     $list = array($cleaner_email_send['signup_email'], $relator_email_update['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     // debug($to);

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Reschedule Service Date/Time";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/update_email', $param, true, $cleaner_email_send, $relator_email_update);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // public function signup_email($update_email)
    // {
    //     // debug($_POST['cleaner'],1);
    //     # code...

    //     // $param10['where']['signup_id'] = $update_cleaner_email;
    //     // $param['update_cleaner_email'] = $this->model_signup->find_one($param10);
    //     // debug($param['update_cleaner_email'],1);
    //     $param['update_cleaner_email'] = $_POST['cleaner'];

    //     $amout_cleaner = $this->model_emails->find_all();

    //     $list = array($update_email['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     // debug($to);

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Account Approved";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/signup_email', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // public function add_member_email($memeber_data)
    // {

    //     // debug($inserted_id);
    //     # code...
    //     $param2['where']['team_name_id'] = $memeber_data;
    //     $param['team_member'] = $this->model_team_name->find_one($param2);
    //     // debug($param['team_member'],1);

    //     $param3['where']['signup_id'] =  $this->userid;
    //     $param['signup_team_member'] = $this->model_signup->find_one($param3);
    //     // $team_email_send =  $param['team_member'];
    //     $amout_cleaner = $this->model_emails->find_all();
    //     // $list = array($team_email_send['signup_email'], g("db.admin.email"));
    //     $to = $amout_cleaner[0]['emails_value'];

    //     // debug($to);

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Team Member Add";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/add_team_email', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }
    // public function zip_email($email_zip_data, $zipcode)
    // {
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $param["realtor"] = $email_zip_data;
    //     $to = $amout_cleaner[0]['emails_value'];
    //     $from = $amout_cleaner[0]['emails_value'];
    //     // $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Incorrect Zipcode";
    //     // debug($subject);

    //     // Get Logo
    //     $param["zip"] = $zipcode;
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/zip_code_email', $param, true);

    //     parent::email_structure($to, $from, $subject, $msg);
    //     echo json_encode(array(
    //         'status' => '1',
    //     ));
    // }

    // public function date_update($update_date){
    //         // debug($daterequest,1);
    //     # code...

    //     $param['update_date_admin'] = $update_date;
    //     // $param2['where']['team_name_id'] = $memeber_data;
    //     // $param['team_member'] = $this->model_team_name->find_one($param2);
    //     // debug($param['team_member'],1);
        

    //     // $param3['where']['signup_id'] =  $this->userid;
    //     // $param['signup_team_member'] = $this->model_signup->find_one($param3);
    //     // $team_email_send =  $param['team_member'];
    //     $amout_cleaner = $this->model_emails->find_all();
    //     // $list = array($team_email_send['signup_email'], g("db.admin.email"));
    //     $to = $amout_cleaner[0]['emails_value'];
    //     // debug($to);
    //     $from = $amout_cleaner[0]['emails_value'];
    //     $subject = "Clean To Close - Reschedule Job Request";
    //     // debug($subject);
    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/date_email', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }
    
      //arrival time  email 
    // public function arrival_time_email($inserted_id, $user_data, $relator_data, $clean_data)
    // {

    //     //  debug($clean_data,1);

    //     $message = '';

    //     $param1['where']['arrival_time_id'] = $inserted_id;
    //     $param['arrival_time_data'] = $this->model_arrival_time->find_one($param1);
    //     $param['user_data'] = $user_data;
    //     $param['cleaning_id'] = $clean_data;
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($user_data['signup_email'], $relator_data['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close -Arrival Time";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/arrival_time', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // left time email
    // public function left_time_email($inserted_id, $user_data, $relator_data, $clean_data)
    // {

    //     //  debug($clean_data,1);

    //     $message = '';

    //     $param1['where']['left_time_id'] = $inserted_id;
    //     $param['left_time_data'] = $this->model_left_time->find_one($param1);
    //     $param['user_data'] = $user_data;
    //     $param['cleaning_id'] = $clean_data;
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($user_data['signup_email'], $relator_data['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close -Left Time";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/left_time', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // upload document email
    // public function upload_email($inserted_id, $user_data, $relator1_data, $clean1_data, $arrival_time, $left_time)
    // {
    //     $message = '';

    //     $param1['where']['upload_document_id'] = $inserted_id;
    //     $param['upload_document'] = $this->model_upload_document->find_one($param1);
    //     $param['user_data'] = $user_data;
    //     $param['cleaning_id'] = $clean1_data;
    //     $param['arrival_time'] = $arrival_time;
    //     $param['left_time'] = $left_time;
    //     $amout_cleaner = $this->model_emails->find_all();
    //     $list = array($user_data['signup_email'], $relator1_data['signup_email'], $amout_cleaner[0]['emails_value']);
    //     $to = $list;

    //     $from = $amout_cleaner[0]['emails_value'];

    //     $subject = "Clean To Close - Upload Document";
    //     // debug($subject);

    //     // Get Logo
    //     $param['logo'] = $this->model_logo->find_one_active();
    //     //  debug($param['logo'],1);

    //     $msg = $this->load->view('_layout/email_template/upload_doc', $param, true);
    //     //  debug($msg,1);
    //     parent::email_structure($to, $from, $subject, $msg);
    // }

    // invoice email
    public function email_send_document($Data, $cleanear, $user)
    {
        //    debug($_GET['id'],1);
        $message = '';
        $amout_cleaner = $this->model_emails->find_all();
        $email = array(
            $Data[0]['realtoremail'], $Data[0]['buyer_email'], $Data[0]['seller_email'], $Data[0]['cooperating_agents_informations_seller'], $Data[0]['buyer_information'],
            $Data[0]['cooperating_agents_informations_buyer'], $Data[0]['seller_information'],$Data[0]['tittle_company_email']
        );
        $other_email = $Data[0]['otheremail'];
        // debug($email);
        // debug($other_email,1);
        //admin

        $admin_email = array($amout_cleaner[0]['emails_value']);

        $param['user'] = $user;
        $param['cleaning'] = $cleanear;
        // debug($param['cleaning'],1);
        $all_email = array_merge($email, $other_email, $admin_email);
        // debug($all_email,1);
        foreach ($all_email as $other_email_user) {
            $list = $other_email_user;
            $to = $list;
            $from = $amout_cleaner[0]['emails_value'];
            $subject = "Clean To Close -Invoice";
            // Get Logo
            $param['logo'] = $this->model_logo->find_one_active();
            $msg = $this->load->view('_layout/email_template/invoice_clean', $param, true, $email, $other_email);
            // debug($msg,1);
            parent::email_structure($to, $from, $subject, $msg);
        }
    }

    // cancel email
    public function cancel_email($id)
    {

        $param4['where']['cleaning_service_id'] = $id;
        $param['cancel_document'] = $this->model_cleaning_service->find_one($param4);
        // relator email
        $param5['where']['signup_id'] = $this->userid;
        $param['cancel__person_email'] = $this->model_signup->find_one($param5);

        // cleaner accept email
        $param6['where']['signup_id'] = $param['cancel_document']['cleaning_service_cleaner_id'];
        $param['cancel__cleaner_email'] = $this->model_signup->find_one($param6);

        $gernal_data = $param['cancel_document'];

        $relator_email = $param['cancel__person_email'];

        $cleaner_email =  $param['cancel__cleaner_email'];
        // debug($cleaner_email,1);
        $amout_cleaner = $this->model_emails->find_all();
        $list = array($relator_email['signup_email'], $cleaner_email['signup_email'], $amout_cleaner[2]['emails_value']);
        $to = $list;
        // debug($to);
        $from =  $amout_cleaner[2]['emails_value'];
        $subject = "Clean To Close - Job Cancellation";
        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        $msg = $this->load->view('_layout/email_template/cancel_order_email', $param, true, $gernal_data, $relator_email, $cleaner_email);
        // debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    // realtor email

    public function welcome_relator_email($inserted_id)
    {
        # code...
        $param1['where']['signup_id'] = $inserted_id;
        $param['realtor_email'] = $this->model_signup->find_one($param1);

        $realtor_email_send =  $param['realtor_email'];
        $amout_cleaner = $this->model_emails->find_all();
        $list = array($realtor_email_send['signup_email'], $amout_cleaner[0]['emails_value']);
        $to = $list;

        // debug($to);

        $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Welcome!";
        // debug($subject);

        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/welcome_realtor_email', $param, true);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    // cleaner email
    public function welcome_cleaner_email($inserted_id)
    {
        # code...
        $param2['where']['signup_id'] = $inserted_id;
        $param['cleaner_email'] = $this->model_signup->find_one($param2);

        $cleaner_email_send =  $param['cleaner_email'];
        $amout_cleaner = $this->model_emails->find_all();
        $list = array($cleaner_email_send['signup_email'], $amout_cleaner[0]['emails_value']);
        $to = $list;

        // debug($to);

        $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Welcome!";
        // debug($subject);

        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/welcome_cleaner_email', $param, true);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    // cleaner email
    public function update_date_email($id)
    {
        // debug($id,1);
        // debug($cleaner_email,1);

        # code...
        // cleaning data
        $param3['where']['cleaning_service_id'] = $id;
        $param['cleaning_data'] = $this->model_cleaning_service->find_one($param3);

        // cleaner accept email
        $param8['where']['signup_id'] = $param['cleaning_data']['cleaning_service_cleaner_id'];
        $param['update_cleaner_email'] = $this->model_signup->find_one($param8);


        // reltor data
        $param7['where']['signup_id'] = $this->userid;
        $param['update_relator_email'] = $this->model_signup->find_one($param7);
        // debug($param['update_relator_email'],1);
        $amout_cleaner = $this->model_emails->find_all();
        // cleaner email
        $cleaner_email_send = $param['update_cleaner_email'];
        // debug($cleaner_email_send);
        $relator_email_update = $param['update_relator_email'];

        $list = array($cleaner_email_send['signup_email'], $relator_email_update['signup_email'], $amout_cleaner[2]['emails_value']);
        $to = $list;

        // debug($to);

        $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Reschedule Service Date/Time";
        // debug($subject);

        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/update_email', $param, true, $cleaner_email_send, $relator_email_update);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    public function signup_email($update_email)
    {
        // debug($_POST['cleaner'],1);
        # code...

        // $param10['where']['signup_id'] = $update_cleaner_email;
        // $param['update_cleaner_email'] = $this->model_signup->find_one($param10);
        // debug($param['update_cleaner_email'],1);
        $param['update_cleaner_email'] = $_POST['cleaner'];

        $amout_cleaner = $this->model_emails->find_all();

        $list = array($update_email['signup_email'], $amout_cleaner[0]['emails_value']);
        $to = $list;

        // debug($to);

        $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Account Approved";
        // debug($subject);

        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/signup_email', $param, true);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }

    public function add_member_email($memeber_data)
    {

        // debug($inserted_id);
        # code...
        $param2['where']['team_name_id'] = $memeber_data;
        $param['team_member'] = $this->model_team_name->find_one($param2);
        // debug($param['team_member'],1);

        $param3['where']['signup_id'] =  $this->userid;
        $param['signup_team_member'] = $this->model_signup->find_one($param3);
        // $team_email_send =  $param['team_member'];
        $amout_cleaner = $this->model_emails->find_all();
        // $list = array($team_email_send['signup_email'], g("db.admin.email"));
        $to = $amout_cleaner[0]['emails_value'];

        // debug($to);

        $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Team Member Add";
        // debug($subject);

        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/add_team_email', $param, true);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }
    public function zip_email($email_zip_data, $zipcode)
    {
        $amout_cleaner = $this->model_emails->find_all();
        $param["realtor"] = $email_zip_data;
        $to = $amout_cleaner[0]['emails_value'];
        $from = $amout_cleaner[0]['emails_value'];
        // $from = $amout_cleaner[0]['emails_value'];

        $subject = "Clean To Close - Incorrect Zipcode";
        // debug($subject);

        // Get Logo
        $param["zip"] = $zipcode;
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/zip_code_email', $param, true);

        parent::email_structure($to, $from, $subject, $msg);
        echo json_encode(array(
            'status' => '1',
        ));
    }

    public function date_update($update_date){
            // debug($daterequest,1);
        # code...

        $param['update_date_admin'] = $update_date;
        // $param2['where']['team_name_id'] = $memeber_data;
        // $param['team_member'] = $this->model_team_name->find_one($param2);
        // debug($param['team_member'],1);
        

        // $param3['where']['signup_id'] =  $this->userid;
        // $param['signup_team_member'] = $this->model_signup->find_one($param3);
        // $team_email_send =  $param['team_member'];
        $amout_cleaner = $this->model_emails->find_all();
        // $list = array($team_email_send['signup_email'], g("db.admin.email"));
        $to = $amout_cleaner[4]['emails_value'];
        // debug($to);
        $from = $amout_cleaner[4]['emails_value'];
        $subject = "Clean To Close - Reschedule Job Request";
        // debug($subject);
        // Get Logo
        $param['logo'] = $this->model_logo->find_one_active();
        //  debug($param['logo'],1);

        $msg = $this->load->view('_layout/email_template/date_email', $param, true);
        //  debug($msg,1);
        parent::email_structure($to, $from, $subject, $msg);
    }
}
