<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cleaning_service extends MY_Controller
{

	/**
	 * cleaning_service page
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

		$this->dt_params['searchable'] = array("cleaning_service_id", "cleaning_service_realtor_name", "cleaning_service_cleaner_name", "cleaning_service_address", "cleaning_service_city", "cleaning_service_state", "cleaning_service_status", "cleaning_service_zipcode");
		// $this->dt_params['searchable']= "cleaning_service_status";

		$this->dt_params['action'] = array(
			"hide_add_button" => true,
			"hide" => false,
			"show_delete" => false,
			"show_edit" => false,
			"order_field" => false,
			"show_view" => false,
			"extra" => array(
				'<a title="View" href="' . $config['admin_base_url'] . 'cleaning_service/detail?id=%d" class="btn-xs btn btn-primary cleaner_details_btn" target="_blank"><i class="icon-users"></i></a>',
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
		// debug($this->input->post,1);
		// debug($_list_data);

	}
	// data show ffunction
	public function detail()
	{
		// debug($_POST,1);
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

		$paramselec['joins'][] = array(
			"table" => "cleaning_service",
			"joint" => "cleaning_service.cleaning_service_cleaner_id = signup.signup_id"
		);
		$paramselec['where']['cleaning_service_id'] = $_GET['id'];
		$paramselec['where']['signup_type'] = 2;
		$data['user_data_clean'] = $this->model_signup->find_one($paramselec);
		// debug($data['user_data_clean'],1);
		$paramclean['where']['signup_type'] = 2;
		$paramclean['where']['signup_status'] = 1;
		$paramclean['where']['signup_package_job !='] = 0;
		$data['cleaning_name'] = $this->model_signup->find_all($paramclean);

		// debug($data['cleaning_name'],1);

		$this->load_view("detail", $data);
	}
	// end

	// order update function
	public function update_data()
	{
		// debug($_POST);
		// debug($_FILES,1);
		$param['where']['upload_document_id'] = $_POST['cleaning']['upload_document_id'];
		$data = $this->model_upload_document->find_one($param);
		// debug($data,1);

		$id = intval($_POST['cleaning']['upload_document_id']);
		$uploaddocument_data = $this->input->post('cleaning');

		if (isset($_POST) and array_filled($_POST, $uploaddocument_data)) {
			$id = intval($_POST['cleaning']['cleaning_service_id']);
			$this->model_cleaning_service->update_by_pk($id, array(
				'cleaning_service_id' => $_POST['cleaning']['cleaning_service_id'],
				'cleaning_service_compelted_user_id' => $_POST['cleaning']['cleaning_service_compelted_user_id'],
				'cleaning_service_zipcode' => $_POST['cleaning']['cleaning_service_zipcode'],
				'cleaning_service_lockbox' => $_POST['cleaning']['cleaning_service_lockbox'],
				'cleaning_service_code_info' => $_POST['cleaning']['cleaning_service_code_info'],
				'cleaning_service_location_of_lockbox' => $_POST['cleaning']['cleaning_service_location_of_lockbox'],
				'cleaning_service_supra_cbs_code' => $_POST['cleaning']['cleaning_service_supra_cbs_code'],
				'cleaning_service_garage' => $_POST['cleaning']['cleaning_service_garage'],
				'cleaning_service_closing_tittle_company' => $_POST['cleaning']['cleaning_service_closing_tittle_company'],
				'cleaning_service_closing_tittle_company_email' => $_POST['cleaning']['cleaning_service_closing_tittle_company_email'],
				'cleaning_service_closing_tittle_company_phone_number' => $_POST['cleaning']['cleaning_service_closing_tittle_company_phone_number'],
				'cleaning_service_status' => 5

			));
		}
		if ($this->validate("model_upload_document")) {

			// before image
			$file_name = $_FILES['cleaning']['name']['upload_document_before1_image'];
			$tmp_name = $_FILES['cleaning']['tmp_name']['upload_document_before1_image'];
			move_uploaded_file($tmp_name, 'assets/uploads/cleaning_picture/' . $file_name);

			$file_name1 = $_FILES['cleaning']['name']['upload_document_before2_image'];
			$tmp_name1 = $_FILES['cleaning']['tmp_name']['upload_document_before2_image'];
			move_uploaded_file($tmp_name1, 'assets/uploads/cleaning_picture/' . $file_name1);

			$file_name2 = $_FILES['cleaning']['name']['upload_document_before3_image'];
			$tmp_name2 = $_FILES['cleaning']['tmp_name']['upload_document_before3_image'];
			move_uploaded_file($tmp_name2, 'assets/uploads/cleaning_picture/' . $file_name2);

			// after image
			$file_name3 = $_FILES['cleaning']['name']['upload_document_after1_image'];
			$tmp_name3 = $_FILES['cleaning']['tmp_name']['upload_document_after1_image'];
			move_uploaded_file($tmp_name3, 'assets/uploads/cleaning_picture/' . $file_name3);

			$file_name4 = $_FILES['cleaning']['name']['upload_document_after2_image'];
			$tmp_name4 = $_FILES['cleaning']['tmp_name']['upload_document_after2_image'];
			move_uploaded_file($tmp_name4, 'assets/uploads/cleaning_picture/' . $file_name4);

			$file_name5 = $_FILES['cleaning']['name']['upload_document_after3_image'];
			$tmp_name5 = $_FILES['cleaning']['tmp_name']['upload_document_after3_image'];
			move_uploaded_file($tmp_name5, 'assets/uploads/cleaning_picture/' . $file_name5);

			// signed image
			$file_name6 = $_FILES['cleaning']['name']['upload_document_signed_image'];
			$tmp_name6 = $_FILES['cleaning']['tmp_name']['upload_document_signed_image'];
			move_uploaded_file($tmp_name6, 'assets/uploads/cleaning_picture/' . $file_name6);

			// if($_FILES )
			// before images condition
			if ($_FILES['cleaning']['name']['upload_document_before1_image'] != "") {

				$uploaddocument['upload_document_before1_image'] = $_FILES['cleaning']['name']['upload_document_before1_image'];
			} else {
				$uploaddocument['upload_document_before1_image'] = $data['upload_document_before1_image'];
			}

			if ($_FILES['uploaddocument']['name']['upload_document_before2_image'] != "") {

				$uploaddocument['upload_document_before2_image'] = $_FILES['cleaning']['name']['upload_document_before2_image'];
			} else {

				$uploaddocument['upload_document_before2_image'] = $data['upload_document_before2_image'];
			}

			if ($_FILES['uploaddocument']['name']['upload_document_before3_image'] != "") {

				$uploaddocument['upload_document_before3_image'] = $_FILES['cleaning']['name']['upload_document_before3_image'];
			} else {

				$uploaddocument['upload_document_before3_image'] = $data['upload_document_before3_image'];
			}

			// after images condition
			if ($_FILES['cleaning']['name']['upload_document_after1_image'] != "") {

				$uploaddocument['upload_document_after1_image'] = $_FILES['cleaning']['name']['upload_document_after1_image'];
			} else {
				$uploaddocument['upload_document_after1_image'] = $data['upload_document_after1_image'];
			}

			if ($_FILES['cleaning']['name']['upload_document_after2_image'] != "") {

				$uploaddocument['upload_document_after2_image'] = $_FILES['cleaning']['name']['upload_document_after2_image'];
			} else {

				$uploaddocument['upload_document_after2_image'] = $data['upload_document_after2_image'];
			}

			if ($_FILES['cleaning']['name']['upload_document_after3_image'] != "") {

				$uploaddocument['upload_document_after3_image'] = $_FILES['cleaning']['name']['upload_document_after3_image'];
			} else {

				$uploaddocument['upload_document_after3_image'] = $data['upload_document_after3_image'];
			}

			// document image condtion

			if ($_FILES['cleaning']['name']['upload_document_signed_image'] != "") {

				$uploaddocument['upload_document_signed_image'] = $_FILES['cleaning']['name']['upload_document_signed_image'];
			} else {
				$uploaddocument['upload_document_signed_image'] = $data['upload_document_signed_image'];
			}
			// inserted data
			$this->model_upload_document->update_by_pk($id, $uploaddocument);
			// debug($status,1);
		}
		$json_param['status'] = true;
		echo json_encode($json_param);
	}
	// end

	// realse job function
	public function relase_job()
	{
		$id = intval($_POST['relase']['cleaning_service_id']);
		// 		debug($id,1);
		$this->model_cleaning_service->update_by_pk($id, array(
			'cleaning_service_id' => $_POST['relase']['cleaning_service_id'],
			'cleaning_service_cleaner_id' => 0,
			'cleaning_service_cleaner_name' => '',
			'cleaning_service_status' => 1,
			'cleaning_service_accpet' => 0,
			'cleaning_service_cancel_status' => 0,
			'cleaning_service_cancel_reson' => ' ',
		));
		$json_param['status'] = true;
		echo json_encode($json_param);
	}
	// end

	// public function cleaner_update_id(){
	// 	// debug($_POST,1);
	// 	$id = intval($_POST['updateclenerid']['cleaning_service_id']);
	// 	$this->model_cleaning_service->update_by_pk($id, array(
	// 		'cleaning_service_id' => $_POST['updateclenerid']['cleaning_service_id'],
	// 		'cleaning_service_cleaner_id' => $_POST['updateclenerid']['cleaning_service_cleaner_id'],
	// 		'cleaning_service_status' => 3,
	// 	));
	// 	$json_param['status'] = true;
	// 	echo json_encode($json_param);
	// }


	public function cleaner_update_id()
	{
		// debug($_POST,1);
		$paramaccpet['where']['cleaning_service_id'] = $_POST['updateclenerid']['cleaning_service_id'];
		$data_updated_job = $this->model_cleaning_service->find_one($paramaccpet);
		// update jobs of cancel user
		$updateCancelUserJob['where']['signup_id'] = $data_updated_job['cleaning_service_cleaner_id'];
		$get_cancel_user_data = $this->model_signup->find_one($updateCancelUserJob);
		$update_cancel_user_job = $get_cancel_user_data['signup_package_job'] + 1;
		$id1 = $get_cancel_user_data['signup_id'];
		$this->model_signup->update_by_pk($id1, array(
			'signup_package_job' => $update_cancel_user_job,
		));
		// update jobs of assign user 
		$id2 = intval($_POST['updateclenerid']['cleaning_service_cleaner_id']);
		$updateAssignUserJob['where']['signup_id'] = $id2;
		$get_assign_user_data = $this->model_signup->find_one($updateAssignUserJob);
		$update_assign_user_job = $get_assign_user_data['signup_package_job'] - 1;
		$this->model_signup->update_by_pk($id2, array(
			'signup_package_job' => $update_assign_user_job,
		));

		$id = intval($_POST['updateclenerid']['cleaning_service_id']);
		$this->model_cleaning_service->update_by_pk($id, array(
			'cleaning_service_id' => $_POST['updateclenerid']['cleaning_service_id'],
			'cleaning_service_cleaner_id' => $_POST['updateclenerid']['cleaning_service_cleaner_id'],

			'cleaning_service_status' => 3,
		));
		$json_param['status'] = true;
		echo json_encode($json_param);
	}


	public function cancel_reson()
	{
		// debug($_POST,1);
		$paramcancel['where']['signup_id'] = $_POST['canceldata']['cleaning_service_cleaner_id'];
		$get_cancel_user = $this->model_signup->find_one($paramcancel);
		$update_cancel_user_package = $get_cancel_user['signup_package_job'] + 1;

		// debug($get_cancel_user,1);
		if (isset($_POST) and array_filled($_POST)) {
			$id = intval($_POST['canceldata']['cleaning_service_id']);
			$this->model_cleaning_service->update_by_pk($id, array(
				'cleaning_service_id' => $_POST['canceldata']['cleaning_service_id'],
				'cleaning_service_cleaner_id' => $_POST['canceldata']['cleaning_service_cleaner_id'],
				'cleaning_service_cancel_reson' => $_POST['canceldata']['cleaning_service_cancel_reson'],
				'cleaning_service_user_id' => $_POST['canceldata']['cleaning_service_user_id'],
				'cleaning_service_cancel_status' => 1,
				'cleaning_service_status' => 6,
			));

			$id1 = $_POST['canceldata']['cleaning_service_cleaner_id'];
			$this->model_signup->update_by_pk($id1, array(
				'signup_package_job' => $update_cancel_user_package,
			));

			if ($_POST['canceldata']['cleaning_service_cleaner_id'] > 0) {
				$this->model_email->cancel_email($id);
			}

			$json_param['status'] = true;
			echo json_encode($json_param);
		}
	}

	// public function cancel_reson(){
	// 	// debug($_POST,1);
	// 	if (isset($_POST) and array_filled($_POST)) {
	//         $id = intval($_POST['canceldata']['cleaning_service_id']);
	//         $this->model_cleaning_service->update_by_pk($id, array(
	//             'cleaning_service_id' => $_POST['canceldata']['cleaning_service_id'],
	//             'cleaning_service_cleaner_id' => $_POST['canceldata']['cleaning_service_cleaner_id'],
	//             'cleaning_service_cancel_reson' => $_POST['canceldata']['cleaning_service_cancel_reson'],
	//             'cleaning_service_user_id' => $_POST['canceldata']['cleaning_service_user_id'],
	//             'cleaning_service_cancel_status' => 1,
	//             'cleaning_service_status' => 2,
	//         ));

	// 		if($_POST['canceldata']['cleaning_service_cleaner_id'] > 0){
	//         $this->model_email->cancel_email($id);
	// 		}

	//         $json_param['status'] = true;
	//         echo json_encode($json_param);
	//     }
	// }


	public function  reschedule()
	{
		// debug($_POST,1);
		if (isset($_POST) and array_filled($_POST)) {

			$id = intval($_POST['cleaning_date']['cleaning_service_id']);
			$this->model_cleaning_service->update_by_pk($id, array(
				'cleaning_service_id' => $_POST['cleaning_date']['cleaning_service_id'],
				'cleaning_service_closing_date' => $_POST['cleaning_date']['cleaning_service_closing_date'],
				'cleaning_service_closing_time' => $_POST['cleaning_date']['cleaning_service_closing_time'],
				'cleaning_service_status' => 1,
				'cleaning_service_cancel_status' => 0,
				'cleaning_service_cancel_other' => '',
				'cleaning_service_cancel_reson' => '',
			));
			$para11['where']['cleaning_service_id'] = $id;
			$updatedata = $this->model_cleaning_service->find_one($para11);
			if ($updatedata['cleaning_service_cleaner_id'] > 0) {
				$this->model_cleaning_service->update_by_pk($id, array(
					'cleaning_service_update_status' => 1,
					'cleaning_service_status' => 3,
				));
				$this->model_email->update_date_email($id);
			}
			$json_param['status'] = true;
			echo json_encode($json_param);
		}
	}
}
