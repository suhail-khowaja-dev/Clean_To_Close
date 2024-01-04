<?
class Model_client extends MY_Model {
    /**
     * Client MODEL
     *
     * @package     Client Model
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'client';
    protected $_field_prefix    = 'client_';
    protected $_pk    = 'client_id';
    protected $_status_field    = 'client_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "client_id,client_name, CONCAT(client_image_path,client_image) AS client_image,client_status";
        
        parent::__construct();

    }

    public function get_clients()
    {
       return $this->model_client->find_all_active();
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
        
              'client_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'client_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'client_name' => array(
                     'table'   => $this->_table,
                     'name'   => 'client_name',
                     'label'   => 'Name',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),

              // 'client_desc' => array(
              //        'table'   => $this->_table,
              //        'name'   => 'client_desc',
              //        'label'   => 'Description',
              //        'type'   => 'textarea',
              //        'attributes'   => array(),
              //        'js_rules'   => '',
              //        'rules'   => '|trim|htmlentities'
              //     ),
              
              'client_image' => array(
                     'table'   => $this->_table,
                     'name'   => 'client_image',
                     'label'   => 'Image',
                     'name_path'   => 'client_image_path',
                     'upload_config'   => 'site_upload_client',
                     'type'   => 'fileupload',
                     'type_dt'   => 'image',
                     'randomize' => true,
                     'preview'   => 'true',
                     'attributes'   => array('image_size'=>'Image size : 192px × 44px','allow_ext'=>'png|jpeg|jpg',),
                     'dt_attributes'   => array("width"=>"10%"),
                     'rules'   => 'trim|htmlentities',
                     'js_rules'=>$is_required_image
                  ),
             
              'client_status' => array(
                     'table'   => $this->_table,
                     'name'   => 'client_status',
                     'label'   => 'Status?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt' => 'dropdown',
                     'list_data_key' => "client_status" ,
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