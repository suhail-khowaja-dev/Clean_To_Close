<?
class Model_zip_code extends MY_Model {
    /**
     * zip_code MODEL
     *
     * @package     zip_code Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'zip_code';
    protected $_field_prefix    = 'zip_code_';
    protected $_pk    = 'zip_code_id';
    protected $_status_field    = 'zip_code_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "zip_code_id,zip_code_number,zip_code_status";

        parent::__construct();

    }
 
    // Get all active zip_codes
    public function get_zip_code()
    {
        // Set params
        //$params['fields'] = "zip_code_name, zip_code_title, zip_code_description, zip_code_image, zip_code_image_path";
        // Get result
        $result = $this->model_zip_code->find_all_active();

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

            'zip_code_id' => array(
                'table'   => $this->_table,
                'name'   => 'zip_code_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),


            'zip_code_number' => array(
                'table'   => $this->_table,
                'name'   => 'zip_code_number',
                'label'   => 'Zip Code',
                'type'   => 'text',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'js_rules'   => 'required',
                'rules'   => 'required|trim|htmlentities'
            ),
            'zip_code_status' => array(
                'table'   => $this->_table,
                'name'   => 'zip_code_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "zip_code_status" ,
                'list_data' => array(),
                'default'   => '1',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"7%"),
                'rules'   => 'trim'
            ),

        );

        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}
?>