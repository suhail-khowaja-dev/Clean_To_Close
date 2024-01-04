<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends MY_Controller {

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
        $param['where']['banner_id'] =6;
        $data['banner'] = $this->model_banner->find_one($param);
        $data['about_us'] = $this->model_cms_page->get_page(6);
        $data['team'] = $this->model_team->find_all_active();
        // Load View
        $this->load_view("index", $data);
    }



}
