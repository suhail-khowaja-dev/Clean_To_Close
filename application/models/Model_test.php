<?
class Model_Test extends MY_Model {
    /**
     * test MODEL
     *
     * @package     test Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'test';
    protected $_field_prefix    = 'test_';
    protected $_pk    = 'test_id';
    protected $_status_field    = 'test_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "test_id, test_title, test_address, test_latitude , test_longitude";

        parent::__construct();

    }

    // Get all active tests
    public function get_test()
    {
        // Set params
        //$params['fields'] = "test_name, test_title, test_description, test_image, test_image_path";
        // Get result
        $result = $this->model_test->find_all_active();

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

            'test_id' => array(
                'table' => $this->_table,
                'name' => 'test_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            ),

            'test_title' => array(
                'table' => $this->_table,
                'name' => 'test_title',
                'label' => 'Title Name',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'test_address' => array(
                'table' => $this->_table,
                'name' => 'test_address',
                'label' => 'Address',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'test_latitude' => array(
                'table' => $this->_table,
                'name' => 'test_latitude',
                'label' => 'Latitude',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),

            'test_longitude' => array(
                'table' => $this->_table,
                'name' => 'test_longitude',
                'label' => 'Longitude',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            ),
            
           
            'test_modified' => array(
                'table' => $this->_table,
                'name' => 'test_modified',
                'label' => 'Modified On',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
              ),

            'test_createdon' => array(
                'table' => $this->_table,
                'name' => 'test_createdon',
                'label' => 'Created On',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim|htmlentities'
              ),

            'test_status' => array(
                'table' => $this->_table,
                'name' => 'test_status',
                'label' => 'Status',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                    0 => "<span class='label label-danger'>Inactive</span>",
                    1 =>  "<span class='label label-primary'>Active</span>"
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
?>