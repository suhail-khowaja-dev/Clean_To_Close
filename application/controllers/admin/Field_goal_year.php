<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Field_goal_year extends MY_Controller {

	/**
	 * CSL Achievements page
	 *
	 * @package		field_goal_year
	 *
     * @version		1.0 --
     * @since		Version 1.0 2017
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "field_goal_year_id,field_goal_year_title,field_goal_year_image,field_goal_year_status";
        $this->dt_params['searchable'] = array("field_goal_year_id","field_goal_year_title","field_goal_year_category","field_goal_year_latest_featured","field_goal_year_status");
        
        $this->dt_params['action'] = array(
        								"hide_add_button" => false ,
                                        "hide" => false ,
                                        "show_delete" => true ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array() ,
                                      );
        $this->_list_data['field_goal_year_status'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
                                    );
        $this->_list_data['field_goal_year_latest_featured'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"  
                                    );
        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";

		// For use IN JS Files

		$config['js_config']['paginate'] = $this->dt_params['paginate'];


        /*$this->_list_data['field_goal_year_page'] = array(
            'home'=>'Home',
            'wireless'=>'Wireless',
            'accessories'=>'Accessories',
            'about_us'=>'About Us',
            'field_goal_year_info'=>'field_goal_year & Info',
            'contact_us'=>'Contact Us',
        );*/
         // $this->_list_data['field_goal_year_category'] = $this->model_field_goal_year_category->find_all_list_active(array(),"field_goal_year_category_name");


		//$this->_list_data['field_goal_year_category_id'] = $this->model_category->find_all_list_active(array(),"category_name");
		//$this->_list_data['field_goal_year_product_id'] = $this->model_product->find_all_list_active(array(),"product_name");

		$_POST = $this->input->post(NULL, false);
	}

	public function add($id='', $data=array())
	{
		parent::add($id, $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
