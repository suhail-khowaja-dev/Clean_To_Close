<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cleaner_member_amount extends MY_Controller {

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
        $this->dt_params['dt_headings'] = "member_amount_id,member_amount_variable,member_amount_value,member_amount_status";
        $this->dt_params['searchable'] = array("member_amount_id","member_amount_variable");
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

		$member_amount['js_member_amount']['paginate'] = $this->dt_params['paginate'];

		$_POST = $this->input->post(NULL, false);
	}

    // Show Direct Edit option
	public function update()
	{
		if(isset($_POST['member_amount_attr']))
		{
			$updated = $this->model_member_amount->update_member_amount($_POST['member_amount_attr']);
			redirect("admin/cleaner_member_amount/update?msgtype=success&msg=$updated Record%20updated%20successfully.");
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

		$data['page_title'] = "member_amount";
		$data['class_name'] = "member_amount";
		$data['model_name'] = "model_member_amount";
		$data['model_obj'] = $this->model_member_amount;
		$data['member_amount'] = $this->model_member_amount->get_admin_member_amount();

        // debug($data['emails'],1);

		$this->load_view("_form", $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
