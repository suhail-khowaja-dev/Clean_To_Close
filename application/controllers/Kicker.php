<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kicker extends MY_Controller {

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
        $param['where']['banner_id'] =3;
        $data['banner'] = $this->model_banner->find_one($param);
        $data['kicker_year'] = $this->model_kicker_year->find_all_active();
        //debug($data['kicker_year'],1);
        // Load View
        $this->load_view("index", $data);
    }


    public function detail($slug = '')
    {


        $data['prospect_detail'] = $this->model_cms_page->find_by_pk(3);
        $data['prospect'] = $this->model_prospect->find_all_active();
        // debug($data['prospect_detail'],1);
        // has slug
        if(!empty($slug))
        {
            // Get slug response
            $data['kicker_detail'] = $this->model_kicker_year->find_by_slug($slug);
            //debug($kicker_detail['kicker_year_title']);

            // Found slug in table
            if(array_filled($data['kicker_detail']))
            {
                //$data['banner'] = $this->model_banner->get_banners(8);
                // Set product info
                // $data['detail'] = $kicker_detail;
                $data['kicker_year_id'] = $data['kicker_detail']['kicker_year_id'];
                //debug($kicker_year_id,1);
                $param['where']['kicker_ranking_year'] = $data['kicker_year_id'];
                // $param['order'] = 'kicker_ranking_prospect DESC';
                $param['order'] = 'kicker_ranking_position ASC';
                $param['joins'][] = array(
                  "table"=>"kicker_year" ,
                  "joint"=>"kicker_year.kicker_year_id = kicker_ranking.kicker_ranking_year"
                  );
                $data['kicker_ranking'] = $this->model_kicker_ranking->find_all_active($param);

                // $que1 = $this->db->query("SELECT * FROM mk_kicker_ranking WHERE kicker_ranking_year = ".$year." AND kicker_ranking_prospect = ".$id." ORDER BY kicker_ranking_position ASC ")->result_array();

                //debug($data['kicker_ranking'],1);

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

    public function get_kicker_ranking(){


        $id =  $_POST['id'];
        $year =  $_POST['year'];
         // debug($id);

        // $que1 = $this->db->query("SELECT * FROM mk_kicker_ranking ORDER BY kicker_ranking_prospect = ".$id." DESC")->row_array();

        // $param['order'] = '4 DESC';
        // $data['kickers'] = $this->model_kicker_ranking->find_all_active($param);
        //debug($data['kickers'],1);
        // $que1 = $this->db->query("SELECT * FROM mk_kicker_ranking WHERE kicker_ranking_year = ".$year." ORDER BY kicker_ranking_prospect = ".$id." DESC")->result_array();
        $que1 = $this->db->query("SELECT * FROM mk_kicker_ranking WHERE kicker_ranking_year = ".$year." AND kicker_ranking_prospect = ".$id." ORDER BY kicker_ranking_position ASC ")->result_array();
        // debug($que1,1);
        // $que1 = $this->db->query("SELECT * FROM mk_kicker_ranking WHERE kicker_ranking_year = ".$year." AND kicker_ranking_prospect = ".$id."  ")->result_array();
        //debug($que1,1);


        $para['where']['kicker_year_id'] = $year;
        $grad_year = $this->model_kicker_year->find_one_active($para);
        //debug($grad_year['kicker_year_title'],1);
        $grad_year_title = $grad_year['kicker_year_title'];

        $str = '';
        foreach ($que1 as $key => $value) {
            if($value['kicker_ranking_prospect'] == 2){
                $rankings = "Still Developing";
            }elseif($value['kicker_ranking_prospect'] == 2.5){
                    $rankings = "Developing with Minor Adjustments";
            }elseif($value['kicker_ranking_prospect'] == 3){
                    $rankings = "D3 Ready";
            }elseif($value['kicker_ranking_prospect'] == 3.5){
                    $rankings = "D2 Potential";
            }elseif($value['kicker_ranking_prospect'] == 4){
                    $rankings = "D2 Ready";
            }elseif($value['kicker_ranking_prospect'] == 4.5){
                    $rankings = "D1 FCS Ready";
            }elseif($value['kicker_ranking_prospect'] == 5){
                    $rankings = "D1 FBS Group 5 Ready";
            }elseif($value['kicker_ranking_prospect'] == 6){
                    $rankings = "D1 FBS Power 5 Ready";
            }elseif($value['kicker_ranking_prospect'] == 7){
                    $rankings = "D1 FBS Ready";
            }

            $str .= '<tr>'.
            '<input type="hidden"  value='.$value['kicker_ranking_id'].' class="get_id">'.
            '<td>'.++$counter.'</td>'.
            '<td>'.$value['kicker_ranking_title'].'</td>'.
            '<td>'.$value['kicker_ranking_last_name'].'</td>'.
            '<td>'.$grad_year_title.'</td>'.
            '<td>'.$value['kicker_ranking_state'].'</td>'.
            '<td>'.$value['kicker_ranking_offers'].'</td>'.
            '<td>'.$value['kicker_ranking_commited'].'</td>'.
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
            $param['kicker_ranking_position'] = $key;
            $this->model_kicker_ranking->update_by_pk($value , $param);
        }
        
        $param['status'] = 1;
        $param['txt'] = 'success';
        echo json_encode($param);
    }



}
