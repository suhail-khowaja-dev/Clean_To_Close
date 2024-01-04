<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Why extends MY_Controller {

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
        $param['where']['banner_id'] =9;
        $data['banner'] = $this->model_banner->find_one($param);

        // data of Cleaning Professionals
        $data['ctc_why'] = $this->model_cms_page->get_page(9);
        $data['ctc_appointment'] = $this->model_cms_page->get_page(10);
        $data['ctc_hassle'] = $this->model_cms_page->get_page(11);
        $data['ctc_transparent'] = $this->model_cms_page->get_page(12);
        $data['ctc_outstanding'] = $this->model_cms_page->get_page(13);

        // data of Real Estate Professionals
        $data['ctc_real_estate'] = $this->model_cms_page->get_page(14);
        $data['ctc_vetted'] = $this->model_cms_page->get_page(15);
        $data['ctc_hassle1'] = $this->model_cms_page->get_page(16);
        $data['ctc_transparent1'] = $this->model_cms_page->get_page(17);
        $data['ctc_outstanding1'] = $this->model_cms_page->get_page(18);
      // debug($data['ctc_why'] ,1);

        $data['upcoming_camp'] = $this->model_camp->find_all_active();
        // Load View
        $this->load_view("index", $data);
    }



}
