<?

class Model_monthly_subscription extends MY_Model
{

    protected $_table = 'monthly_subscription';
    protected $_field_prefix = 'monthly_subscription_';
    protected $_pk = 'monthly_subscription_id';
    protected $_status_field = 'monthly_subscription_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        //$this->pagination_params['fields'] = "signup_payment_id,signup_payment_firstname,signup_payment_lastname,signup_payment_email,signup_payment_status";
        $this->pagination_params['fields'] = "monthly_subscription_id";

        // Call the Model constructor
        parent::__construct();
    }



    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4) != null) && intval($this->uri->segment(4))) ? '' : 'required';

        $data =  array(

            'monthly_subscription_id' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'monthly_subscription_signup_id' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_signup_id',
                'label' => 'Signup ID',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'monthly_subscription_amount_paid' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_amount_paid',
                'label' => 'Amount Paid',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            'monthly_subscription_package_name' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_package_name',
                'label' => 'Package Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            
            'monthly_subscription_package_job' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_package_job',
                'label' => 'Package Job',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'monthly_subscription_package_amount' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_package_amount',
                'label' => 'Package Amount',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'monthly_subscription_coupon_name' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_coupon_name',
                'label' => 'Coupon Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            'monthly_subscription_percent_off' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_percent_off',
                'label' => 'Percent Off',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            'monthly_subscription_status' => array(
                'table' => $this->_table,
                'name' => 'monthly_subscription_status',
                'label' => 'Status',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

        );
    }
}
