<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cleaner_invoice extends MY_Controller {

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
        $this->dt_params['dt_headings'] = "cleaner_invoice_id,cleaner_invoice_variable,cleaner_invoice_value,cleaner_invoice_status";
        $this->dt_params['searchable'] = array("cleaner_invoice_id","cleaner_invoice_variable");
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

		$cleaner_invoice['js_cleaner_invoice']['paginate'] = $this->dt_params['paginate'];

		$_POST = $this->input->post(NULL, false);
	}

    // Show Direct Edit option
	public function update()
	{
		// debug($_POST,1);
		if(isset($_POST['cleaner_invoice_attr']))
		{
			$updated = $this->model_cleaner_invoice->update_cleaner_invoice($_POST['cleaner_invoice_attr']);
			redirect("admin/cleaner_invoice/update?msgtype=success&msg=$updated Record%20updated%20successfully.");
		}
		$this->layout_data['additional_tools'][] = "jstree";
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

		$data['page_title'] = "cleaner_invoice";
		$data['class_name'] = "cleaner_invoice";
		$data['model_name'] = "model_cleaner_invoice";
		$data['model_obj'] = $this->model_cleaner_invoice;
		$data['cleaner_invoice'] = $this->model_cleaner_invoice->get_admin_cleaner_invoice();

        // debug($data['cleaner_invoice'],1);

		$this->load_view("_form", $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
