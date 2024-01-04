<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends MY_Controller {

	/**
	 * Contact US Controller
	 */
	
	public function __construct()
    {
        $this->seo_id = 2;
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Page
    public function index()
    {
        global $config;
         $this->load->helper('url');
         $currentURL = current_url();
        //  debug($currentURL,1);
        //  if($currentURL == 'http://localhost/cleantoclose_dev/user'){
        //  redirect('http://localhost/cleantoclose_dev/', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/top-real-estate-apps' || $currentURL == 'http://designprosusa.com/top-real-estate-apps'){
        //  redirect('https://designprosusa.com/blog/top-real-estate-apps', 'location');
        //  }
        //  if($currentURL == 'https://designprosusa.com/blog/minimal-viable-product' || $currentURL == 'http://designprosusa.com/blog/minimal-viable-product'){
        //  redirect('https://designprosusa.com/blog/minimum-viable-product', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/blog/react-vs-angular' || $currentURL == 'http://designprosusa.com/blog/react-vs-angular'){
        //  redirect('https://designprosusa.com/blog/angular-vs-react', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/web-apps' || $currentURL == 'http://designprosusa.com/web-apps'){
        //  redirect('https://designprosusa.com/web-application-development', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/252886432.html' || $currentURL == 'http://designprosusa.com/252886432.html'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
        //  if($currentURL == 'https://designprosusa.com/cdn-cgi/l/email-protection' || $currentURL == 'http://designprosusa.com/cdn-cgi/l/email-protection'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/gias/accessories' || $currentURL == 'http://designprosusa.com/gias/accessories'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
        //  if($currentURL == 'https://designprosusa.com/gias/clothing-collection' || $currentURL == 'http://designprosusa.com/gias/clothing-collection'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/gias/plus-size-collection' || $currentURL == 'http://designprosusa.com/gias/plus-size-collection'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
        //  if($currentURL == 'https://designprosusa.com/index.php?/help' || $currentURL == 'http://designprosusa.com/index.php?/help' || $currentURL == 'https://designprosusa.com/help' ){
        //  redirect('https://designprosusa.com/contact-us', 'location');
        //  }
        //   if($currentURL == 'https://designprosusa.com/index.php?/checkout/get_basket' || $currentURL == 'http://designprosusa.com/index.php?/checkout/get_basket' || $currentURL == 'https://designprosusa.com/checkout/get_basket' ){
        //  redirect('https://designprosusa.com/contact-us', 'location');
        //  }
        //  if($currentURL == 'https://designprosusa.com/index.php?/services/' || $currentURL == 'http://designprosusa.com/index.php?/services/' || $currentURL == 'https://designprosusa.com/Services'){
        //  redirect('https://designprosusa.com/', 'location');
        //  }
         
        // Get banner
        //$data['banner'] = $this->model_inner_banner->get_banner(5);
        // $data['about_us'] = $this->model_cms_page->get_page(6);
        // Load View
        $this->load_view("errors");
    }



}
