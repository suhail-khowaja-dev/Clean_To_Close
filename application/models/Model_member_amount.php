<?
class Model_member_amount extends MY_Model {
    /**
     * TKD member_amount MODEL
     *
     * @package     member_amount Model
     * 
     * @version     2.0
     * @since       2014 / Amazingly corrupt models Corporation Inc.
     */

    protected $_table    = 'member_amount';
    protected $_field_prefix    = 'member_amount_';
    protected $_pk    = 'member_amount_id';
    // Must define to fetch only Active Records
    protected $_status_field    = 'member_amount_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page    = 20;
    
    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "member_amount_id,member_amount_variable,member_amount_value,member_amount_status";
        // $this->relations['member_amount_category'] = array(
        //                                             "type"=>"has_many", 
        //                                             "own_key"=>"bc_member_amount_id", 
        //                                             "other_key"=>"bc_category_id",
        //                                         );
        parent::__construct();
    }

    // Load All DB Config Parameters to $config['dynamics']
    public function load_member_amount($is_admin=false)
    {
        $params = array();
        // define columns to fetch records
        return $this->find_all_grouping(array(), "member_amount_id", "member_amount_variable", "member_amount_value","member_amount_status");
    }

    public function get_admin_member_amount()
    {
        $params['where']['member_amount_type'] = CONFIG_ADMIN ;
        $params['where']['member_amount_status'] = 1 ;
        $member_amount = $this->model_member_amount->find_all($params);
        return $member_amount;
    }

    public function update_member_amount($member_amount_data=array())
    {
        $updated = 0 ;
        $pk = $this->get_pk();
        foreach ($member_amount_data as $member_amount_id => $member_amount_val) {
            $params = array();
            $record = array();
            $params['where'][$pk] = $member_amount_id ;
            $record['member_amount_value'] = $member_amount_val;
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
        
              'member_amount_id' => array(
                     'table'   => $this->_table,
                     'name'   => 'member_amount_id',
                     'label'   => 'id #',
                     'type'   => 'hidden',
                     'type_dt'   => 'text',
                     'attributes'   => array(),
                     'dt_attributes'   => array("width"=>"5%"),
                     'js_rules'   => '',
                     'rules'   => 'trim'
                ),

              'member_amount_variable' => array(
                     'table'   => $this->_table,
                     'name'   => 'member_amount_variable',
                     'label'   => 'Variable',
                     'type'   => 'label',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),
              
              'member_amount_value' => array(
                     'table'   => $this->_table,
                     'name'   => 'member_amount_value',
                     'label'   => 'Value',
                     'type'   => 'text',
                     'attributes'   => array(),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),
              
              'member_amount_type' => array(
                     'table'   => $this->_table,
                     'name'   => 'member_amount_type',
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
            'member_amount_status' => array(
                'table'   => $this->_table,
                'name'   => 'member_amount_status',
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