<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cleaner_percentage extends MY_Controller {

	/**
	 * CSL Achievements page
	 *
	 * @package		config
	 *
     * @version		1.0 --
     * @since		Version 1.0 2017
	 */

    public $_list_data = array();

	public function __construct() {

		global $member_amount;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "cleaner_percentage_id,cleaner_percentage_variable,cleaner_percentage_value,cleaner_percentage_status";
        $this->dt_params['searchable'] = array("cleaner_percentage_id","cleaner_percentage_variable");
        $this->dt_params['action'] = array(
                                        "hide" => false ,
                                        "show_delete" => false ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array() ,
                                      );
        /*$this->_list_data['config_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );*/
        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";



		// For use IN JS Files

		$cleaner_percentage['js_cleaner_percentage']['paginate'] = $this->dt_params['paginate'];

		$_POST = $this->input->post(NULL, false);
	}

    // Show Direct Edit option
	public function update()
	{
		if(isset($_POST['cleaner_percentage_attr']))
		{
			$updated = $this->model_cleaner_percentage->update_cleaner_percentage($_POST['cleaner_percentage_attr']);
			redirect("admin/cleaner_percentage/update?msgtype=success&msg=$updated Record%20updated%20successfully.");
		}
		$this->layout_data['additional_tools'][] = "jstree";
		//$this->_list_data['config_category'] = $this->model_category->find_all_list_active(array(),"category_name");
		$this->add_script(array( "jquery.validate.min.js") , "js" );
		$this->register_plugins(array(						
									"jquery-ui",
									"bootstrap",
									"bootstrap-hover-dropdown",
									"jquery-slimscroll",
									"uniform",
									"boots",
									"font-awesome",
									"simple-line-icons" ,
									"select2",
									"bootbox",
									"bootstrap-toastr",
								));

		$data['page_title'] = "cleaner_percentage";
		$data['class_name'] = "cleaner_percentage";
		$data['model_name'] = "model_cleaner_percentage";
		$data['model_obj'] = $this->model_cleaner_percentage;
		$data['cleaner_percentage'] = $this->model_cleaner_percentage->get_admin_cleaner_percentage();

        // debug($data['cleaner_percentage'],1);

		$this->load_view("_form", $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
