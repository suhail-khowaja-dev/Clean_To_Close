<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privacy_policy extends MY_Controller {

	/**
	 * Privacy_policy Controller
	 */
	
	public function __construct()
    {
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Page
    public function index()
    {
        global $config;
        //$data['banner'] = $this->model_inner_banner->get_banner(3);
        // Get and set cms data
        $data['privacy_policy'] = $this->model_cms_page->get_page(22);
        // Set banner heading
        //$data['banner_heading'] = "Privacy Policy";
        // Load View
        $this->load_view("index", $data);
    }



}
