<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Yeastech_101 extends MY_Controller {

    /**
     * Yeachtech_101 page
     *
     * @package
     *
     * @version     1.0 --
     * @since       Version 1.0 2017
     */

    public $_list_data = array();

    public function __construct() {

        global $config;
        
        parent::__construct();
        $this->dt_params['dt_headings'] = "yeastech_101_id,yeastech_101_title,yeastech_101_status";
        $this->dt_params['searchable'] = array("yeastech_101_id","yeastech_101_title","yeastech_101_status");
        $this->dt_params['action'] = array(
                                        "hide" => false ,
                                        "show_delete" => true ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,
                                        "extra" => array() ,
                                      );
        
        $this->_list_data['yeastech_101_status'] = array(
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"  
                                    );
        $this->_list_data['yeastech_101_is_featured'] = array(
                                        STATUS_INACTIVE => "<span class=\"label label-default\">No</span>" ,  
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"  
                                    );
        // Following are common so, defined in MY_Controller_Admin
        // $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
        // $this->dt_params['paginate']['uri'] = "paginate";
        // $this->dt_params['paginate']['update_status_uri'] = "update_status";

        // For use IN JS Files
        $this->_list_data['yeastech_101_type'] = $this->yeastech_101_type_list();
        $config['js_config']['paginate'] = $this->dt_params['paginate'];
        
        // Populating LISTDATA

        $_POST = $this->input->post(NULL, false);
    }

    function yeastech_101_type_list()
  {
    return array(
              1=>'General Questions',
              2=> 'About Services Questions',
          );

        // return array(
        //     1=>'Member',
        //     2=> 'Guest'
        // );
  }
    
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
