<?

class Model_user_team extends MY_Model
{

    protected $_table = 'user_team';
    protected $_field_prefix = 'user_team_';
    protected $_pk = 'user_team_id';
    protected $_status_field = 'user_team_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        //$this->pagination_params['fields'] = "signup_id,signup_firstname,signup_lastname,signup_email,signup_status";
        $this->pagination_params['fields'] = "user_team_id, user_team_name, user_team_email, suser_team_status";

        // Call the Model constructor
        parent::__construct();
    }


    

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

    

  
    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $data =  array(

            'user_team_id' => array(
                'table' => $this->_table,
                'name' => 'user_team_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            
            'user_team_user_id' => array(
                'table' => $this->_table,
                'name' => 'user_team_user_id',
                'label' => 'User ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            
            'user_team_name' => array(
                'table' => $this->_table,
                'name' => 'user_team_name',
                'label' => 'Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            
            'user_team_member_name' => array(
                'table' => $this->_table,
                'name' => 'user_team_member_name',
                'label' => 'Team Member Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),

            'user_team_contact_info' => array(
                'table' => $this->_table,
                'name' => 'user_team_contact_info',
                'label' => 'Contact',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_print_name' => array(
                'table' => $this->_table,
                'name' => 'user_team_print_name',
                'label' => 'Print Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_print_other_name' => array(
                'table' => $this->_table,
                'name' => 'user_team_print_other_name',
                'label' => 'Print Other Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_social_security_number' => array(
                'table' => $this->_table,
                'name' => 'user_team_social_security_number',
                'label' => 'Security Number',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
             'user_team_date_of_birth' => array(
                'table' => $this->_table,
                'name' => 'user_team_date_of_birth',
                'label' => 'Date of birth',
                'type' => 'created',
                'default'=>date("Y-m-d H:i:s"),
                'attributes' => array(),
                'rules' => 'trim'
            ),
            'user_team_driver_license' => array(
                'table' => $this->_table,
                'name' => 'user_team_driver_license',
                'label' => 'Driving License',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_address' => array(
                'table' => $this->_table,
                'name' => 'user_team_address',
                'label' => 'address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_signature' => array(
                'table' => $this->_table,
                'name' => 'user_team_signature',
                'label' => 'Signature',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_initials' => array(
                'table' => $this->_table,
                'name' => 'user_team_initials',
                'label' => 'Initials',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|strtolower|trim|htmlentities|min_length[3]'
            ),
            'user_team_date' => array(
                'table' => $this->_table,
                'name' => 'user_team_date',
                'label' => 'date',
                'type' => 'created',
                'default'=>date("Y-m-d H:i:s"),
                'attributes' => array(),
                'rules' => 'trim'
            ),
            // 'signup_contact' => array(
            //     'table' => $this->_table,
            //     'name' => 'signup_contact',
            //     'label' => ' Contact ',
            //     'type' => 'text',
            //     'attributes' => array(),
            //     'rules' => 'trim|htmlentities|regex_match[/^[\d\(\)\-+ ]+$/]'
            // ),
        );
    }
}

// if($this->uri->segment(4)!=null){
//     unset($data['signup_password']);
// }

// if ($specific_field)
//     return $data[$specific_field];
// else
//     return $data;
// }
// }
