<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package_service extends MY_Controller
{

    /**
     * Package_service page
     *
     * @package
     *
     * @version		1.0 --
     * @since		Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct()
    {

        global $config;

        parent::__construct();
        $this->dt_params['dt_headings'] = "package_service_id,package_service_package_id,package_service_type_id,package_service_name,package_service_status";
        $this->dt_params['searchable'] = array("package_service_id","package_service_package_id","package_service_type_id","package_service_name","package_service_status");
        $this->dt_params['action'] = array(
            "hide_add_button" => false,
            "hide" => false,
            "show_delete" => false,
            "show_edit" => true,
            "order_field" => false,
            "show_view" => false,
            "extra" => array(),
        );

        $this->_list_data['package_service_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>",
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );

        // $this->_list_data['Package_service_is_popular'] = array(
        //     STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,
        //     STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
        // );
        // Following are common so, defined in MY_Controller_Admin
        // $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
        // $this->dt_params['paginate']['uri'] = "paginate";
        // $this->dt_params['paginate']['update_status_uri'] = "update_status";

        // For use IN JS Files
        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        $this->_list_data['package_service_type_id'] = $this->model_type_clean_package->find_all_list_active(array(),"type_clean_package_type");

        // Populating LISTDATA

        $_POST = $this->input->post(NULL, false);
    }
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
