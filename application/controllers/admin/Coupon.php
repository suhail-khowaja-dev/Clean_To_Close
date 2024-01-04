<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Coupon extends MY_Controller {

	/**
	 * CSL Achievements page
	 *
	 * @package		coupon
	 *
     * @version		1.0 --
     * @since		Version 1.0 2017
	 */

    public $_list_data = array();

	public function __construct() {

		global $config;
		
		parent::__construct();
        $this->dt_params['dt_headings'] = "coupon_id,coupon_name,coupon_code,coupon_percent,coupon_status";
        $this->dt_params['searchable'] = array("coupon_id","coupon_title","coupon_is_featured","coupon_status");
        
        $this->dt_params['action'] = array(
        								"hide_add_button" => false ,
                                        "hide" => false ,
                                        "show_delete" => true ,
                                        "show_edit" => true ,
                                        "order_field" => false ,
                                        "show_view" => false ,

                                        "extra" => array() ,

                                      );
        $this->_list_data['coupon_status'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
                                    );

        $this->_list_data['coupon_is_featured'] = array( 
                                        STATUS_INACTIVE => "<span class=\"label label-default\">Inactive</span>" ,
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
                                    );
        // Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";

		// For use IN JS Files

		$config['js_config']['paginate'] = $this->dt_params['paginate'];


        $this->_list_data['coupon_page'] = array(
            'home'=>'Home',
            'wireless'=>'Wireless',
            'accessories'=>'Accessories',
            'about_us'=>'About Us',
            'news_info'=>'News & Info',
            'contact_us'=>'Contact Us',
        );

		// $this->_list_data['coupon_category'] = $this->model_coupon_category->find_all_list_active(array(),"coupon_category_name");

        

		//$this->_list_data['coupon_product_id'] = $this->model_product->find_all_list_active(array(),"product_name");

		$_POST = $this->input->post(NULL, true);
	}


    // public function send_coupon_notify($id = '')
    // {
    //     newt_bell()
    // }


	public function add($id='', $data=array())
	{
        parent::add($id, $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
