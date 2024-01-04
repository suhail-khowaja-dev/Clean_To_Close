<?
class Model_left_time extends MY_Model
{
    /**
     * arrival_time MODEL
     *
     * @package     arrival_time Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'left_time';
    protected $_field_prefix    = 'left_time_';
    protected $_pk    = 'left_time_id';
    protected $_status_field    = 'left_time_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "left_time_id,left_time_type,left_time_amount,left_time_status";

        parent::__construct();
    }

    // Get all active left_times
    public function get_left_time()
    {
        // Set params
        //$params['fields'] = "left_time_name, left_time_title, left_time_description, left_time_image, left_time_image_path";
        // Get result
        $result = $this->model_left_time->find_all_active();

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

            'left_time_id' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width" => "5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'left_time_reltor_id' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_reltor_id',
                'label'   => 'Reltor Id #',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'left_time_cleaning_id' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_cleaning_id',
                'label'   => 'Cleaning Id #',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'left_time_cleaner_id' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_cleaner_id',
                'label'   => 'Cleaner Id #',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'left_time_datetime' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_datetime',
                'label'   => 'Time Date',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),

            'left_time_name' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_name',
                'label'   => 'Name',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => '|trim|htmlentities'
            ),

            'left_time_address' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_address',
                'label'   => 'Address',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => '|trim|htmlentities'
            ),

            'left_time_message' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_message',
                'label'   => 'Message',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => '|trim|htmlentities'
            ),

            'left_time_status' => array(
                'table'   => $this->_table,
                'name'   => 'left_time_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "left_time_status",
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
