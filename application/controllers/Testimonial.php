<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonial extends MY_Controller {

	/**
	 * Testimonial Controller
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

        // Get testimonials
        $data['content'] = $this->model_testimonial->find_all_active();
        // Set banner heading
        $data['banner_heading'] = "Testimonials";
        // Load View
        $this->load_view("index", $data);
    }

    public function detail($slug = '')
    {
        global $config;

        $this->layout_data['title'] = "Testimonial Details| ".g('site_name');
         // $data['banner'] = $this->model_inner_banner->get_banner(18);
        $param['where']['banner_id'] =7;
        $data['banner'] = $this->model_banner->find_one($param);

        $parm['where']['testimonial_slug'] = $slug;
        $data['testimonial_details']  = $this->model_testimonial->find_one_active($parm);
        // debug($data['blog_details'],1);
        $parm_1['where']['comment_post_id'] = $data['testimonial_description']['testimonial_id'];
        $data['leave_a_comment'] =  $this->model_comment->find_all_active($parm_1);
        // debug($data['leave_a_comment'],1);

        $parm1['where']['testimonial_status'] = 1;
        $data['testimonial'] = $this->model_testimonial->find_all_active($parm1);
// recent blog
        $param_2['limit'] = 5;
        $param_2['where']['testimonial_id !='] = $data['testimonial_description']['testimonial_id'];
        $param_2['order'] = 'testimonial_id DESC';
        $data['testimonial'] = $this->model_testimonial->find_all_active($param_2);

// // Popular blog
//         $param_3['limit'] = 5;
//         $param_3['where']['blog_latest_featured'] = 1;
//         $param_3['order'] = 'testimonial_id DESC';
//         $data['popular_blog'] = $this->model_blog->find_all_active($param_3);
        // debug($data['recent_blog'],1);


        $this->load_view("index", $data);
    }

}
