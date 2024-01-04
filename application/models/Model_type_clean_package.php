<?
class Model_type_clean_package extends MY_Model
{
    /**
     * type_clean_package MODEL
     *
     * @package     type_clean_package Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'type_clean_package';
    protected $_field_prefix    = 'type_clean_package_';
    protected $_pk    = 'type_clean_package_id';
    protected $_status_field    = 'type_clean_package_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "type_clean_package_id,type_clean_package_pack_id,type_clean_package_type,type_clean_package_status";

        parent::__construct();
    }

    // Get all active type_clean_packages
    public function get_type_clean_package()
    {
        // Set params
        //$params['fields'] = "type_clean_package_name, type_clean_package_title, type_clean_package_description, type_clean_package_image, type_clean_package_image_path";
        // Get result
        $result = $this->model_type_clean_package->find_all_active();

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

            'type_clean_package_id' => array(
                'table'   => $this->_table,
                'name'   => 'type_clean_package_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width" => "5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            

            'type_clean_package_pack_id' => array(
                'table'   => $this->_table,
                'name'   => 'type_clean_package_pack_id',
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

            'type_clean_package_type' => array(
                'table'   => $this->_table,
                'name'   => 'type_clean_package_type',
                'label'   => 'Package Type',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            ),


            'type_clean_package_status' => array(
                'table'   => $this->_table,
                'name'   => 'type_clean_package_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "type_clean_package_status",
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
