<?

class Model_signup_payment extends MY_Model
{

    protected $_table = 'signup_payment';
    protected $_field_prefix = 'signup_payment_';
    protected $_pk = 'signup_payment_id';
    protected $_status_field = 'signup_payment_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        //$this->pagination_params['fields'] = "signup_payment_id,signup_payment_firstname,signup_payment_lastname,signup_payment_email,signup_payment_status";
        $this->pagination_params['fields'] = "signup_payment_id,  signup_payment_name, signup_payment_email, signup_payment_status";;

        // Call the Model constructor
        parent::__construct();
    }

    public function login($data)
    {
        // Get CodeIgnier Instance
        $CI = & get_instance();

        $params['where']['signup_payment_email'] = $data['signup_payment_email'];
        $params['where']['signup_payment_password'] =$data['signup_payment_password'];
        $signup_payment = $this->find_one($params , true);

        // debug('$signup_payment');
        // debug($data,1);

        if (!$signup_payment) {
            $CI->form_validation->set_message('signup_payment_check', 'Incorrect signup_paymentname or ID');
            return FALSE;
        } else {
            $this->set_signup_payment_session($signup_payment);
            return true;
        }

    }

    public function auto_login($user_id)
    {
        // Set params
        $params['where']['signup_payment_id'] = $user_id;
        // Query
        $user = $this->model_signup_payment->find_one_active($params);
        // Get CodeIgnier Instance

        $this->set_user_session($user);
    }

    // Set Session for login user
    public function set_user_session($signup_payment)
    {
        // Set data
        $array = array(
            'signup_payment_id' => $signup_payment['signup_payment_id'],
            'signup_payment_type' => $signup_payment['signup_payment_type'],
            'signup_payment_name' => ucfirst($signup_payment['signup_payment_name']),
            //'signup_payment_lastname' => ucfirst($signup_payment['signup_payment_lastname']),
            'signup_payment_company' => $signup_payment['signup_payment_company'],
            'signup_payment_email' => $signup_payment['signup_payment_email'],
            'signup_payment_username' => $signup_payment['signup_payment_username'],
            'signup_payment_address' => $signup_payment['signup_payment_address'],
            'signup_payment_zip' => $signup_payment['signup_payment_zip'],
            'signup_payment_city' => $signup_payment['signup_payment_city'],
            'signup_payment_state' => $signup_payment['signup_payment_state'],
            'signup_payment_country' => $signup_payment['signup_payment_country'],
            'signup_payment_contact' => $signup_payment['signup_payment_contact'],
            'signup_payment_image' =>  $signup_payment['signup_payment_background_check_image'],
            'signup_payment_createdon'=>$signup_payment['signup_payment_createdon'],
            
            //'type'=>'1' // for teacher and parents
        );
        // Set session
        $this->session->set_userdata('userdata', $array);

    }

    // Update user session
    public function update_user_session($signup_payment)
    {
        // Get user session
        $user_session = $this->session->userdata('userdata');
        // Loop each session
        foreach($signup_payment as $key=>$value):
            $user_session[$key] = $value;
            $this->session->set_userdata('userdata',$user_session);
        endforeach;
    }

    // Get total members
    public function get_total_members()
    {
        // Set params
        $params['where_string'] = " signup_payment_status!=2";
        $result = $this->find_count($params);
        return $result;
    }

    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $data =  array(

            'signup_payment_id' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'signup_payment_user_id' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_user_id',
                'label' => 'User ID',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'signup_payment_package_name' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_package_name',
                'label' => 'Package Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'signup_payment_package_amount' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_package_amount',
                'label' => 'Payment Amount',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'signup_payment_package_jobs' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_package_jobs',
                'label' => 'Package Jobs',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            
            'signup_payment_package_total_amount' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_package_total_amount',
                'label' => 'Payment Amount',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            /*'signup_payment_createdon' => array(
                'table' => $this->_table,
                'name' => 'signup_payment_createdon',
                'label' => 'Createdon',
                'type' => 'created',
                'default'=>date("Y-m-d H:i:s"),
                'attributes' => array(),
                'rules' => 'trim'
            ),*/
        );

if($this->uri->segment(4)!=null){
    unset($data['signup_payment_password']);
}

if ($specific_field)
    return $data[$specific_field];
else
    return $data;
}
}
