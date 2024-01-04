<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Type_clean_package extends MY_Controller
{

    /**
     * Type_clean_package page
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
        $this->dt_params['dt_headings'] = "type_clean_package_id,type_clean_package_pack_id,type_clean_package_type,type_clean_package_status";
        $this->dt_params['searchable'] = array("type_clean_package_id","type_clean_package_pack_id","type_clean_package_type","type_clean_package_status");
        $this->dt_params['action'] = array(
            "hide_add_button" => true,
            "hide" => false,
            "show_delete" => false,
            "show_edit" => true,
            "order_field" => false,
            "show_view" => false,
            "extra" => array(),
        );

        $this->_list_data['type_clean_package_status'] = array(
            STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>",
            STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
        );

        // $this->_list_data['Type_clean_package_is_popular'] = array(
        //     STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,
        //     STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
        // );
        // Following are common so, defined in MY_Controller_Admin
        // $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
        // $this->dt_params['paginate']['uri'] = "paginate";
        // $this->dt_params['paginate']['update_status_uri'] = "update_status";

        // For use IN JS Files
        $config['js_config']['paginate'] = $this->dt_params['paginate'];

        // $this->_list_data['Type_clean_package_sqft_id'] = $this->model_sqft->find_all_list_active(array(),"sqft_area");

        // Populating LISTDATA

        $_POST = $this->input->post(NULL, false);
    }
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
