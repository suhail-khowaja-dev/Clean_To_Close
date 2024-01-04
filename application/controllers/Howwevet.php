<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Howwevet extends MY_Controller {

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
        $param['where']['banner_id'] =10;
        $data['banner'] = $this->model_banner->find_one($param);
        $data['how_we_vet'] = $this->model_cms_page->get_page(19);
        $data['how_we_vet2'] = $this->model_cms_page->get_page(20);


        $para['order'] = 'camp_year_id DESC';
        $data['camp_year'] = $this->model_camp_year->find_all_active($para);
        //debug($data['camp_year'],1);
        // Load View
        $this->load_view("index", $data);
    }



}
