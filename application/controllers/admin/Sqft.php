<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sqft extends MY_Controller {

	/**
	 * Sqft page
	 *
	 * @package
	 *
     * @version		1.0 --
     * @since		Version 1.0 2017
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "sqft_id,sqft_area,sqft_status";
        $this->dt_params['searchable'] = array("sqft_id","sqft_area","sqft_status");
        $this->dt_params['action'] = array(
                                        "hide_add_button" => false ,
                                        "hide" => false ,
                                        "show_delete" => false ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array() ,
                                      );
        
        $this->_list_data['sqft_status'] = array(
                                        STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>" ,
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"  
                                    );

        // $this->_list_data['sqft_is_popular'] = array(
        //     STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,
        //     STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
        // );
        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";

		// For use IN JS Files
		$config['js_config']['paginate'] = $this->dt_params['paginate'];
		
		// Populating LISTDATA

		$_POST = $this->input->post(NULL, false);
	}
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
