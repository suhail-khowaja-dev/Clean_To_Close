<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Test  extends MY_Controller {


    public $_list_data = array();

    public function __construct() {

      global $config;


      parent::__construct();
        //$this->dt_params['dt_headings'] = "test _id, test _firstname, test _lastname, test _email, test _status";
      $this->dt_params['dt_headings'] = "test_id, test_title, test_address, test_latitude , test_longitude";
      $this->dt_params['searchable'] = array("test_id","test_title","test_address","test_latitude","test_longitude");
      $this->dt_params['action'] = array(
        "hide_add_button" => false ,
        "hide" => false ,
        "show_delete" => true ,
        "show_edit" => true ,
        "order_field" => false ,
        "show_view" => false ,
        "extra" => array() ,
    );

/*
        $this->_list_data['test _status'] = array(
                                        STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>",
                                        STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
                                    );*/

                                    $config['js_config']['paginate'] = $this->dt_params['paginate'];

        /*$this->_list_data['test _category'] = $this->model_category->find_all_list_active(array(),"category_name");
        $this->_list_data['test _level'] = $this->model_item->get_fields('item_level')['list_data'];
        $this->_list_data['test _item_type'] = $this->model_item->get_fields('item_type')['list_data'];*/

        $_POST = $this->input->post(NULL, false);
    }

    public function add($id='', $data=array())
    {
        
	    // Unset password to avoid pass change
       if((isset($_POST)) && (count($_POST)>0) && (!empty($id))){
           unset($_POST['test ']['test_password']);
       }
       parent::add($id, $data);
   }

    // update_password
   public function update_password(){
    $data = $this->input->post('test ');
    if((count($_POST) > 0) && (isset($data['test_password'])) && (!empty($data['test_password']))) {
        $param['test _password'] = md5($data['test_password']);
        $status = $this->model_test ->update_by_pk($data['test_id'],$param);
        if($status){
            $msg = 'Password changed successfully.';
            redirect($this->admin_path."?msgtype=success&msg=$msg", 'refresh');
        }
        else{
            $msg = "Unable to change password. Please user different password";
            redirect($this->admin_path."?msgtype=error&msg=$msg", 'refresh');
        }
    }
    else{
        $msg = "Record not updated.";
        redirect($this->admin_path."?msgtype=error&msg=$msg", 'refresh');
    }
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
