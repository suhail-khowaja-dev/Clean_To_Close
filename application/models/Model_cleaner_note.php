<?
class Model_cleaner_note extends MY_Model {
    /**
     * cleaning_service MODEL
     *
     * @package     cleaning_service Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'cleaner_note';
    protected $_field_prefix    = 'cleaner_note_';
    protected $_pk    = 'cleaner_note_id';
    protected $_status_field    = 'cleaner_note_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "cleaner_note_id,cleaner_note_type,cleaner_note_status";

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



        $fields['cleaner_note_id'] = array(
                'table' => $this->_table,
                'name' => 'cleaner_note_id',
                'label' => 'ID',
                'primary' => 'primary',
                'type' => 'hidden',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'trim'
            );

        $fields['cleaner_note_type'] = array(
                'table'   => $this->_table,
                'name'   => 'cleaner_note_type',
                'label'   => 'Title',
                'type'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(
                    '1' => 'Insurance',
                    '2' => 'Background Check',
                    '3' => 'W-9',
                ),
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
            );

        $fields['cleaner_note_name'] = array(
                'table' => $this->_table,
                'name' => 'cleaner_note_name',
                'label' => 'Note',
                'type' => 'editor',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            );
        if ($this->uri->segment(4) == 1) {
            $fields['cleaner_note_list'] = array(
                'table' => $this->_table,
                'name' => 'cleaner_note_list',
                'label' => 'Insurance List',
                'type' => 'editor',
                'attributes' => array(),
                'js_rules' => '',
                'rules' => 'strtolower|trim|htmlentities'
            );
        }

//    if ($this->uri->segment(4) == 3) {
//        $fields['cleaner_note_image'] = array(
//            'table' => $this->_table,
//            'name' => 'cleaner_note_image',
//            'label' => 'Image',
//            'name_path' => 'cleaner_note_path',
//            'upload_config' => 'site_upload_cleaner_note',
//            'type' => 'fileupload',
//            'type_dt' => 'image',
//            'randomize' => true,
//            'preview' => 'true',
//            'attributes' => array(
//                'allow_ext' => 'doc|dox|pdf',
//            ),
//            'dt_attributes' => array("width" => "10%"),
//            'rules' => 'trim|htmlentities',
//            'js_rules' => $is_required_image,
//        );
//        }


        $fields['cleaner_note_status'] = array(
                'table' => $this->_table,
                'name' => 'cleaner_note_status',
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
            );




        if($specific_field)
            return $fields[ $specific_field ];
        else
            return $fields;
    }

}
