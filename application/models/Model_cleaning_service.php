<?
class Model_cleaning_service extends MY_Model {
    /**
     * cleaning_service MODEL
     *
     * @package     cleaning_service Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'cleaning_service';
    protected $_field_prefix    = 'cleaning_service_';
    protected $_pk    = 'cleaning_service_id';
    protected $_status_field    = 'cleaning_service_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "cleaning_service_id,cleaning_service_realtor_name,cleaning_service_cleaner_name,cleaning_service_address,cleaning_service_city,cleaning_service_state,cleaning_service_closing_date,cleaning_service_zipcode,cleaning_service_status";
        $this->pagination_params['where_string'] = "cleaning_service_status !="."5";
        parent::__construct();

    }

    // Get all active cleaning_services
    public function get_cleaning_service()
    {
        // Set params
        //$params['fields'] = "cleaning_service_name, cleaning_service_title, cleaning_service_description, cleaning_service_image, cleaning_service_image_path";
        // Get result
        $result = $this->model_cleaning_service->find_all_active();

        return $result;
    }





    /*
    * table             Table Name
    * Name              FIeld Name
    * label             Field Label / Textual Representation in form and DT headings
    * type              Field type : hidden, text, textarea, editor, etc etc. 
    *                                 Implementation in form_generator.php
    * type_dt           Type used by prepare_datatables method in controller to prepare DT value
    *                                 If left blank, prepare_datatable Will opt to use 'type'
    * type_filter_dt    Used by DT FILTER PREPRATION IN datatables.php
    * attributes        HTML Field Attributes
    * js_rules          Rules to be aplied in JS (form validation)
    * rules             Server side Validation. Supports CI Native rules

    * list_data         For dropdown etc, data in key-value pair that will populate dropdown 
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    * list_data_key     For dropdown etc, if you want to define list_data in CONTROLLER (public _list_data[$key]) list_data_key is the $key which identifies it
    *                   -----Incase list_data_key is not defined, it will look for field_name as a $key
    *                   -----USED IN ADMIN_CONTROLLER AND admin's database.php
    */
    public function get_fields( $specific_field = "" )
    {

        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $fields = array(
            
            'cleaning_service_id' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),
            'cleaning_service_user_id' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_user_id',
                'label' => 'Realtor',
                'type' => 'dropdown',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_cleaner_id' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_cleaner_id',
                'label' => 'Cleaner',
                'type' => 'dropdown',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_address' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_address',
                'label' => 'Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_realtor_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_realtor_name',
                'label' => 'Realtor Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_cleaner_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_cleaner_name',
                'label' => 'Cleaner Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_address_lat' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_address_lat',
                'label' => 'Address lat',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_address_lng' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_address_lng',
                'label' => 'Address lng',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_zipcode' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_zipcode',
                'label' => ' Zip Code ',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_unit' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_unit',
                'label' => 'Unit',
                'type' => 'text',
                'attributes'   => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_city' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_city',
                'label' => 'City',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_state' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_state',
                'label' => 'State',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_type_residence' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_type_residence',
                'label' => 'Type Residence',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_square_footage' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_square_footage',
                'label' => 'Square Footage',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_bathroom' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_bathroom',
                'label' => 'Team Contact',
                'type' => (!empty($is_required_image) ? 'text' : 'hidden'),
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_full_bathroom' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_full_bathroom',
                'label' => 'Full Bathroom',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_bedrooms' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_bedrooms',
                'label' => 'Bedroom',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_last_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_last_name',
                'label' => 'cleaning service last name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_last_name_seller' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_last_name_seller',
                'label' => 'cleaning service last name seller',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_buyer_last_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_buyer_last_name',
                'label' => 'cleaning buyer last name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_agent_buyer_last_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_buyer_last_name',
                'label' => 'cleaning agent buyer last name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_seller_lastname' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_seller_lastname',
                'label' => 'cleaning service other seller lastname',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_seller_last_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_seller_last_name',
                'label' => 'cleaning seller last name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_agent_seller_last_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_seller_last_name',
                'label' => 'cleaning service agent seller last name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_buyer_lastname' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_buyer_lastname',
                'label' => 'cleaning service other buyer lastname',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            
            'cleaning_service_mls' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_mls',
                'label' => 'MLS #',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_responsible_ payment' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_responsible_ payment',
                'label' => 'Responsible Payment',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_representing' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_representing',
                'label' => 'Service Representing',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_first_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_first_name',
                'label' => 'First Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),



            'cleaning_service_package_id' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_package_id',
                'label' => 'Package ID',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            
            'cleaning_service_closing_tittle_company_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_tittle_company_email',
                'label' => 'Tittle Company Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_closing_tittle_company_phone_number' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_tittle_company_phone_number',
                'label' => 'Tittle Company Phone Number',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_email',
                'label' => 'Service Email',
                'type' => 'email',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_contact' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_contact',
                'label' => 'Service Contact',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_first_name_seller' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_first_name_seller',
                'label' => 'Service First Name Seller',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_email_seller' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_email_seller',
                'label' => 'Service Email Seller',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_contact_seller' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_contact_seller',
                'label' => 'Service Contact Seller',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_buyer_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_buyer_name',
                'label' => 'Cleaning Buyer Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_buyer_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_buyer_email',
                'label' => 'Cleaning Buyer Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_buyer_contact' => array(
                'table' => $this->_table,
                'name' => 'cleaning_buyer_contact',
                'label' => 'Cleaning Buyer Contact',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),



            'cleaning_seller_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_seller_name',
                'label' => 'Cleaning Seller Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_seller_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_seller_email',
                'label' => 'Cleaning Seller Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_seller_contact' => array(
                'table' => $this->_table,
                'name' => 'cleaning_seller_contact',
                'label' => 'Cleaning Seller Contact',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),


            'cleaning_service_other_buyer_fullname' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_buyer_fullname',
                'label' => 'Other Buyer Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_buyer_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_buyer_email',
                'label' => 'Other Buyer Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_buyer_phone' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_buyer_phone',
                'label' => 'Other Buyer Contact',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_seller_fullname' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_seller_fullname',
                'label' => 'Other  Seller Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_seller_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_seller_email',
                'label' => 'Other Seller Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_other_seller_phone' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_other_seller_phone',
                'label' => 'Other Seller  Contact',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_projected_closing_date' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_projected_closing_date',
                'label' => 'Closing',
                'type' => 'date',
                'default'=>date("m-d-Y g:i A"),
                'attributes' => array(),
                'rules' => 'trim'
            ),

            'cleaning_service_cleaning_occur_prior_closing' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_cleaning_occur_prior_closing',
                'label' => 'Cleaning Occur Prior Closing',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_working_closing_company' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_working_closing_company',
                'label' => 'Working Closing Comapny',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_closing_tittle_company' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_tittle_company',
                'label' => 'Closing Title Company',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_closing_tittle_agent_or_officer' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_tittle_agent_or_officer',
                'label' => 'Closing Title Agent Or Officer',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_closing_file_no' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_file_no',
                'label' => 'Closing File No',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_closing_date' => array(
                'table'   => $this->_table,
                'name'   => 'cleaning_service_closing_date',
                'label'   => 'Cleaning',
                'type'   => 'date',
                // 'default'=>date("m/d/Y g:i A"),
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_closing_time' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_time',
                'label' => 'Cleaning Time',
                'type' => 'time',
                // 'default'=>time("g:i A"),
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),


            'cleaning_service_lockbox' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_lockbox',
                'label' => 'Loc Box',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_sentri_lock' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_sentri_lock',
                'label' => 'Sentri Lock',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_garage' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_garage',
                'label' => 'Garage',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_supra_cbs_code' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_supra_cbs_code',
                'label' => 'Supra Cbs Code',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_code_info' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_code_info',
                'label' => 'Code Info',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_location_of_lockbox' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_location_of_lockbox',
                'label' => 'Location Of Locbox',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),


            'cleaning_service_package_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_package_name',
                'label' => 'Package Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_package_amount' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_package_amount',
                'label' => 'Package Amount',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_additional_kitchen' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_additional_kitchen',
                'label' => 'Additional And Kitchen',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_total_option_amount' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_total_option_amount',
                'label' => 'Total Option',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_total_amount' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_total_amount',
                'label' => 'Total Amount',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),


            'cleaning_service_agent_buyer_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_buyer_name',
                'label' => 'Agent Buyer Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            
            'cleaning_service_agent_buyer_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_buyer_email',
                'label' => 'Agent Buyet Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_agent_buyer_phone' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_buyer_phone',
                'label' => 'Agent Buyer Phone',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_agent_seller_name' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_seller_name',
                'label' => 'Agent Seller Name',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_agent_seller_email' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_seller_email',
                'label' => 'Agent Seller Email',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),
            'cleaning_service_agent_seller_phone' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_agent_seller_phone',
                'label' => 'Agent Seller Phone',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_createdon' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_createdon',
                'label' => 'Created',
                'type' => 'created',
                'default'=>date("m/d/Y g:i A"),
                'attributes' => array(),
                'rules' => 'trim'
              ),

              'cleaning_service_cancel_status' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_cancel_status',
                'label' => 'Cancel Status',
                'type' => 'switch',
                'default' => '0',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
              ),


              'cleaning_service_update_status' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_update_status',
                'label' => 'Update Status',
                'type' => 'text',
                'default' => '0',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
              ),
              
              'cleaning_service_closing_date_old' => array(
                    'table'   => $this->_table,
                    'name'   => 'cleaning_service_closing_date_old',
                    'label'   => 'Cleaning old',
                    'type'   => 'text',
                    'attributes' => array(),
                    'rules' => 'strtolower|trim|htmlentities'
              ),

              'cleaning_service_closing_time_old' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_closing_time_old',
                'label' => 'Cleaning Time old',
                'type' => 'text',
                'attributes' => array(),
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'cleaning_service_status' => array(
                'table' => $this->_table,
                'name' => 'cleaning_service_status',
                'label' => 'Status',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                    // 2 => "<span class='label label-danger'>Canceled Order</span>",
                    1 =>  "<span class='label label-primary'>Open</span>",
                    3 =>  "<span class='label label-primary'>Accepted</span>",
                    4 =>  "<span class='label label-primary'>Submitted</span>",
                    6 =>  "<span class='label label-primary'>Canceled Order</span>"

                ),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),


        );

        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}