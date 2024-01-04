<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Cleaning_service_closed extends MY_Controller
{
	
	/**
	* cleaning_service_closed page
	*
	* @package
	*
	* @version		1.0 --
	* @since		Version 1.0 2017
	*/
	
	public $_list_data = array();
	
	public function __construct()
	{
		
		global $config;
		
		parent::__construct();
		$this->dt_params['dt_headings'] = "cleaning_service_id,cleaning_service_realtor_name,cleaning_service_cleaner_name,cleaning_service_address,cleaning_service_city,cleaning_service_state,cleaning_service_closing_date,cleaning_service_zipcode,cleaning_service_status";
		$this->dt_params['searchable'] = array("cleaning_service_id", "cleaning_service_realtor_name", "cleaning_service_cleaner_name","cleaning_service_address","cleaning_service_city", "cleaning_service_state", "cleaning_service_status","cleaning_service_zipcode");
		$this->dt_params['action'] = array(
			"hide_add_button" => true,
			"hide" => false,
			"show_delete" => false,
			"show_edit" => false,
			"order_field" => false,
			"show_view" => false,
			"extra" => array(
				'<a title="View" href="'.$config['admin_base_url'].'cleaning_service_closed/detail?id=%d" class="btn-xs btn btn-primary cleaner_details_btn" target="_blank"><i class="icon-users"></i></a>',
				
			),
		);
		
		$this->_list_data['cleaning_service_status'] = array(
			STATUS_INACTIVE => "<span class=\"label label-danger\">Inactive</span>",
			STATUS_ACTIVE =>  "<span class=\"label label-primary\">Active</span>"
		);
		
		$this->_list_data['cleaning_service_is_popular'] = array(
			STATUS_INACTIVE => "<span class=\"label label-default\">No</span>",
			STATUS_ACTIVE =>  "<span class=\"label label-primary\">Yes</span>"
		);
		// Following are common so, defined in MY_Controller_Admin
		// $this->dt_params['paginate']['class'] = $config['js_config']['ci_class'];
		// $this->dt_params['paginate']['uri'] = "paginate";
		// $this->dt_params['paginate']['update_status_uri'] = "update_status";
		
		// For use IN JS Files
		$config['js_config']['paginate'] = $this->dt_params['paginate'];
		
		$this->_list_data['cleaning_service_user_id'] = $this->model_signup->find_all_list_active(array('where' => array('signup_type =' => 1)), "signup_firstname");
		
		$this->_list_data['cleaning_service_cleaner_id'] = $this->model_signup->find_all_list_active(array('where' => array('signup_type =' => 2)), "signup_firstname");
		
		// Populating LISTDATA
		
		$_POST = $this->input->post(NULL, false);
	}
	
	public function detail()
	{
		
		//debug($sale_id);
		/** check rights before deletion **/
		$class_name = $this->router->class;
		$page_name = $class_name . "_edit";
		//$this->admin_rights->check_admin_rights($page_name);
		
		//$this->add_script(array( "jquery.validate.js" , "form-validation-script.js") , "js" );
		
		$this->layout_data['template_config']['show_toolbar'] = false;
		$this->register_plugins(array(
			"jquery-ui",
			"bootstrap",
			"bootstrap-hover-dropdown",
			"jquery-slimscroll",
			"uniform",
			"boots",
			"font-awesome",
			"simple-line-icons",
			"select2",
			"bootbox",
			"bootstrap-toastr",
			"bootstrap-datetimepicker"
		));
		//sqft data
		$data['sqft_data'] = $this->model_sqft->find_all_active();

		// join with sqft , arrivaltime , leftime
		$paramscle['joins'][] = array(
			"table" => "sqft",
			"joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
		);

		$paramscle['where']['cleaning_service_id'] = $_GET['id'];
		$data['cleaning_data'] = $this->model_cleaning_service->find_one($paramscle);
		// debug($data['cleaning_data'],1);
		// end function

		$paramsar['joins'][] = array(
			"table" => "cleaning_service",
			"joint" => " cleaning_service.cleaning_service_id = arrival_time.arrival_time_cleaning_id"
		);
		$paramsar['where']['cleaning_service_id'] = $_GET['id'];
		$data['arrival_time'] = $this->model_arrival_time->find_one($paramsar);
		// debug($data['cleaning_data'],1);


		$paramsleft['joins'][] = array(
			"table" => "cleaning_service",
			"joint" => "cleaning_service.cleaning_service_id = left_time.left_time_cleaning_id "
		);
		$paramsleft['where']['cleaning_service_id'] = $_GET['id'];
		$data['left_time'] = $this->model_left_time->find_one($paramsleft);


		$param123['joins'][] = array(
			"table" => "cleaning_service",
			"joint" => "cleaning_service.cleaning_service_user_id = signup.signup_id"
		);
		$param123['where']['cleaning_service_id'] = $_GET['id'];
		// $param123['where']['signup_type'] = 1;
		$data['user_data'] = $this->model_signup->find_one($param123);
		// debug($data['user_data'],1);
		// addtional add data function
		$param['where']['additional_add_ons_type'] = 1;
		$data['additional_add_ons'] = $this->model_additional_add_ons->find_all_active($param);
		// end function

		// Document Images function 
		$param2['joins'][] = array(
			"table" => "cleaning_service",
			"joint" => "cleaning_service.cleaning_service_id = upload_document.upload_document_cleaning_id"
		);
		$param2['where']['upload_document_cleaning_id'] = $_GET['id'];
		$data['upload_document'] = $this->model_upload_document->find_one($param2);
		// debug($data['upload_document'],1);

		$this->load_view("detail", $data);
	}
	
	// public function update_data()
	// {
	// 	// debug($_POST);
	// 	// debug($_FILES,1);
		
	// 	$param['where']['upload_document_id'] = $_POST['updatedata']['upload_document_id'];
	// 	$data = $this->model_upload_document->find_one($param);
	// 	// debug($data,1);
		
	// 	$id = intval($_POST['updatedata']['upload_document_id']);
	// 	$uploaddocument_data = $this->input->post('updatedata');
		
	// 	if (isset($_POST) and array_filled($_POST,$uploaddocument_data)) {
	// 		$id = intval($_POST['updatedata']['cleaning_service_id']);
	// 		// debug($id,1);
	// 		 $this->model_cleaning_service->update_by_pk($id, array(
	// 			'cleaning_service_id' => $_POST['updatedata']['cleaning_service_id'],
	// 			'cleaning_service_compelted_user_id' =>$_POST['updatedata']['cleaning_service_compelted_user_id'],
	// 			'cleaning_service_upload_user_id' =>$_POST['updatedata']['cleaning_service_upload_user_id'],
	// 			'cleaning_service_cleaner_id' =>$_POST['updatedata']['cleaning_service_cleaner_id'],
	// 			'cleaning_service_user_id' => $_POST['updatedata']['cleaning_service_user_id'],
	// 			'cleaning_service_address' => $_POST['updatedata']['cleaning_service_address'],
	// 			'cleaning_service_unit' => $_POST['updatedata']['cleaning_service_unit'],
	// 			'cleaning_service_city' => $_POST['updatedata']['cleaning_service_city'],
	// 			'cleaning_service_state' => $_POST['updatedata']['cleaning_service_state'],
	// 			'cleaning_service_zipcode' => $_POST['updatedata']['cleaning_service_zipcode'],
	// 			'cleaning_service_lockbox' => $_POST['updatedata']['cleaning_service_lockbox'],
	// 			'cleaning_service_sentri_lock' => $_POST['updatedata']['cleaning_service_sentri_lock'],
	// 			'cleaning_service_garage' => $_POST['updatedata']['cleaning_service_garage'],
	// 			'cleaning_service_supra_cbs_code' => $_POST['updatedata']['cleaning_service_supra_cbs_code'],
	// 			'cleaning_service_code_info' => $_POST['updatedata']['cleaning_service_code_info'],
	// 			'cleaning_service_location_of_lockbox' => $_POST['updatedata']['cleaning_service_location_of_lockbox'],
	// 			'cleaning_service_mls' => $_POST['updatedata']['cleaning_service_mls'],
	// 			'cleaning_service_representing' => $_POST['updatedata']['cleaning_service_representing'],
	// 			'cleaning_service_projected_closing_date' => $_POST['updatedata']['cleaning_service_projected_closing_date'],
	// 			'cleaning_service_closing_tittle_company' => $_POST['updatedata']['cleaning_service_closing_tittle_company'],
	// 			'cleaning_service_cleaning_occur_prior_closing' => $_POST['updatedata']['cleaning_service_cleaning_occur_prior_closing'],
	// 			'cleaning_service_responsible_payment' => $_POST['updatedata']['cleaning_service_responsible_payment'],
	// 			'cleaning_service_closing_date' => $_POST['updatedata']['cleaning_service_closing_date'],
	// 			'cleaning_service_closing_time' => $_POST['updatedata']['cleaning_service_closing_time'],
	// 			'cleaning_service_type_residence' => $_POST['updatedata']['cleaning_service_type_residence'],
	// 			'cleaning_service_square_footage' => $_POST['updatedata']['cleaning_service_square_footage'],
	// 			'cleaning_service_bathroom' => $_POST['updatedata']['cleaning_service_bathroom'],
	// 			'cleaning_service_full_bathroom' => $_POST['updatedata']['cleaning_service_full_bathroom'],
	// 			'cleaning_service_bedrooms' => $_POST['updatedata']['cleaning_service_bedrooms'],
	// 			'cleaning_service_first_name' => $_POST['updatedata']['cleaning_service_first_name'],
	// 			'cleaning_service_email' => $_POST['updatedata']['cleaning_service_email'],
	// 			'cleaning_service_contact' => $_POST['updatedata']['cleaning_service_contact'],
	// 			'cleaning_service_other_buyer_fullname' => $_POST['updatedata']['cleaning_service_other_buyer_fullname'],
	// 			'cleaning_service_other_buyer_email' => $_POST['updatedata']['cleaning_service_other_buyer_email'],
	// 			'cleaning_service_other_buyer_phone' => $_POST['updatedata']['cleaning_service_other_buyer_phone'],
	// 			'cleaning_service_other_seller_fullname' => $_POST['updatedata']['cleaning_service_other_seller_fullname'],
	// 			'cleaning_service_other_seller_email' => $_POST['updatedata']['cleaning_service_other_seller_email'],
	// 			'cleaning_service_other_seller_phone' => $_POST['updatedata']['cleaning_service_other_seller_phone'],
	// 			'cleaning_service_agent_buyer_name' => $_POST['updatedata']['cleaning_service_agent_buyer_name'],
	// 			'cleaning_service_agent_buyer_email' => $_POST['updatedata']['cleaning_service_agent_buyer_email'],
	// 			'cleaning_service_agent_buyer_phone' => $_POST['updatedata']['cleaning_service_agent_buyer_phone'],
	// 			'cleaning_service_agent_seller_name' => $_POST['updatedata']['cleaning_service_agent_seller_name'],
	// 			'cleaning_service_agent_seller_email' => $_POST['updatedata']['cleaning_service_agent_seller_email'],
	// 			'cleaning_service_agent_seller_phone' => $_POST['updatedata']['cleaning_service_agent_seller_phone'],
	// 		));
			
	// 	}
	// 		if ($this->validate("model_upload_document")) {
				
	// 			// before image
	// 			$file_name = $_FILES['updatedata']['name']['upload_document_before1_image'];
	// 			$tmp_name = $_FILES['updatedata']['tmp_name']['upload_document_before1_image'];
	// 			move_uploaded_file($tmp_name, 'assets/uploads/cleaning_picture/' . $file_name);
				
	// 			$file_name1 = $_FILES['updatedata']['name']['upload_document_before2_image'];
	// 			$tmp_name1 = $_FILES['updatedata']['tmp_name']['upload_document_before2_image'];
	// 			move_uploaded_file($tmp_name1, 'assets/uploads/cleaning_picture/' . $file_name1);
				
	// 			$file_name2 = $_FILES['updatedata']['name']['upload_document_before3_image'];
	// 			$tmp_name2 = $_FILES['updatedata']['tmp_name']['upload_document_before3_image'];
	// 			move_uploaded_file($tmp_name2, 'assets/uploads/cleaning_picture/' . $file_name2);
				
	// 			// after image
	// 			$file_name3 = $_FILES['updatedata']['name']['upload_document_after1_image'];
	// 			$tmp_name3 = $_FILES['updatedata']['tmp_name']['upload_document_after1_image'];
	// 			move_uploaded_file($tmp_name3, 'assets/uploads/cleaning_picture/' . $file_name3);
				
	// 			$file_name4 = $_FILES['updatedata']['name']['upload_document_after2_image'];
	// 			$tmp_name4 = $_FILES['updatedata']['tmp_name']['upload_document_after2_image'];
	// 			move_uploaded_file($tmp_name4, 'assets/uploads/cleaning_picture/' . $file_name4);
				
	// 			$file_name5 = $_FILES['updatedata']['name']['upload_document_after3_image'];
	// 			$tmp_name5 = $_FILES['updatedata']['tmp_name']['upload_document_after3_image'];
	// 			move_uploaded_file($tmp_name5, 'assets/uploads/cleaning_picture/' . $file_name5);
				
	// 			// signed image
	// 			$file_name6 = $_FILES['updatedata']['name']['upload_document_signed_image'];
	// 			$tmp_name6 = $_FILES['updatedata']['tmp_name']['upload_document_signed_image'];
	// 			move_uploaded_file($tmp_name6, 'assets/uploads/cleaning_picture/' . $file_name6);
				
	// 			// if($_FILES )
	// 			// before images condition
	// 			if ($_FILES['updatedata']['name']['upload_document_before1_image'] != "") {
					
	// 				$uploaddocument['upload_document_before1_image'] = $_FILES['updatedata']['name']['upload_document_before1_image'];
	// 			} else {
	// 				$uploaddocument['upload_document_before1_image'] = $data['upload_document_before1_image'];
	// 			}
				
	// 			if ($_FILES['uploaddocument']['name']['upload_document_before2_image'] != "") {
					
	// 				$uploaddocument['upload_document_before2_image'] = $_FILES['updatedata']['name']['upload_document_before2_image'];
	// 			} else {
					
	// 				$uploaddocument['upload_document_before2_image'] = $data['upload_document_before2_image'];
	// 			}
				
	// 			if ($_FILES['uploaddocument']['name']['upload_document_before3_image'] != "") {
					
	// 				$uploaddocument['upload_document_before3_image'] = $_FILES['updatedata']['name']['upload_document_before3_image'];
	// 			} else {
					
	// 				$uploaddocument['upload_document_before3_image'] = $data['upload_document_before3_image'];
	// 			}
				
	// 			// after images condition
	// 			if ($_FILES['updatedata']['name']['upload_document_after1_image'] != "") {
					
	// 				$uploaddocument['upload_document_after1_image'] = $_FILES['updatedata']['name']['upload_document_after1_image'];
	// 			} else {
	// 				$uploaddocument['upload_document_after1_image'] = $data['upload_document_after1_image'];
	// 			}
				
	// 			if ($_FILES['updatedata']['name']['upload_document_after2_image'] != "") {
					
	// 				$uploaddocument['upload_document_after2_image'] = $_FILES['updatedata']['name']['upload_document_after2_image'];
	// 			} else {
					
	// 				$uploaddocument['upload_document_after2_image'] = $data['upload_document_after2_image'];
	// 			}
				
	// 			if ($_FILES['updatedata']['name']['upload_document_after3_image'] != "") {
					
	// 				$uploaddocument['upload_document_after3_image'] = $_FILES['updatedata']['name']['upload_document_after3_image'];
	// 			} else {
					
	// 				$uploaddocument['upload_document_after3_image'] = $data['upload_document_after3_image'];
	// 			}
				
	// 			// document image condtion
				
	// 			if ($_FILES['updatedata']['name']['upload_document_signed_image'] != "") {
					
	// 				$uploaddocument['upload_document_signed_image'] = $_FILES['updatedata']['name']['upload_document_signed_image'];
	// 			} else {
	// 				$uploaddocument['upload_document_signed_image'] = $data['upload_document_signed_image'];
	// 			}
	// 			// inserted data
	// 			$this->model_upload_document->update_by_pk($id, $uploaddocument);
	// 			// debug($status,1);
	// 		}
	// 		 $json_param['status'] = true;
    //         echo json_encode($json_param);
	
	// }
}