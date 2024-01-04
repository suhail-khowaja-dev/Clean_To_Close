<?
class Model_upload_document extends MY_Model {
    /**
     * upload_document MODEL
     *
     * @package     upload_document Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'upload_document';
    protected $_field_prefix    = 'upload_document_';
    protected $_pk    = 'upload_document_id';
    protected $_status_field    = 'upload_document_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "upload_document_id,upload_document_type,upload_document_name,upload_document_price,upload_document_status";

        parent::__construct();

    }

    // Get all active upload_documents
    public function get_upload_document()
    {
        // Set params
        //$params['fields'] = "upload_document_name, upload_document_title, upload_document_description, upload_document_image, upload_document_image_path";
        // Get result
        $result = $this->model_upload_document->find_all_active();

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

            'upload_document_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_reltor_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_reltor_id',
                'label'   => 'reltor id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_cleaning_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_cleaning_id',
                'label'   => 'cleaning id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_cleaner_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_cleaner_id',
                'label'   => ' cleaner id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_arrival_time_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_arrival_time_id',
                'label'   => 'arrival id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_left_time_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_left_time_id',
                'label'   => 'left id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),

            'upload_document_arrive_time' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_arrive_time',
                'label'   => 'Arrival Time',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'upload_document_left_time' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_left_time',
                'label'   => 'Left Tme',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'upload_document_task' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_task',
                'label'   => 'Task',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),


             'upload_document_property_task_list' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_property_task_list',
                'label'   => 'Property Task',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'upload_document_property_image_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_property_image_id',
                'label'   => 'Property',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),

             'upload_document_signedcompl_image_id' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_signedcompl_image_id',
                'label'   => 'Signed Com',
                'type'   => 'text',
                'attributes'   => array(),
                'js_rules'   => '',
                'rules'   => 'trim|htmlentities'
             ),
            // before image

            'upload_document_before1_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_before1_image',
                'label' => 'Before1 Image',
                'name_path' => 'upload_document_before1_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            'upload_document_before2_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_before2_image',
                'label' => 'Before2 Image',
                'name_path' => 'upload_document_before2_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            'upload_document_before3_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_before3_image',
                'label' => 'Before3 Image',
                'name_path' => 'upload_document_before3_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            // after image
            'upload_document_after1_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_after1_image',
                'label' => 'after1 Image',
                'name_path' => 'upload_document_after1_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),
            'upload_document_after2_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_after2_image',
                'label' => 'after2 Image',
                'name_path' => 'upload_document_after2_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),
            'upload_document_after3_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_after3_image',
                'label' => 'after3 Image',
                'name_path' => 'upload_document_after3_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'image_size_recommended'=>'370px × 225px',
                    'allow_ext'=>'png|jpeg|jpg',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),
            // signed image
            'upload_document_signed_image' => array(
                'table' => $this->_table,
                'name' => 'upload_document_signed_image',
                'label' => 'Background Image',
                'name_path' => 'upload_document_signed_path',
                'upload_config' => 'site_upload_cleaning_picture',
                'type' => (!empty($is_required_image)?'fileupload':'hidden'),
                'type_dt' => 'image',
                'randomize' => true,
                'preview' => 'true',
                'attributes'   => array(
                    'allow_ext'=>'doc|dox|pdf',
                ),
                'dt_attributes' => array("width" => "10%"),
                'rules' => 'trim|htmlentities',
                'js_rules'=>''
            ),

            'upload_document_status' => array(
                'table'   => $this->_table,
                'name'   => 'upload_document_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "upload_document_status" ,
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