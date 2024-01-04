<?
class Model_package_realtor extends MY_Model
{
    /**
     * package_realtor MODEL
     *
     * @package     package_realtor Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'package_realtor';
    protected $_field_prefix    = 'package_realtor_';
    protected $_pk    = 'package_realtor_id';
    protected $_status_field    = 'package_realtor_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "package_realtor_id,package_realtor_sqft_id,package_realtor_package_name,package_realtor_amount,package_realtor_status";

        parent::__construct();
    }

    // Get all active package_realtors
    public function get_package_realtor()
    {
        // Set params
        //$params['fields'] = "package_realtor_name, package_realtor_title, package_realtor_description, package_realtor_image, package_realtor_image_path";
        // Get result
        $result = $this->model_package_realtor->find_all_active();

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
    public function get_fields($specific_field = "")
    {

        $is_required_image = (($this->uri->segment(4) != null) && intval($this->uri->segment(4))) ? '' : 'required';

        $fields = array(

            'package_realtor_id' => array(
                'table'   => $this->_table,
                'name'   => 'package_realtor_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width" => "5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'package_realtor_sqft_id' => array(
                'table'   => $this->_table,
                'name'   => 'package_realtor_sqft_id',
                'label'   => 'Square Footage',
                'type'   => 'dropdown',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'package_realtor_package_name' => array(
                'table'   => $this->_table,
                'name'   => 'package_realtor_package_name',
                'label'   => 'Package Name',
                'type'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                    '1' => 'PREMIER',
                    '2' => 'PREMIUM',
                    '3' => 'BASIC',
                ),
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'package_realtor_amount' => array(
                'table'   => $this->_table,
                'name'   => 'package_realtor_amount',
                'label'   => 'Package Amount',
                'type'   => 'number',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),


            'package_realtor_status' => array(
                'table'   => $this->_table,
                'name'   => 'package_realtor_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "package_realtor_status",
                'list_data' => array(),
                'default'   => '1',
                'attributes'   => array(),
                'dt_attributes'   => array("width" => "7%"),
                'rules'   => 'trim'
            ),

        );

        if ($specific_field)
            return $fields[$specific_field];
        else
            return $fields;
    }
}
