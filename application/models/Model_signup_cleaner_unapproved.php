<?

class Model_signup_cleaner_unapproved extends MY_Model
{

    protected $_table = 'signup';
    protected $_field_prefix = 'signup_';
    protected $_pk = 'signup_id';
    protected $_status_field = 'signup_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {

        // Call the Model constructor
        //$this->pagination_params['fields'] = "signup_id,signup_firstname,signup_lastname,signup_email,signup_status";
        $this->pagination_params['fields'] = "signup_id,signup_name,signup_lastname, signup_email,signup_contact,signup_zip,signup_status_final_payment,signup_status";
        // $this->pagination_params['where_string'] = "signup_status ="."0";
        $this->pagination_params['where_string'] = "signup_type = '2' and signup_status ='0'";
        // $this->pagination_params['where_string'] = "signup_type ="."2";
        // Call the Model constructor
        parent::__construct();
        
    }

    public function login($data)
    {
        // Get CodeIgnier Instance
        $CI = & get_instance();

        $params['where']['signup_email'] = $data['signup_email'];
        $params['where']['signup_password'] =$data['signup_password'];
        $signup = $this->find_one($params , true);

        // debug('$signup');
        // debug($data,1);

        if (!$signup) {
            $CI->form_validation->set_message('signup_check', 'Incorrect signupname or ID');
            return FALSE;
        } else {
            $this->set_signup_session($signup);
            return true;
        }

    }

    public function auto_login($user_id)
    {
        // Set params
        $params['where']['signup_id'] = $user_id;
        // Query
        $user = $this->Model_signup_cleaner->find_one_active($params);
        // Get CodeIgnier Instance

        $this->set_user_session($user);
    }

    // public function auto_login_relator($user_id)
    // {
    //     // Set params
    //     $params['where']['signup_id'] = $user_id;
    //     // Query
    //     $user = $this->Model_signup_cleaner->find_one_active($params);
    //     // Get CodeIgnier Instance

    //     $this->set_user_session($user);
    // }

    // Set Session for login user
    public function set_user_session($signup)
    {
        // Set data
        $array = array(
            'signup_id' => $signup['signup_id'],
            'signup_type' => $signup['signup_type'],
            'signup_name' => ucfirst($signup['signup_name']),
            //'signup_lastname' => ucfirst($signup['signup_lastname']),
            'signup_company' => $signup['signup_company'],
            'signup_address_lat' => $signup['signup_address_lat'],
            'signup_address_lng' => $signup['signup_address_lng'],
            'signup_email' => $signup['signup_email'],
            'signup_username' => $signup['signup_username'],
            'signup_address' => $signup['signup_address'],
            'signup_zip' => $signup['signup_zip'],
            'signup_city' => $signup['signup_city'],
            'signup_state' => $signup['signup_state'],
            'signup_country' => $signup['signup_country'],
            'signup_contact' => $signup['signup_contact'],
            'signup_image' =>  $signup['signup_background_check_image'],
            'signup_createdon'=>$signup['signup_createdon'],
            
            //'type'=>'1' // for teacher and parents
        );
        // Set session
        $this->session->set_userdata('userdata', $array);

    }

    // Update user session
    public function update_user_session($signup)
    {
        // Get user session
        $user_session = $this->session->userdata('userdata');
        // Loop each session
        foreach($signup as $key=>$value):
            $user_session[$key] = $value;
            $this->session->set_userdata('userdata',$user_session);
        endforeach;
    }

    // Get total members
    public function get_total_members()
    {
        // Set params
        $params['where_string'] = " signup_status != 2";
        $result = $this->find_count($params);
        return $result;
    }

    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $data =  array(

            'signup_id' => array(
                'table' => $this->_table,
                'name' => 'signup_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            'signup_type' => array(
                'table' => $this->_table,
                'name' => 'signup_type',
                'label' => 'Type',
                'type' => 'dropdown',
                'list_data'=>array(
                    '1'=>'REAL ESTATE PROFESSIONALS',
                    '2'=>'CLEANING PROFESSIONALS',
                ),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'required|strtolower|trim|htmlentities'
            ),
            'signup_name' => array(
                'table' => $this->_table,
                'name' => 'signup_name',
                'label' => 'First Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),

            'signup_package_job' => array(
                'table' => $this->_table,
                'name' => 'signup_package_job',
                'label' => 'Package job',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities|min_length[3]'
            ),

            'signup_form_detail' => array(
                'table' => $this->_table,
                'name' => 'signup_form_detail',
                'label' => 'Form Detail',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities|min_length[3]'
            ),
            
            'signup_members_amount' => array(
                'table' => $this->_table,
                'name' => 'signup_members_amount',
                'label' => 'Member Amount',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities|min_length[3]'
            ),
            'signup_update_info' => array(
                'table' => $this->_table,
                'name' => 'signup_update_info',
                'label' => 'Update',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_lastname' => array(
                'table' => $this->_table,
                'name' => 'signup_lastname',
                'label' => 'Last Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities|min_length[3]'
            ),

            'signup_contact' => array(
                'table' => $this->_table,
                'name' => 'signup_contact',
                'label' => ' Contact Number ',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'trim|htmlentities|regex_match[/^[\d\(\)\-+ ]+$/]'
            ),

            'signup_miles' => array(
                'table' => $this->_table,
                'name' => 'signup_miles',
                'label' => 'Miles',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes'   => array('class'=>'readonlytxt'),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_email' => array(
                'table' => $this->_table,
                'name' => 'signup_email',
                'label' => 'Email',
                'type' => (!empty($is_required_image)?'text':'readonly'),
                'attributes'   => array('class'=>'readonlytxt'),
                'js_rules' => 'required',
                'rules' => 'required|valid_email|strtolower|trim|htmlentities|is_unique[' . $this->_table . '.' . $this->_field_prefix . 'email]'
            ),

            'signup_password' => array(
                'table' => $this->_table,
                'name' => 'signup_password',
                'label' => 'Password',
                'type' => (!empty($is_required_image)?'password':'hidden'),
                'default' => '',
                'attributes' => array(),
                'rules' => 'trim|min_length[8]|md5'
                
            ),

            // 'signup_localisation' => array(
            //     'table' => $this->_table,
            //     'name' => 'signup_localisation',
            //     'label' => 'Localisation',
            //     'type' => 'text',
            //     'attributes' => array(),
            //     'js_rules' => '',
            //     'rules' => 'strtolower|trim|htmlentities|min_length[3]'
            // ),

            'signup_years_in_business' => array(
                'table' => $this->_table,
                'name' => 'signup_years_in_business',
                'label' => 'Years In Business',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_team_name' => array(
                'table' => $this->_table,
                'name' => 'signup_team_name',
                'label' => 'Team Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_team_insured' => array(
                'table' => $this->_table,
                'name' => 'signup_team_insured',
                'label' => 'Team Insured',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_team_contact' => array(
                'table' => $this->_table,
                'name' => 'signup_team_contact',
                'label' => 'Team Contact',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_team_email' => array(
                'table' => $this->_table,
                'name' => 'signup_team_email',
                'label' => 'email',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_zip' => array(
                'table' => $this->_table,
                'name' => 'signup_zip',
                'label' => 'Zip code',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_city' => array(
                'table' => $this->_table,
                'name' => 'signup_city',
                'label' => 'City',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_address' => array(
                'table' => $this->_table,
                'name' => 'signup_address',
                'label' => 'Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
        
            'signup_address_lat' => array(
                'table' => $this->_table,
                'name' => 'signup_address_lat',
                'label' => 'Address Lat',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_address_lng' => array(
                'table' => $this->_table,
                'name' => 'signup_address_lng',
                'label' => 'Address Lng',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_state' => array(
                'table' => $this->_table,
                'name' => 'signup_state',
                'label' => 'State',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_country' => array(
                'table' => $this->_table,
                'name' => 'signup_country',
                'label' => 'Country',
                'type' => 'text',
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),



            'signup_company' => array(
                'table' => $this->_table,
                'name' => 'signup_company',
                'label' => ' Company',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            // Reference  data
            'signup_ref1_name' => array(
                'table' => $this->_table,
                'name' => 'signup_ref1_name',
                'label' => 'Reference1 Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref1_contact' => array(
                'table' => $this->_table,
                'name' => 'signup_ref1_contact',
                'label' => 'Reference1 Contact',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref1_address' => array(
                'table' => $this->_table,
                'name' => 'signup_ref1_address',
                'label' => 'Reference1 Address',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_ref1_relation' => array(
                'table' => $this->_table,
                'name' => 'signup_ref1_relation',
                'label' => 'Reference1 Relation',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_ref2_name' => array(
                'table' => $this->_table,
                'name' => 'signup_ref2_name',
                'label' => 'Reference2 Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref2_contact' => array(
                'table' => $this->_table,
                'name' => 'signup_ref2_contact',
                'label' => 'Reference2 Contact',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref2_address' => array(
                'table' => $this->_table,
                'name' => 'signup_ref2_address',
                'label' => 'Reference2 Address',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_ref2_relation' => array(
                'table' => $this->_table,
                'name' => 'signup_ref2_relation',
                'label' => 'Reference2 Relation',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            
            'signup_ref3_name' => array(
                'table' => $this->_table,
                'name' => 'signup_ref3_name',
                'label' => 'Reference3 Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref3_contact' => array(
                'table' => $this->_table,
                'name' => 'signup_ref3_contact',
                'label' => 'Reference3 Contact',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref3_address' => array(
                'table' => $this->_table,
                'name' => 'signup_ref3_address',
                'label' => 'Reference3 Address',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_ref3_relation' => array(
                'table' => $this->_table,
                'name' => 'signup_ref3_relation',
                'label' => 'Reference3 Relation',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),


            'signup_insurance_company' => array(
                'table' => $this->_table,
                'name' => 'signup_insurance_company',
                'label' => 'Insurance Company',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_policy_no' => array(
                'table' => $this->_table,
                'name' => 'signup_policy_no',
                'label' => 'Policy No',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                // 'js_rules' => 'required',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_token' => array(
                'table'   => $this->_table,
                'name'   => 'signup_token',
                'label'   => 'Signup Token',
                'type'   => 'hidden',
                'list_data' => array(
                ) ,
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"7%"),
                'rules'   => 'trim'
            ),
            
            
            'signup_insurance_company_image' => array(
                'table' => $this->_table,
                'name' => 'signup_insurance_company_image',
                'label' => 'Insurance Image',
                'name_path' => 'signup_insurance_company_path',
                'upload_config' => 'site_upload_signup',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'allow_ext'=>'doc|dox|pdf',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            'signup_w_9_image' => array(
                'table' => $this->_table,
                'name' => 'signup_w_9_image',
                'label' => 'W_9 Image',
                'name_path' => 'signup_w_9_path',
                'upload_config' => 'site_upload_signup',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'allow_ext'=>'doc|dox|pdf',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            'signup_individual_team' => array(
                'table' => $this->_table,
                'name' => 'signup_individual_team',
                'label' => 'Individual_Team',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'list_data' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_status'=> array(
                'table' => $this->_table,
                'name' => 'signup_status',
                'label' => 'Status',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                   0 => "<span class='label label-danger'>Inactive</span>" ,
                   1 =>  "<span class='label label-primary'>Active</span>"
               ) ,
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),
            'signup_status_cleaner'=> array(
                'table' => $this->_table,
                'name' => 'signup_status_cleaner',
                'label' => 'Status Cleaner',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                   0 => "<span class='label label-danger'>Inactive</span>" ,
                   1 =>  "<span class='label label-primary'>Active</span>"
               ) ,
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),

            
            'signup_status_final_payment'=> array(
                'table' => $this->_table,
                'name' => 'signup_status_final_payment',
                'label' => 'Paid',
                'type' => 'switch',
                'type_dt' => 'switch',
                // 'type_filter_dt' => 'dropdown',
                'list_data' => array(
                   0 => "<span class='label label-danger'>No</span>" ,
                   1 =>  "<span class='label label-primary'>Yes</span>"
               ) ,
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),

            'signup_brokerage_name' => array(
                'table' => $this->_table,
                'name' => 'signup_brokerage_name',
                'label' => 'Brokerage Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_package_name' => array(
                'table' => $this->_table,
                'name' => 'signup_package_name',
                'label' => 'Package Name',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_pakage_amount' => array(
                'table' => $this->_table,
                'name' => 'signup_pakage_amount',
                'label' => 'Package Amount',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_office_address' => array(
                'table' => $this->_table,
                'name' => 'signup_office_address',
                'label' => 'Office Address',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_agent_license_number' => array(
                'table' => $this->_table,
                'name' => 'signup_agent_license_number',
                'label' => 'Agent License Number',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_office_license_number' => array(
                'table' => $this->_table,
                'name' => 'signup_office_license_number',
                'label' => 'Office License Number',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_mls_network' => array(
                'table' => $this->_table,
                'name' => 'signup_mls_network',
                'label' => 'Mls Network',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'signup_mls_id' => array(
                'table' => $this->_table,
                'name' => 'signup_mls_id',
                'label' => 'Mls Id',
                'type' => (!empty($is_required_image)?'text':'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'signup_createdon' => array(
                'table' => $this->_table,
                'name' => 'signup_createdon',
                'label' => 'Created',
                'type' => 'created',
                'default'=>date("Y-m-d H:i:s"),
                'attributes' => array(),
                'rules' => 'trim'
            ),
        );

if($this->uri->segment(4)!=null){
    unset($data['signup_password']);
}

if ($specific_field)
    return $data[$specific_field];
else
    return $data;
}
}
