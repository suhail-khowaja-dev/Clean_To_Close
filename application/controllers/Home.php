<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Default Controller
	 */
	
	public function __construct()
    {
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Home Page
    public function index()
    {
     
        global $config;
        // Get banner
        $param['where']['banner_id'] =1;
        $data['banner'] = $this->model_banner->find_one($param);
        

        $data['testimonial'] = $this->model_testimonial->find_all_active();
        $data['content1'] = $this->model_cms_page->get_page(1);
        $data['content2'] = $this->model_cms_page->get_page(2);
        $data['content3'] = $this->model_cms_page->get_page(3);
        $data['content4'] = $this->model_cms_page->get_page(4);
        $data['content5'] = $this->model_cms_page->get_page(5);
        // debug($data['content5'],1);
        $data['content6'] = $this->model_cms_page->get_page(6);
        $data['content7'] = $this->model_cms_page->get_page(7);
        $data['content8'] = $this->model_cms_page->get_page(8);
        // $data['content9']
        // debug( $data['home_image'],1);

        $data['testimonial'] = $this->model_testimonial->find_all_active();
        //debug($data['testimonial'],1);

        

        // Load View
        $this->load_view("index", $data);
    }

    public function test()
    {
        global $config;
        // Get banner
        $param['where']['banner_id'] =1;
        $data['banner'] = $this->model_banner->find_one($param);
        

        $data['testimonial'] = $this->model_testimonial->find_all_active();
        $data['content1'] = $this->model_cms_page->get_page(1);
        $data['content2'] = $this->model_cms_page->get_page(2);
        $data['content3'] = $this->model_cms_page->get_page(3);
        $data['content4'] = $this->model_cms_page->get_page(4);
        $data['content5'] = $this->model_cms_page->get_page(5);
        // debug($data['content5'],1);
        $data['content6'] = $this->model_cms_page->get_page(6);
        $data['content7'] = $this->model_cms_page->get_page(7);
        $data['content8'] = $this->model_cms_page->get_page(8);
        // $data['content9']
        // debug( $data['home_image'],1);

        $data['testimonial'] = $this->model_testimonial->find_all_active();
        //debug($data['testimonial'],1);

        

        // Load View
        $this->load_view("test", $data);
    }


    public function detail($slug = '')
    {
        global $config;
        $this->layout_data['title'] = "News and Event Details | ".g('site_name');
        $data['banner'] = $this->model_inner_banner->get_banner(19);
        // has slug
        if(!empty($slug))
        {
            // Get slug response
            $parm['where']['news_slug'] = $slug;
            $data['news_details'] = $news_details= $this->model_news->find_one_active($parm);
            // debug($data['news_details'],1);
            // Found slug in table
            if(array_filled($data['news_details']))
            {
                // Load view
                $this->load_view("detail", $data);
            }
            // Not found
            else
            {
                redirect(l('404') , true);
            }
        }
        // No slug
        else
        {
            redirect(l('404') , true);
        }
    }

}
