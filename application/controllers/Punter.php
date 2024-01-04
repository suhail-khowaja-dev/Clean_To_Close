<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Punter extends MY_Controller {

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
        $param['where']['banner_id'] =4;
        $data['banner'] = $this->model_banner->find_one($param);
        $data['punter_year'] = $this->model_punter_year->find_all_active();
        //debug($data['punter_year'],1);
        // Load View
        $this->load_view("index", $data);
    }


    public function detail($slug = '')
    {
        $data['prospect_detail'] = $this->model_cms_page->find_by_pk(4);
        $data['prospect'] = $this->model_prospect->find_all_active();
        
        //debug(1,1);
        // has slug
        if(!empty($slug))
        {
            // Get slug response
            $data['punter_detail'] = $this->model_punter_year->find_by_slug($slug);
            //debug($punter_detail['punter_year_title']);

            // Found slug in table
            if(array_filled($data['punter_detail']))
            {
                //$data['banner'] = $this->model_banner->get_banners(8);
                // Set product info
                // $data['detail'] = $punter_detail;
                $data['punter_year_id'] = $data['punter_detail']['punter_year_id'];
                //debug($punter_year_id);
                // Get product images
                $param['where']['punter_ranking_year'] = $data['punter_year_id'];
                // $param['order'] = 'punter_ranking_prospect DESC';
                $param['order'] = 'punter_ranking_position ASC';
                $param['joins'][] = array(
                  "table"=>"punter_year" ,
                  "joint"=>"punter_year.punter_year_id = punter_ranking.punter_ranking_year"
                  );
                $data['punter_ranking'] = $this->model_punter_ranking->find_all_active($param);
                //debug($data['punter_ranking'],1);

                // Save record recent
                // if($this->userid>0){
                //     $this->model_recent_product->save_record($this->userid, $product_id);
                // }
                // Load view
                $this->load_view("detail" , $data);
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


    public function get_punter_ranking(){


        $id =  $_POST['id'];
        $year =  $_POST['year'];
         // debug($year,1);

        // $que1 = $this->db->query("SELECT * FROM mk_punter_ranking ORDER BY punter_ranking_prospect = ".$id." DESC")->row_array();

        $param['order'] = '4 DESC';
        $data['punters'] = $this->model_punter_ranking->find_all_active($param);
        //debug($data['punters'],1);
        // $que1 = $this->db->query("SELECT * FROM mk_punter_ranking WHERE punter_ranking_year = ".$year." ORDER BY punter_ranking_prospect = ".$id." DESC")->result_array();

        $que1 = $this->db->query("SELECT * FROM mk_punter_ranking WHERE punter_ranking_year = ".$year." AND punter_ranking_prospect = ".$id." ORDER BY punter_ranking_position ASC ")->result_array();
        //debug($que1,1);


        $para['where']['punter_year_id'] = $year;
        $grad_year = $this->model_punter_year->find_one_active($para);
        //debug($grad_year['punter_year_title'],1);
        $grad_year_title = $grad_year['punter_year_title'];

        $str = '';
        foreach ($que1 as $key => $value) {
            if($value['punter_ranking_prospect'] == 2){
                $rankings = "Still Developing";
            }elseif($value['punter_ranking_prospect'] == 2.5){
                    $rankings = "Developing with Minor Adjustments";
            }elseif($value['punter_ranking_prospect'] == 3){
                    $rankings = "D3 Ready";
            }elseif($value['punter_ranking_prospect'] == 3.5){
                    $rankings = "D2 Potential";
            }elseif($value['punter_ranking_prospect'] == 4){
                    $rankings = "D2 Ready";
            }elseif($value['punter_ranking_prospect'] == 4.5){
                    $rankings = "D1 FCS Ready";
            }elseif($value['punter_ranking_prospect'] == 5){
                    $rankings = "D1 FBS Group 5 Ready";
            }elseif($value['punter_ranking_prospect'] == 6){
                    $rankings = "D1 FBS Power 5 Ready";
            }elseif($value['punter_ranking_prospect'] == 7){
                    $rankings = "D1 FBS Ready";
            }

            $str .= '<tr>'.
            '<input type="hidden"  value='.$value['punter_ranking_id'].' class="get_id">'.
            '<td>'.++$counter.'</td>'.
            '<td>'.$value['punter_ranking_title'].'</td>'.
            '<td>'.$value['punter_ranking_last_name'].'</td>'.
            '<td>'.$grad_year_title.'</td>'.
            '<td>'.$value['punter_ranking_state'].'</td>'.
            '<td>'.$value['punter_ranking_offers'].'</td>'.
            '<td>'.$value['punter_ranking_commited'].'</td>'.
            '<td>'. $rankings .'</td>'.

            '</tr>';
        }

        if(count($que1) > 0)
          echo json_encode(array('status' => 1 , 'html' => $str));
        else
          echo json_encode(array('status' => 0 , 'html' => $str));
    }

    public function set_positions()
    {
        //debug($_REQUEST);
        // debug(1,1);
        $str = explode(',', $_POST['str']);


        
        $data = array_filter($str);

       //debug($data,1);

        foreach ($data as $key => $value) {
            $param['punter_ranking_position'] = $key;
            $this->model_punter_ranking->update_by_pk($value , $param);
        }
        
        $param['status'] = 1;
        $param['txt'] = 'success';
        echo json_encode($param);
    }



}
