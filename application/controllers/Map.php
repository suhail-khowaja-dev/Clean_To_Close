<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends MY_Controller {

	/**

	 * Faqs Controller

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

        // $this->layout_data['title'] = "Areas | ".g('site_name');
        $param['where']['map_status'] = 1;
        $data['map'] = $this->model_map->find_all($param);
        // debug($data['banner'],1);   




        // $data['faqs'] = $this->model_faq->find_all_active();
        // debug($data['faqs'],1);   
        

        $this->load_view("index",$data); 

    }     
}

