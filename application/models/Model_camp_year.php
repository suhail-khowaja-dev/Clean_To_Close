<?
class Model_camp_year extends MY_Model
{
    /**
     * TKD camp_year MODEL
     *
     * @package     camp_year Model
     * @version     1.0
     * @since       2017
     */

    protected $_table = 'camp_year';
    protected $_field_prefix = 'camp_year_';
    protected $_pk = 'camp_year_id';
    protected $_status_field = 'camp_year_status';
    public $pagination_params = array();
    public $relations = array();
    public $dt_params = array();
    public $_per_page = 20;

    function __construct()
    {
        // Call the Model constructor
        $this->pagination_params['fields'] = "camp_year_id,camp_year_title,CONCAT(camp_year_image_path,camp_year_image) AS camp_year_image,camp_year_status";

        parent::__construct();
    }
    public function get_total_count($params = array() , $keyword='')
    {

      // debug($keyword,1);

      // For search
      if(!empty($keyword)){
      $params['where_like'][] = array(
        'column'=>'camp_year_title',
        'value'=>$keyword,
        'type'=>'both',
        );
      }

      $params['joins'][] = array(
            'table' => 'camp_year_category',
            'joint' => 'camp_year_category.camp_year_category_id = camp_year.camp_year_category',
            'type' => 'right'
        );  


      // $params['where']['camp_year_id'] = $id;
      // Set params
      $params['order'] = 'camp_year_id DESC';


      return $this->find_count_active($params);
    }

    // Get pagination data
    public function get_pagination_data($limit = '', $offset = '', $param = array() ,$keyword = '')
    {
      $prefix = $this->db->dbprefix;

      $param['fields'] = "*,(select count(*) from yt_comment where comment_post_id=camp_year_id and comment_status=1) as comments_count";

      // LEFT JOIN
     $param['joins'][] = array(
            'table' => 'camp_year_category',
            'joint' => 'camp_year_category.camp_year_category_id = camp_year.camp_year_category',
            'type' => 'right'
        ); 
      // For search
      if(!empty($_GET['search'])  && $_GET['search'] != ''){
        $param['where_like'][] = array(
          'column'=>'camp_year_title',
          'value'=>$keyword,
          'type'=>'both',
        );
      }
      $param['order'] = 'camp_year_id DESC';
      $param['limit'] = $limit;
      $param['offset'] = $offset;

      // debug($param,1);
      
      // Query data
      $data = $this->find_all_active($param);
       // debug($data,1);

      return $data;
    }

    public function get_page_camp_year($page='')
    {
        // Set params
        $params['fields'] = 'camp_year_page,camp_year_title,camp_year_category,camp_year_image_path,camp_year_image,camp_year_status';
        $params['where']['camp_year_page'] = $page;
        return $this->model_camp_year->find_one_active($params);

    }

    // Check slug exists or not
    public function find_by_slug($slug)
    {
        $prefix = $this->db->dbprefix;

        // Set params

        /*$param['fields'] = "camp_year_id,camp_year_name,camp_year_slug,camp_year_detail,camp_year_image,camp_year_image_thumb,camp_year_image_path,camp_year_createdon,

        (SELECT COUNT(comment_post_id) FROM ".$prefix."comment WHERE comment_post_id = camp_year_id and comment_status=1) AS total_comments,camp_year_category_name";*/

        $param['fields'] = "camp_year_id,camp_year_title,camp_year_slug,camp_year_image,camp_year_image_thumb,camp_year_image_path,camp_year_createdon,

        (SELECT COUNT(comment_post_id) FROM ".$prefix."comment WHERE comment_post_id = camp_year_id and comment_status=1) AS total_comments";



        // LEFT JOIN

        /*$param['joins'][] = array(

            "table"=>"camp_year_category" ,

            "joint"=>"camp_year_category.camp_year_category_id = camp_year.camp_year_category_id and camp_year_category.camp_year_category_status =1",

            "type"=>"left"

        );*/



        $param['where']['camp_year_slug'] = $slug;

        // Query

        $result = $this->find_one_active($param);



        // Return result;

        return $result;

    }

    // Get news comments
    public function get_comments($slug)
    {
        // Set params
        $params['fields'] = "camp_year_id,camp_year_title,comment_post_id,comment_name,comment_description,comment_created_on";
        $params['where']['camp_year_slug'] = $slug;
        // Join
        $params['joins'][] = array(
            "table"=>"comment" ,
            "joint"=>"camp_year.camp_year_id = comment_post_id and comment_status=1",
        );
        $params['order'] = 'comment_id DESC';

        return $this->model_camp_year->find_all_active($params);
    }

    /*
    * table       Table Name
    * Name        FIeld Name
    * label       Field Label / Textual Representation in form and DT headings
    * type        Field type : hidden, text, textarea, editor, etc etc. 
    *                           Implementation in form_generator.php
    * type_dt     Type used by prepare_datatables method in controller to prepare DT value
    *                           If left blank, prepare_datatable Will opt to use 'type'
    * attributes  HTML Field Attributes
    * js_rules    Rules to be aplied in JS (form validation)
    * rules       Server side Validation. Supports CI Native rules
    */
    public function get_fields($specific_field = "")
    {
        // Use when add new image
        $is_required_image = (($this->uri->segment(4)!=null) && intval($this->uri->segment(4)))?'':'required';

        $fields = array(

            'camp_year_id' => array(
                'table' => $this->_table,
                'name' => 'camp_year_id',
                'label' => 'id #',
                'type' => 'hidden',
                'type_dt' => 'text',
                'attributes' => array(),
                'dt_attributes' => array("width" => "5%"),
                'js_rules' => '',
                'rules' => 'trim'
            ),

           // 'camp_year_category' => array(
           //       'table'   => $this->_table,
           //       'name'   => 'camp_year_category',
           //       'label'   => 'Category',
           //       'type'   => 'dropdown',
           //       'list_data' => array(),
           //       'attributes'   => array(),
           //       'js_rules'   => 'required',
           //       'rules'   => 'required|trim'
           //   ),
        


              'camp_year_title' => array(
                     'table'   => $this->_table,
                     'name'   => 'camp_year_title',
                     'label'   => 'Title',
                     'type'   => 'text',
                     'attributes'   => array("additional"=>'slugify="#'.$this->_table.'-'.$this->_field_prefix.'slug"'),
                     'js_rules'   => 'required',
                     'rules'   => 'required|trim|htmlentities'
                  ),

              'camp_year_slug'  => array(
                  'table'   => $this->_table,
                  'name'   => 'camp_year_slug',
                  'label'   => 'Slug',
                  'type'   => 'text',
                  'attributes'   => array(),
                  'js_rules'   => array("is_slug" => array() ),
                  'rules'   => 'required|htmlentities|strtolower|is_unique['.$this->_table.'.'.$this->_field_prefix.'slug]|callback_is_slug'
              ),

          //      'camp_year_auhtor' => array(
          //            'table'   => $this->_table,
          //            'name'   => 'camp_year_auhtor',
          //            'label'   => 'Author',
          //            'type'   => 'text',
          //            'attributes'   => array(),
          //            'js_rules'   => 'required',
          //            'rules'   => 'required|trim|htmlentities'
          //   ),

          //   'camp_year_date' => array(
          //       'table' => $this->_table,
          //       'name' => 'camp_year_date',
          //       'label' => 'Date',
          //       'type' => 'date',
          //       'attributes' => array(),
          //       'js_rules' => 'required',
          //       'rules' => 'required|trim|htmlentities'
          //   ),


          //   'camp_year_short_detail' => array(
          //       'table' => $this->_table,
          //       'name' => 'camp_year_short_detail',
          //       'label' => 'Short Description',
          //       'type' => 'textarea',
          //       'attributes' => array(),
          //       'js_rules' => 'required',
          //       'rules' => 'required|trim|htmlentities'
          //   ),
          
          // 'camp_year_detail' => array(
          //       'table' => $this->_table,
          //       'name' => 'camp_year_detail',
          //       'label' => 'Long Description',
          //       'type' => 'editor',
          //       'attributes' => array(),
          //       'js_rules' => 'required',
          //       'rules' => 'required|trim|htmlentities'
          //   ),

            // 'camp_year_image' => array(
            //     'table' => $this->_table,
            //     'name' => 'camp_year_image',
            //     'label' => 'Image',
            //     'name_path' => 'camp_year_image_path',
            //     'upload_config' => 'site_upload_camp_year',
            //     'type' => 'fileupload',
            //     'type_dt' => 'image',
            //     'randomize' => true,
            //     'preview' => 'true',
            //     // 'thumb'   => array(array('name'=>'camp_year_image_thumb','max_width'=>470, 'max_height'=>316),),
            //     'attributes'   => array(
            //         'image_size_recommended'=>'720px × 310px',
            //         'allow_ext'=>'png|jpeg|jpg',
            //     ),
            //     'dt_attributes' => array("width" => "10%"),
            //     'rules' => 'trim|htmlentities',
            //     'js_rules'=>$is_required_image
            // ),
            // 'camp_year_image_detail1' => array(
            //     'table' => $this->_table,
            //     'name' => 'camp_year_image_detail1',
            //     'label' => 'Image 1 Detail Page',
            //     'name_path' => 'camp_year_image_path',
            //     'upload_config' => 'site_upload_camp_year',
            //     'type' => 'fileupload',
            //     'type_dt' => 'image',
            //     'randomize' => true,
            //     'preview' => 'true',
                
            //     'attributes'   => array(
            //         'image_size_recommended'=>'540px × 370px',
            //         'allow_ext'=>'png|jpeg|jpg',
            //     ),
            //     'dt_attributes' => array("width" => "10%"),
            //     'rules' => 'trim|htmlentities',
            //    // 'js_rules'=>$is_required_image
            // ),
            // 'camp_year_image_detail2' => array(
            //     'table' => $this->_table,
            //     'name' => 'camp_year_image_detail2',
            //     'label' => 'Image 2 Detail Page',
            //     'name_path' => 'camp_year_image_path',
            //     'upload_config' => 'site_upload_camp_year',
            //     'type' => 'fileupload',
            //     'type_dt' => 'image',
            //     'randomize' => true,
            //     'preview' => 'true',
                
            //     'attributes'   => array(
            //         'image_size_recommended'=>'540px × 370px',
            //         'allow_ext'=>'png|jpeg|jpg',
            //     ),
            //     'dt_attributes' => array("width" => "10%"),
            //     'rules' => 'trim|htmlentities',
            //    // 'js_rules'=>$is_required_image
            // ),
            // 'camp_year_image_detail12' => array(
            //     'table' => $this->_table,
            //     'name' => 'camp_year_image_detail12',
            //     'label' => 'Image 3 Detail Page',
            //     'name_path' => 'camp_year_image_path',
            //     'upload_config' => 'site_upload_camp_year',
            //     'type' => 'fileupload',
            //     'type_dt' => 'image',
            //     'randomize' => true,
            //     'preview' => 'true',
                
            //     'attributes'   => array(
            //         'image_size_recommended'=>'540px × 370px',
            //         'allow_ext'=>'png|jpeg|jpg',
            //     ),
            //     'dt_attributes' => array("width" => "10%"),
            //     'rules' => 'trim|htmlentities',
            //    // 'js_rules'=>$is_required_image
            // ),

         /*'camp_year_by' => array(
                'table' => $this->_table,
                'name' => 'camp_year_by',
                'label' => 'By',
                'type' => 'text',
                'attributes' => array(),
                'js_rules' => 'required',
                'rules' => 'required|trim|htmlentities'
            ),*/

     // 'camp_year_latest_featured' => array(
     //            'table' => $this->_table,
     //            'name' => 'camp_year_latest_featured',
     //            'label' => 'Is Featured?',
     //            'type' => 'switch',
     //            'type_dt' => 'dropdown',
     //            'type_filter_dt' => 'dropdown',
     //            'list_data_key' => "camp_year_latest_featured" ,
     //            'list_data' => array(),
     //            'default' => '0',
     //            'attributes' => array(),
     //            'dt_attributes' => array("width" => "7%"),
     //            'rules' => 'trim'
     //        ),
            'camp_year_status' => array(
                'table' => $this->_table,
                'name' => 'camp_year_status',
                'label' => 'Status?',
                'type' => 'switch',
                'type_dt' => 'switch',
                'type_filter_dt' => 'dropdown',
                'list_data' => array(),
                'default' => '1',
                'attributes' => array(),
                'dt_attributes' => array("width" => "7%"),
                'rules' => 'trim'
            ),

        );

        if ($specific_field)
            return $fields[$specific_field];
        else
            return $fields;

    }

}

?>