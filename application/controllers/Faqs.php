<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Faqs extends MY_Controller
{

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
        $this->layout_data['title'] = "Faq's | " . g('site_name');
        // $data['banner'] = $this->model_inner_banner->get_banner(5);
        $data['faqs'] = $this->model_faq->find_all_active();
        // debug($data['faqs'],1);   
        $data['manual'] = "manual";
        
        $this->load_view("index", $data);
    }

    public function searchFaq()
    {
        $this->db->select('*');
         $this->db->where('faq_status !=',2);
        $this->db->from('ctc_faq');
        $this->db->group_start();
        $this->db->like('faq_title', $_POST['search_input']);
        $this->db->or_like('faq_content', $_POST['search_input']);
        $this->db->group_end();
        $query = $this->db->get();
        $data['search_faqs'] = $query->result_array();
        $data['search'] = "search";
        $this->load_view("index", $data);

    }
}