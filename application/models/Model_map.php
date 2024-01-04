<?
class Model_map extends MY_Model {
    /**
     * map MODEL
     *
     * @package     map Model
     * @author
     * @version     1.0
     * @since       2017
     */

    protected $_table    = 'map';
    protected $_field_prefix    = 'map_';
    protected $_pk    = 'map_id';
    protected $_status_field    = 'map_status';
    public $relations = array();
    public $pagination_params = array();
    public $dt_params = array();
    public $_per_page    = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "map_id,map_name,map_address,map_status";

        parent::__construct();

    }
 
    // Get all active maps
    public function get_map()
    {
        // Set params
        //$params['fields'] = "map_name, map_title, map_description, map_image, map_image_path";
        // Get result
        $result = $this->model_map->find_all_active();

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

            'map_id' => array(
                'table'   => $this->_table,
                'name'   => 'map_id',
                'label'   => 'id #',
                'type'   => 'hidden',
                'type_dt'   => 'text',
                'attributes'   => array(),
                'dt_attributes'   => array("width"=>"5%"),
                'js_rules'   => '',
                'rules'   => 'trim'
            ),


            'map_name' => array(
                'table'   => $this->_table,
                'name'   => 'map_name',
                'label'   => 'Type',
                'type'   => 'dropdown',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data'=>array(
                    'WA'=>'Washington',
                    'MT'=>'Montana',
                    'ND'=>'North Dakota',
                    'MN'=>'Minnesota',
                    'OR'=>'Oregon',
                    'ID'=>'Idaho',
                    'WI'=>'Wisconsin',
                    'WY'=>'Wyoming',
                    'SD'=>'South Dakota',
                    'IA'=>'Iowa',
                    'NE'=>'Nebraska',
                    'IL'=>'Illinois',
                    'NV'=>'Nevada',
                    'UT'=>'Utah',
                    'CO'=>'Colorado',
                    'KS'=>'Kansas',
                    'MO'=>'Missouri',
                    'IN'=>'Indiana',
                    'MI'=>'Michigan',
                    'OH'=>'Ohio',
                    'PA'=>'Pennsylvania',
                    'NY'=>'New York',
                    'ME'=>'Maine',
                    'KY'=>'Kentucky',
                    'WV'=>'West Virginia',
                    'VA'=>'Virginia',
                    'CA'=>'California',
                    'AZ'=>'Arizona',
                    'NM'=>'New Mexico',
                    'OK'=>'Oklahoma',
                    'TX'=>'Texas',
                    'AR'=>'Arkansas',
                    'LA'=>'Louisiana',
                    'MS'=>'Mississippi',
                    'TN'=>'Tennessee',
                    'NC'=>'North Carolina',
                    'AL'=>'Alabama',
                    'GA'=>'Georgia',
                    'SC'=>'South Carolina',
                    'FL'=>'Florida',
                    'HI'=>'Hawaii',
                    'AK'=>'Alaska',
                    'VT'=>'Vermont',
                    'NJ'=>'New Jersey',
                    'DE'=>'Delaware',
                    'DC'=>'District of Columbia',
                    'NH'=>'New Hampshire',
                    'MA'=>'Massachusetts',
                    'CT'=>'Connecticut',
                    'RI'=>'Rhode Island',
                    'MD'=>'Maryland',
                ),
                'attributes'   => array(),
                'js_rules'   => 'required',
                'rules'   => 'required|trim|htmlentities'
            ),
            

              'map_address' => array(
                     'table'   => $this->_table,
                     'name'   => 'map_address',
                     'label'   => 'Address',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => '',
                     'rules'   => 'required|trim|htmlentities'
                  ),

            'map_status' => array(
                'table'   => $this->_table,
                'name'   => 'map_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt' => 'dropdown',
                'list_data_key' => "map_status" ,
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