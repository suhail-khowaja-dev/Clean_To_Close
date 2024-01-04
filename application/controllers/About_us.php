<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller {

	/**
	 * Contact US Controller
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
        // Get banner
        $param['where']['banner_id'] =2;
        $data['banner'] = $this->model_banner->find_one($param);
        $data['about_us'] = $this->model_cms_page->get_page(2);
        //debug($data['about_us'],1);
        // Load View
        $this->load_view("index", $data);
    }



}
