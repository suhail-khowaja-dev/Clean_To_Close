<?
class Model_cleaner_percentage extends MY_Model {
    /**
     * TKD member_amount MODEL
     *
     * @package     member_amount Model
     * 
     * @version     2.0
     * @since       2014 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'cleaner_percentage';
    protected $_field_prefix    = 'cleaner_percentage_';
    protected $_pk    = 'cleaner_percentage_id';
    // Must define to fetch only Active Records
    protected $_status_field    = 'cleaner_percentage_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "cleaner_percentage_id,cleaner_percentage_variable,cleaner_percentage_value,cleaner_percentage_status";
        // $this->relations['member_amount_category'] = array(
        //                                             "type"=>"has_many", 
        //                                             "own_key"=>"bc_member_amount_id", 
        //                                             "other_key"=>"bc_category_id",
        //                                         );
        parent::__construct();
    }

    // Load All DB Config Parameters to $config['dynamics']
    public function load_cleaner_percentage($is_admin=false)
    {
        $params = array();
        // define columns to fetch records
        return $this->find_all_grouping(array(), "cleaner_percentage_id", "cleaner_percentage_variable", "cleaner_percentage_value","cleaner_percentage_status");
    }

    public function get_admin_cleaner_percentage()
    {
        $params['where']['cleaner_percentage_type'] = CONFIG_ADMIN ;
        $params['where']['cleaner_percentage_status'] = 1 ;
        $cleaner_percentage = $this->model_cleaner_percentage->find_all($params);
        return $cleaner_percentage;
    }

    public function update_cleaner_percentage($cleaner_percentage_data=array())
    {
        $updated = 0 ;
        $pk = $this->get_pk();
        foreach ($cleaner_percentage_data as $cleaner_percentage_id => $cleaner_percentage_val) {
            $params = array();
            $record = array();
            $params['where'][$pk] = $cleaner_percentage_id ;
            $record['cleaner_percentage_value'] = $cleaner_percentage_val;
            $updated += $this->update_model($params,$record);
        }
        return $updated;
    }

    /*
    * table       Table Name
    * Name        FIeld Name
    * label       Field Label / Textual Representation in form and DT headings
    * type        Field type : hidden, text, textarea, editor, etc etc. 
    *                           Implementation in form_generator.php
    * type_dt     Type used by prepare_datatables method in controller to prepare DT value
    *                           If left blank, prepare_datatable Will opt to use 'type'
    * attributes  HTML Field Attributes
    * js_rules    Rules to be aplied in JS (form validation)
    * rules       Server side Validation. Supports CI Native rules
    */
    public function get_fields( $specific_field = "" )
    {

        $fields = array(
        
              'cleaner_percentage_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'cleaner_percentage_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'cleaner_percentage_variable' => array(
                     'table'   => $this->_table,
                     'name'   => 'cleaner_percentage_variable',
                     'label'   => 'Variable',
                     'type'   => 'label',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),
              
              'cleaner_percentage_value' => array(
                     'table'   => $this->_table,
                     'name'   => 'cleaner_percentage_value',
                     'label'   => 'Value',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),
              
              'cleaner_percentage_type' => array(
                     'table'   => $this->_table,
                     'name'   => 'cleaner_percentage_type',
                     'label'   => 'Type?',
                     'type'   => 'switch',
                     'type_dt'   => 'dropdown',
                     'type_filter_dt'   => 'dropdown',
                     'list_data' => array( 
                                        1 => "<span class=\"label label-default\">Admin</span>" ,  
                                        2 =>  "<span class=\"label label-primary\">System</span>"  
                                    ) ,
                     'default'   => '1',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"7%"),
                     'rules'   => 'trim'
                  ),
            'cleaner_percentage_status' => array(
                'table'   => $this->_table,
                'name'   => 'cleaner_percentage_status',
                'label'   => 'Status?',
                'type'   => 'switch',
                'type_dt'   => 'dropdown',
                'type_filter_dt'   => 'dropdown',
                'list_data' => array(
                    STATUS_INACTIVE => "<span class=\"label label-default\">InActive</span>" ,
                    STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>",
                ) ,
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