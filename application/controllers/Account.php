<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller
{

    /**
     * Account Controller
     *
     */

    public function __construct()
    {
        // Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Profile page
    public function index()
    {
        // if ($this->userid <= 0) {
        //     redirect(g('base_url') . 'user/index');
        // }
        // global $config;
        // Set banner heading
        //$data['banner_heading'] = "My Account";

        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);
        // Get banner
        // $data['banner'] = $this->model_banner->get_banners(8);

        //$data['banner'] = $this->model_inner_banner->find_by_pk(2);
        $this->load_view("index", $data);
    }

    // Account info page
    public function info()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        //$model = $this->cuser_model;
        //$this->add_script(array('innerstyle.css','font-awesome.min.css'));
        $data['userEmail'] = $this->session->userdata['logged_in']['email'];
        $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        //$data['title'] = 'My Account Info';
        // Set banner heading
        $data['banner_heading'] = "Account Info";

        // 1:parent/teacher , 2:kid
        //$view = ($this->user_type==1)?'info':'kid/info';

        $this->load_view("info", $data);
    }

    public function update_info()
    {
        // debug($_POST,1);
        // debug($_FILES,1);

        $param['where']['signup_id'] = $_POST['signup']['signup_id'];
        $param['where']['signup_type'] = $_POST['signup']['signup_type'];
        $data = $this->model_signup->find_one($param);
        // debug($data, 1);

        $signup_data = $this->input->post('signup');

        if ((count($_POST) > 0) && (array_filled($signup_data))) {

            if ($this->validate("model_signup")) {

                $file_name1 = $_FILES['signup']['name']['signup_insurance_company_image'];
                $tmp_name1 = $_FILES['signup']['tmp_name']['signup_insurance_company_image'];
                move_uploaded_file($tmp_name1, 'assets/uploads/signup/' . $file_name1);
                $file_name2 = $_FILES['signup']['name']['signup_w_9_image'];
                $tmp_name2 = $_FILES['signup']['tmp_name']['signup_w_9_image'];
                move_uploaded_file($tmp_name2, 'assets/uploads/signup/' . $file_name2);

                // if($_FILES )
                if ($_FILES['signup']['name']['signup_insurance_company_image'] != "") {

                    $signup_data['signup_insurance_company_image'] = $_FILES['signup']['name']['signup_insurance_company_image'];
                } else {
                    $signup_data['signup_insurance_company_image'] = $data['signup_insurance_company_image'];
                }

                if ($_FILES['signup']['name']['signup_w_9_image'] != "") {

                    $signup_data['signup_w_9_image'] = $_FILES['signup']['name']['signup_w_9_image'];
                } else {

                    $signup_data['signup_w_9_image'] = $data['signup_w_9_image'];
                }

                //$signup_data['signup_w_9_image'] = $file_name2;

                // debug($_POST);
                // debug($_FILES,1);

                $status = $this->model_signup->update_by_pk($this->userid, $signup_data);
                // debug($status,1);

                if ($status > 0) {
                    // Update session
                    $this->model_signup->update_user_session($signup_data);

                    $param['status'] = 1;
                    $param['txt'] = 'Updated successfully.';
                    echo json_encode($param);
                } else {
                    $param['status'] = 0;
                    $param['txt'] = 'Fail to update record';
                    echo json_encode($param);
                }
            } else {
                $param['status'] = 0;
                $param['txt'] = validation_errors();
                echo json_encode($param);
            }
        } else {
            $param['status'] = 0;
            $param['txt'] = "Please enter required field";
            echo json_encode($param);
        }
    }

    public function update_document()
    {
        // debug($_POST,1);
        // debug($_FILES,1);

        $param['where']['signup_id'] = $_POST['signup']['signup_id'];
        $param['where']['signup_type'] = $_POST['signup']['signup_type'];
        $data = $this->model_signup->find_one($param);
        // debug($data, 1);

        $signup_data = $this->input->post('signup');

        if ((count($_POST) > 0) && (array_filled($signup_data))) {

            $file_name1 = $_FILES['signup']['name']['signup_insurance_company_image'];
            $tmp_name1 = $_FILES['signup']['tmp_name']['signup_insurance_company_image'];
            move_uploaded_file($tmp_name1, 'assets/uploads/signup/' . $file_name1);
            $file_name2 = $_FILES['signup']['name']['signup_w_9_image'];
            $tmp_name2 = $_FILES['signup']['tmp_name']['signup_w_9_image'];
            move_uploaded_file($tmp_name2, 'assets/uploads/signup/' . $file_name2);

            // if($_FILES )
            if ($_FILES['signup']['name']['signup_insurance_company_image'] != "") {

                $signup_data['signup_insurance_company_image'] = $_FILES['signup']['name']['signup_insurance_company_image'];
            } else {
                $signup_data['signup_insurance_company_image'] = $data['signup_insurance_company_image'];
            }

            if ($_FILES['signup']['name']['signup_w_9_image'] != "") {

                $signup_data['signup_w_9_image'] = $_FILES['signup']['name']['signup_w_9_image'];
            } else {

                $signup_data['signup_w_9_image'] = $data['signup_w_9_image'];
            }

            // $signup_data['signup_w_9_image'] = $file_name2;

            // debug($_POST);
            // debug($_FILES,1);

            $status = $this->model_signup->update_by_pk($this->userid, $signup_data);
            // debug($status,1);

            if ($status > 0) {
                // Update session
                $this->model_signup->update_user_session($signup_data);

                $param['status'] = 1;
                $param['txt'] = 'Updated successfully.';
                echo json_encode($param);
            } else {
                $param['status'] = 0;
                $param['txt'] = 'Fail to update record';
                echo json_encode($param);
            }
        } else {
            $param['status'] = 0;
            $param['txt'] = "Please enter required field";
            echo json_encode($param);
        }
    }

    public function update_card_info()
    {

        // debug($_POST,1);

        if (isset($_POST) and array_filled($_POST)) {
            $id = $this->input->post('signup_id');
            $this->model_signup->update_by_pk($id, array(
                'signup_name' => $this->input->post('signup_name'),
                'signup_card_number' => $this->input->post('signup_card_number'),
                'signup_cvc_number' => $this->input->post('signup_cvc_number'),
                'signup_card_month' => $this->input->post('signup_card_month'),
                'signup_card_year' => $this->input->post('signup_card_year')

            ));
            $this->json_param['status'] = 1;
            $this->json_param['txt'] = 'Data has been updated.';
            echo json_encode($this->json_param);
            // redirect('account/info_cleaner'); 

            // $this->load->library('session');
            // $this->session->set_userdata('payement_status', '1'); 
            // redirect('account/info_cleaner'); 
        }


        // $id = $_FILES['signup_id'];
        // $this->model_signup->update_by_pk($id, array(
        //     'signup_card_number' => $_FILES['signup_name'],
        //     'signup_cvc_number' => $_FILES['signup_cvc_number'],
        //     ''
        //     // 'signup_payement_status' => 1,
        //     // 'signup_card_month' => $this->input->post('card-month'),
        //     // 'signup_card_year' => $this->input->post('card-year'),
        // ));

    }

    public function upgrade_plan()
    {
        // debug($_POST);
        $param['where']['signup_id'] = $this->userid;
        $package_date = $this->model_signup->find_one($param);
        // if ($package_date['signup_package_amount'] == $_POST['amount']) {
        //     $this->session->set_flashdata('success_payment', 'This package already you have');
        //     redirect('account/info_cleaner?id=2');
        // } else {
            $this->session->set_userdata("upgrade_plan_amount", $_POST["amount"]);
            $this->session->set_userdata("upgrade_plan_user_id", $_POST["user_id"]);
            if ($_POST['amount'] == 97.95) {
                // debug("97.95", 1);
                require_once('application/libraries/stripe-php/init.php');
                \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');
                header('Content-Type: application/json');
                $YOUR_DOMAIN = g('base_url');
                $session = \Stripe\Checkout\Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => [[
                        'price' => 'price_1L1F0GFks7M9JQ0nmPSnvS4L',
                        'quantity' => 1,
                    ]],
                    'allow_promotion_codes' => true,
                    'mode' => 'subscription',

                    'success_url' => g('base_url') . "account/subscription_update",
                    'cancel_url' => g('base_url'),
                ]);

                header("HTTP/1.1 303 See Other");
                header("Location: " . $session->url);
                $charge = str_replace('Stripe\Checkout\Session JSON:', '', $session);
            }
            if ($_POST['amount'] == 47.95) {
                // debug("47.95", 1);
                require_once('application/libraries/stripe-php/init.php');
                \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');
                header('Content-Type: application/json');
                $YOUR_DOMAIN = g('base_url');
                $checkout_session = \Stripe\Checkout\Session::create([
                    'mode' => 'subscription',
                    'allow_promotion_codes' => true,
                    'line_items' => [[
                        'price' => "price_1L1F4fFks7M9JQ0n97dqZtPt",
                        'quantity' => 1,
                    ]],
                    'success_url' => g('base_url') . "account/subscription_update",
                    'cancel_url' => g('base_url'),
                ]);
                header("HTTP/1.1 303 See Other");
                header("Location: " . $checkout_session->url);
                $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);
            }
            if ($_POST['amount'] == 27.95) {
                // debug("27.95", 1);
                require_once('application/libraries/stripe-php/init.php');
                \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');
                header('Content-Type: application/json');
                $YOUR_DOMAIN = g('base_url');
                $checkout_session1 = \Stripe\Checkout\Session::create([
                    'mode' => 'subscription',
                    'allow_promotion_codes' => true,
                    'line_items' => [[
                        'price' => "price_1L1F6JFks7M9JQ0nRNzvShO0",
                        'quantity' => 1,
                    ]],
                    'success_url' => g('base_url') . "account/subscription_update",
                    'cancel_url' => g('base_url'),
                ]);
                header("HTTP/1.1 303 See Other");
                header("Location: " . $checkout_session1->url);
                $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session1);
            }
        // }
    }

    public function subscription_update()
    {
        $id = $this->session->userdata('upgrade_plan_user_id');
        require_once('application/libraries/stripe-php/init.php');
        $stripe = new \Stripe\StripeClient(
            'sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ'
        );
        $package_value = $stripe->events->all(['limit' => 1]);
        $amount_paid = $package_value["data"][0]["data"]["object"]["amount_paid"];
        $coupon_name = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["name"];
        $percent_off = $package_value["data"][0]["data"]["object"]["discount"]["coupon"]["percent_off"];
        // update data into signup


        $upgrade_plan_amount = $this->session->userdata('upgrade_plan_amount');
        $parampackagedetails['where']['packages_amount'] = $upgrade_plan_amount;
        $package_details = $this->model_packages->find_one($parampackagedetails);
        // debug($package_details['packages_type'],1);
        $get_signup_id['where']['signup_id'] = $id;
        $get_user_package_details = $this->model_signup->find_one($get_signup_id);
        $get_signup_package_jobs = $get_user_package_details['signup_package_job'] + $package_details['packages_job'];
        $after_one_month_date = date('Y-m-d');



        if ($get_user_package_details['after_one_month_date'] <= $after_one_month_date) {
            $signup =  $this->model_signup->update_by_pk($id, array(
                'signup_id' => $id,
                'signup_amount_paid' => $amount_paid,
                'signup_package_name' => $package_details['packages_type'],
                'signup_package_job' => $get_signup_package_jobs,
                'signup_package_amount' => $upgrade_plan_amount,
                'signup_coupon_name' => $coupon_name,
                'signup_percent_off' => $percent_off,
            ));
            // insert data into signup payment 
            $signup_payment["signup_payment_user_id"] = $id;
            $signup_payment["signup_payment_package_amount"] = $upgrade_plan_amount;
            $signup_payment["signup_payment_package_name"] = $package_details['packages_type'];
            $signup_payment["signup_subscription_amount"] = $amount_paid;
            $signup_payment["signup_payment_package_total_amount"] = $upgrade_plan_amount;
            $insert_data_into_signup_payment = $this->model_signup_payment->insert_record($signup_payment);
            $this->session->set_flashdata('upgradePlan', 'Subscription has been updated');
            redirect(g('base_url') . "account/info_cleaner?id=2");
        } else {
            // $get_signup_id1['where']['monthly_subscription_signup_id'] = $id;
            $monthly_subscription['monthly_subscription_signup_id'] = $id;
            $monthly_subscription['monthly_subscription_amount_paid'] = $amount_paid;
            $monthly_subscription['monthly_subscription_package_job'] = $package_details['packages_job'];
            $monthly_subscription['monthly_subscription_package_amount'] = $upgrade_plan_amount;
            $monthly_subscription['monthly_subscription_coupon_name'] = $coupon_name;
            $monthly_subscription['monthly_subscription_percent_off'] = $percent_off;
            $monthly_subscription['monthly_subscription_status'] = "1";
            $monthly_subscription["monthly_subscription_package_name"] = $package_details['packages_type'];
            $monthly_subscription_store = $this->model_monthly_subscription->insert_record($monthly_subscription);
            $this->session->set_flashdata('upgradePlan', 'Subscription has been updated');
            redirect(g('base_url') . "account/info_cleaner?id=2");
            // debug($monthly_subscription_store,1);
        }
        // debug($get_user_package_details['after_one_month_date'],1);
    }

    public function getinvoice()
    {

        $order_id = intval($_POST['order_id']);
        $data['order_detail'] = $this->model_order->find_by_pk($order_id);
        $data['order_items'] = $this->model_order_item->find_all(
            array('where' => array('order_item_order_id' => $order_id))
        );
        //debug($data['order_detail']);
        //debug($data['order_items']);

        $message = $this->load->view(
            "account/invoiceTemplate",
            $data,
            true
        );
        echo $message;
    }

    public function mywishlist()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $data['userEmail'] = $this->session->userdata['logged_in']['email'];
        $data['wishlist'] = $this->model_wishlist->find_all(
            array('where' => array('wishlist_user_id' => $this->userid))
        );

        //$data['country'] = $this->model_country->find_all();

        $data['title'] = 'My Wishlist';

        $this->load_view("wishlist", $data);
    }

    public function my_favorites()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . '');
        }
        global $config;
        //$data['userEmail'] = $this->session->userdata['logged_in']['email'];

        /*$params['joins'][] = array(
                                                        "table"=>"order_item" ,
                                                        "joint"=>"order_item.order_item_order_id = order.order_id"
                                                    );*/

        $data['banner_heading'] = "Account Info";

        $data['result'] = $this->model_favorite->get_my_fav($this->userid);
        //$data['country'] = $this->model_country->find_all();

        //$data['title'] = 'Order History';

        $this->load_view("my_favorites", $data);
    }

    public function addwishlist()
    {
        if ($this->userid <= 0) {
            echo json_encode(array('status' => 0, 'message' => 'You are not logged in'));
        } else {
            $data['wishlist_user_id'] = $this->userid;
            $data['wishlist_product_id'] = intval($_POST['product_id']);
            $status = $this->model_wishlist->insert_record($data);
            if ($status > 0) {
                echo json_encode(array('status' => 1, 'message' => 'Your item has been added into your wishlist.'));
            } else {
                echo json_encode(array('status' => 0, 'message' => 'Please try again'));
            }
        }
    }

    // Change password view
    public function change_password()
    {

        //debug(1,1);

        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);
        //$this->add_script(array('innerstyle.css','font-awesome.min.css'));
        $data['userEmail'] = $this->session->userdata['userdata']['email'];
        $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

        // Set banner heading
        $data['banner_heading'] = "Change Password";

        $this->load_view("changepassword", $data);
    }

    // update_password
    public function update_password()
    {
        // debug(1,1);
        if ($this->userid <= 0) {
            $param['status'] = 0;
            $param['txt'] = "you are not registered";
            echo json_encode($param);
        } else {
            $password = $this->input->post('signup');
            //debug($password['signup_password']);
            if ((count($_POST) > 0) && (isset($password['signup_password'])) && (!empty($password['signup_password']))) {
                $param['signup_password'] = md5($password['signup_password']);
                //debug($param['signup_password']);
                $status = $this->model_signup->update_by_pk($this->userid, $param);
                //debug($status);
                if ($status) {
                    $this->json_param['status'] = 1;
                    $this->json_param['txt'] = 'Password has been changed.';
                    echo json_encode($this->json_param);
                }
            } else {
                $this->json_param['status'] = 0;
                $this->json_param['txt'] = 'Record Not Found.';
                echo json_encode($this->json_param);
            }
        }
    }


    public function resetpasswordclient()
    {
        $id = $_POST['id'];
        //$encodedID = "yrt15".$result['id']."xyurt8576412";
        $id = str_replace("yrt15", "", $id);
        $id = str_replace("xyurt8576412", "", $id);

        if (isset($_POST['password']) && empty($_POST['password'])) {
            echo json_encode(array('status' => 0, 'txt' => 'Please provide the password'));
        } else {
            $password = md5($_POST['password']);
            $status = $this->model_signup->update_by_pk($id, array('signup_password' => $password));
            if ($status) {
                echo json_encode(array('status' => 1, 'txt' => 'Your password has been changed.'));
            } else {
                echo json_encode(array('status' => 0, 'txt' => 'Please try again or use different password'));
            }
        }
    }

    // Update profile image
    public function update_profile_image()
    {
        // Get User id
        $user_id = $this->userid;

        // Success
        if ((count($_FILES) > 0) && ($user_id != null)) {
            // Get temp file
            $tmp = $_FILES['file']['tmp_name'];
            // Generate file name
            $name = mt_rand() . $_FILES['file']['name'];

            // Get upload path
            $upload_path = $this->config->item('site_upload_signup');

            // Set data
            $data = array(
                'signup_logo_image' => $name,
                'signup_logo_image_path' => $upload_path,
            );

            // Remove old file
            /*if(!empty($this->session->userdata('userdata')['signup_image'])){
                                                            unlink($this->config->item('site_upload_user_photo') . basename($this->session->userdata('userdata')['signup_image']));
                                                        }*/

            // Not remove default profile image
            /*if(basename($this->session->userdata('userdata')['signup_image'])!=$this->config->item('default_profile_image')){
                                                            unlink($this->config->item('site_upload_user_photo') . basename($this->session->userdata('userdata')['signup_image']));
                                                        }*/

            // Upload new file
            move_uploaded_file($tmp, $upload_path . $name);

            $inserted_id = $this->model_signup->update_by_pk($user_id, $data);

            if ($inserted_id > 0) {
                $profile_image_url = array(
                    'signup_image' => $upload_path . $name
                );
                // Update session profile
                $this->model_signup->update_user_session($profile_image_url);
                // save log ends

                $this->json_param['status'] = true;
                $this->json_param['txt'] = 'Updated successfully.';
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Something went wrong.Please try later.';
            }
        }
        // Error
        else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = lang('something_wrong');
        }

        echo json_encode($this->json_param);
    }


    // orderhistory function

    public function orderhistory()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $data['userEmail'] = $this->session->userdata['logged_in']['email'];
        //   debug($data['cleaning_name'],1);
        // data details of orders
        $params['order'] = "cleaning_service_id DESC";
        $params['where']['cleaning_service_user_id'] = $this->userid;
        $params['where']['cleaning_service_status !='] = 5;
        // $params['where']['cleaning_service_upload_user_id ='] = 0;
        $data['cleaning_data'] = $this->model_cleaning_service->find_all($params);
        // debug($data['cleaning_data']);

        // closed orders
        $params12['order'] = "cleaning_service_id DESC";
        $params12['where']['cleaning_service_user_id'] = $this->userid;
        $params12['where']['cleaning_service_status'] = 5;
        $params12['where']['cleaning_service_upload_user_id >'] = 0;
        $params12['where']['cleaning_service_compelted_user_id >'] = 0;
        $data['cleaning_closed'] = $this->model_cleaning_service->find_all($params12);

        // debug($data['cleaning_closed']);

        $data['title'] = 'Order History';

        $this->load_view("orderhistory", $data);
    }
    public function rescheduleedit()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $params['where']['cleaning_service_id'] = $_GET['id'];
        $data['cleaning'] = $this->model_cleaning_service->find_one($params);
        // Set banner heading 
        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);

        $this->load_view("rescheduleedit", $data);
    }
    // edit function
    public function update_detail()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleaning_data']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $_POST['cleaning_data']['cleaning_service_id'],
                'cleaning_service_closing_date' => $_POST['cleaning_data']['cleaning_service_closing_date'],
                'cleaning_service_closing_time' => $_POST['cleaning_data']['cleaning_service_closing_time'],
                // 'cleaning_service_status' => 1,
                'cleaning_service_cancel_status' => 0,
                'cleaning_service_cancel_other' => '',
                'cleaning_service_cancel_reson' => '',
            ));

            $para11['where']['cleaning_service_id'] = $id;
            $updatedata = $this->model_cleaning_service->find_one($para11);

            if ($updatedata['cleaning_service_cleaner_id'] > 0) {
                $this->model_cleaning_service->update_by_pk($id, array(
                    'cleaning_service_update_status' => 1,
                ));
                $this->model_email->update_date_email($id);
            }
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    // delete function
    public function ajax_delete()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['canceldata']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $_POST['canceldata']['cleaning_service_id'],
                'cleaning_service_cancel_other' => $_POST['canceldata']['cleaning_service_cancel_other'],
                'cleaning_service_cancel_reson' => $_POST['canceldata']['cleaning_service_cancel_reson'],
                'cleaning_service_user_id' => $_POST['canceldata']['cleaning_service_user_id'],
                'cleaning_service_status' => 6
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    public function ajax_delete_update()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['canceldata']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $_POST['canceldata']['cleaning_service_id'],
                'cleaning_service_cancel_other' => $_POST['canceldata']['cleaning_service_cancel_other'],
                'cleaning_service_cancel_reson' => $_POST['canceldata']['cleaning_service_cancel_reson'],
                'cleaning_service_user_id' => $_POST['canceldata']['cleaning_service_user_id'],
                'cleaning_service_cancel_status' => 1,
                'cleaning_service_status' => 6,
            ));
            $this->model_email->cancel_email($id);
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    public function ajax_cancel_email()
    {
        // debug($_POST['cancel']['id']);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cancel']['id']);
            // debug($id,1);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $_POST['cancel']['id'],


            ));
            // $this->model_email->cancel_email($id);
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    public function team_delete()
    {
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['teamid']['team_name_id']);
            $this->model_team_name->update_by_pk($id, array(
                'team_name_status' => 2
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }

    public function team_edit()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['team_edit']['team_name_id']);
            $this->model_team_name->update_by_pk($id, array(
                'team_name_id' => $_POST['team_edit']['team_name_id'],
                'team_name_user_id' => $_POST['team_edit']['team_name_user_id'],
                'team_name_memeber' => $_POST['team_edit']['team_name_memeber'],
                'team_name_contact' => $_POST['team_edit']['team_name_contact'],
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    // end of order history

    // order place order function
    public function place_order()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

        // addtional add data
        $param['where']['additional_add_ons_type'] = 1;
        $data['additional_add_ons'] = $this->model_additional_add_ons->find_all_active($param);
        // debug($data['additional_add_ons'],1);

        $param1['where']['additional_add_ons_type'] = 2;
        $data['additional_add'] = $this->model_additional_add_ons->find_all_active($param1);

        // sqft data
        $data['sqft_data'] = $this->model_sqft->find_all_active();

        // 1st package Premier
        $params['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = package_realtor.package_realtor_sqft_id"
        );

        $params['where']['package_realtor_package_name'] = 1;
        $data['premier_list'] = $this->model_package_realtor->find_all_active($params);
        // debug( $data['premier_list'],1);

        $para12['where']['type_clean_package_pack_id'] = 1;
        $data['package_list'] = $this->model_type_clean_package->find_all_active($para12);

        //   2nd package PREMIUM 
        $param2['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = package_realtor.package_realtor_sqft_id"
        );
        $param2['where']['package_realtor_package_name'] = 2;
        $data['premium_list'] = $this->model_package_realtor->find_all_active($param2);

        $para14['where']['type_clean_package_pack_id'] = 2;
        $data['package_list_2'] = $this->model_type_clean_package->find_all_active($para14);

        //   3rd package Basic 
        $param3['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = package_realtor.package_realtor_sqft_id"
        );
        $param3['where']['package_realtor_package_name'] = 3;
        $data['basic_list'] = $this->model_package_realtor->find_all_active($param3);

        $para15['where']['type_clean_package_pack_id'] = 3;
        $data['package_list_3'] = $this->model_type_clean_package->find_all_active($para15);

        // zipcode
        // $paramzc['where']['type_clean_package_pack_id'] = 3;
        $data['zipcode'] = $this->model_zip_code->find_all_active();
        // debug($data['zipcode'],1);
        // Set banner heading 
        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);

        $this->load_view("place_order", $data);
    }

    // data save place order
    public function place_order_save()
    {
        // debug($_POST,1);
        // debug($_POST['cleaning_service']['cleaning_service_additional_kitchen'],1);
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $cleaning_service = $this->input->post('cleaning_service');

        $additional = $_POST['cleaning_service']['cleaning_service_additional_kitchen'];
        // debug($cleaning_service,1);
        if (array_filled($cleaning_service) > 0) {
            if ($this->validate("model_cleaning_service")) {
                if ($additional == '' || $additional == null) {
                    $cleaning_service['cleaning_service_additional_kitchen'] = 'N/A';
                } else {
                    $cleaning_service['cleaning_service_additional_kitchen'] = serialize($_POST['cleaning_service']['cleaning_service_additional_kitchen']);
                }

                if ($_POST['cleaning_service']['cleaning_service_full_bathroom'] == 'infinty') {
                    $cleaning_service['cleaning_service_full_bathroom'] = '0';
                }

                $cleaning_service['cleaning_service_closing_date'] = date("m/d/Y", strtotime($_POST['cleaning_service']['cleaning_service_closing_date']));
                $cleaning_service['cleaning_service_closing_time'] = date("g:i A", strtotime($_POST['cleaning_service']['cleaning_service_closing_time']));
                $cleaning_service['cleaning_service_projected_closing_date'] = date("m/d/Y", strtotime($_POST['cleaning_service']['cleaning_service_projected_closing_date']));
                $datecreated = new DateTime();
                $cleaning_service['cleaning_service_createdon'] = $datecreated->format("m/d/Y g:i A");

                // debug($cleaning_service['cleaning_service_closing_date'],1);

                // if()
                $inserted_id = $this->model_cleaning_service->insert_record($cleaning_service);
                if ($inserted_id > 0) {
                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'Successfully Added.';
                }
                // Record not insert
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Something went wrong.Please try later.';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        }
        echo json_encode($this->json_param);
    }
    // end save data placeorder

    // view data and print
    public function viewdetailclener()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $params['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $params['where']['cleaning_service_id'] = $_GET['id'];
        $data['cleaning_inovice'] = $this->model_cleaning_service->find_one($params);
        // debug($data['cleaning_inovice'],1);

        $param['where']['signup_id'] = $this->userid;
        $data['user_data'] = $this->model_signup->find_one($param);

        // Set banner heading 
        $data['banner'] = $this->model_inner_banner->get_banner(16);
        // Get and set cms data
        $data['content'] = $this->model_cms_page->get_page(12);

        $this->load_view("viewdetailclener", $data);
    }
    public function check_zip()
    {
        $zip = $_POST['zip'];
        $param['where']['zip_code_number'] = $zip;
        $check_zip_data = $this->model_zip_code->find_one($param);
        if ($check_zip_data == null) {
            echo json_encode(array(
                'status' => '2',
            ));
        } else {
            echo json_encode(array(
                'status' => '3',
            ));
        }
    }

    public function get_package_data()
    {
        // debug($_POST,1);
        $sqft_id = $_POST['sqft'];

        $package_id = $_POST['package_id'];

        $param['where']['package_realtor_sqft_id'] = $sqft_id;
        $param['where']['package_realtor_package_name'] = $package_id;
        $package_data = $this->model_package_realtor->find_one($param);
        $recognized_item = $package_data['package_realtor_amount'];

        if (count($package_data) > 0)
            echo json_encode(array(
                'status' => 1, 'html' => $recognized_item,
            ));
        else
            echo json_encode(array('status' => 0, 'html' => $package_data));
    }

    // cleaner controller function
    public function info_cleaner()
    {
            if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        $id = $this->userid;
        $this->db->select('monthly_subscription_package_job');
        $this->db->limit(1);
        $this->db->order_by('monthly_subscription_id', 'desc');
        $this->db->from('ctc_monthly_subscription');
        $this->db->where('monthly_subscription_signup_id', $id);
        $this->db->where('monthly_subscription_status', 1);
        $query = $this->db->get();
        $r = $query->result();

        if ($r[0]->monthly_subscription_package_job) {
            $paramMonthly1['where']['monthly_subscription_signup_id'] = $this->userid;
            $paramMonthly1['where']['monthly_subscription_package_job'] = $r[0]->monthly_subscription_package_job;
            $paramMonthly1['where']['monthly_subscription_status'] = 1;
            $monthlySubscriptionDetails = $this->model_monthly_subscription->find_one($paramMonthly1);
            // debug($r[0]->monthly_subscription_package_job,1);

            $get_signup_id['where']['signup_id'] = $id;
            $get_user_package_details = $this->model_signup->find_one($get_signup_id);
            $after_one_month_date = date('Y-m-d');
            $get_signup_package_jobs = $get_user_package_details['signup_package_job'] + $monthlySubscriptionDetails['monthly_subscription_package_job'];
            // debug($get_user_package_details['after_one_month_date']);
            // debug($after_one_month_date,1);
            if ($get_user_package_details['after_one_month_date'] <= $after_one_month_date) {
                // debug($monthlySubscriptionDetails,1);
                if ($monthlySubscriptionDetails) {
                    $update_date = strtotime("+1 month");
                    $after_one_month_date_update = date('Y-m-d', $update_date);
                    $signup =  $this->model_signup->update_by_pk($id, array(
                        'signup_id' => $id,
                        'signup_amount_paid' => $monthlySubscriptionDetails['monthly_subscription_amount_paid'],
                        'signup_package_name' => $monthlySubscriptionDetails['monthly_subscription_package_name'],
                        'signup_package_job' => $get_signup_package_jobs,
                        'signup_package_amount' => $monthlySubscriptionDetails['monthly_subscription_package_amount'],
                        'signup_coupon_name' => $monthlySubscriptionDetails['monthly_subscription_coupon_name'],
                        'signup_percent_off' => $monthlySubscriptionDetails['monthly_subscription_percent_off'],
                        'after_one_month_date' => $after_one_month_date_update,
                    ));
                    // insert data into signup payment 
                    $signup_payment["signup_payment_user_id"] = $id;
                    $signup_payment["signup_payment_package_amount"] = $monthlySubscriptionDetails['monthly_subscription_package_amount'];
                    $signup_payment["signup_payment_package_name"] = $monthlySubscriptionDetails['monthly_subscription_package_name'];
                    $signup_payment["signup_subscription_amount"] = $monthlySubscriptionDetails['monthly_subscription_amount_paid'];
                    $signup_payment["signup_payment_package_total_amount"] = $monthlySubscriptionDetails['monthly_subscription_package_amount'];
                    $insert_data_into_signup_payment = $this->model_signup_payment->insert_record($signup_payment);

                    $update_rows = array('monthly_subscription_status' => '0');
                    $multipleWhere = array('monthly_subscription_signup_id' => $id);
                    $this->db->where($multipleWhere);
                    $this->db->update('ctc_monthly_subscription', $update_rows);
                }
            }
        }
    
        $data['userEmail'] = $this->session->userdata['logged_in']['email'];
        $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

        $param['where']['signup_type'] = 2;
        $data['info_cleaner'] = $this->model_signup->find_by_pk($this->userid);

        // team data with hidden form
        $param1['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = team_name.team_name_user_id"
        );
        // $param1['joins'][] = array(
        //     "table" => "user_team",
        //     "joint" => " user_team.user_team_form_id = team_name.team_name_id"
        // );
        $param1['where']['team_name_user_id'] = $this->userid;
        // $param1['where']['user_team_member_name !='] = 'individual';
        // $param1['group'] = "user_team_id";
        $data['team_data'] = $this->model_team_name->find_all_active($param1);
        // debug($data['team_data'],1);

        $param4['joins'][] = array(
            "table" => "signup",
            "joint" => " signup.signup_id = user_team.user_team_user_id"
        );
        $param4['where']['user_team_user_id'] = $this->userid;
        $param4['where']['user_team_form_id ='] = '0';
        // $param1['group'] = "user_team_id";
        $data['team_owner'] = $this->model_user_team->find_one($param4);
        // debug($data['team_owner'],1);

        $params['where']['signup_id'] = $this->userid;
        $data['cleanear_package'] = $this->model_signup->find_one($params);
        $package_amount = $data['cleanear_package']['signup_package_amount'];
        //   debug($package_amount);
        $params2['where']['packages_amount'] = $package_amount;
        $data['cleaner_package_type'] = $this->model_packages->find_one($params2);

        $data['pkg_first'] = $this->model_packages->find_by_pk(1);
        $data['pkg_second'] = $this->model_packages->find_by_pk(2);
        $data['pkg_third'] = $this->model_packages->find_by_pk(3);
        // debug(unserialize($data['info_cleaner']['signup_team_name']),1);

        $authUser = $this->model_signup->find_by_pk($this->userid);
        $userTotalJobs = $authUser['signup_package_job'];

        $paramAvailJobs['where']['cleaning_service_cleaner_id'] = $this->userid;
        // $paramavail['where']['cleaning_service_status'] = 3;
        $data['avail_jobs'] = $this->model_cleaning_service->find_all($paramAvailJobs);

        $getAvailJobs = count($data['avail_jobs']);
        $getAvailJobsAfterMinus = $userTotalJobs - $getAvailJobs;

        $paramCancelJobs['where']['cleaning_service_cleaner_id'] = $this->userid;
        $paramCancelJobs['where']['cleaning_service_status'] = 2;
        $data['cancel_jobs'] = $this->model_cleaning_service->find_all($paramCancelJobs);
        $getCancelJobs = count($data['cancel_jobs']);

        $data['totalRemainingJobs'] = $getAvailJobsAfterMinus + $getCancelJobs;

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();


        $this->load_view("info_cleaner", $data);
    }


    public function browse_task()
    {
        // package_update_Data
        $id = $this->userid;
        $this->db->select('monthly_subscription_package_job');
        $this->db->limit(1);
        $this->db->order_by('monthly_subscription_id', 'desc');
        $this->db->from('ctc_monthly_subscription');
        $this->db->where('monthly_subscription_signup_id', $id);
        $this->db->where('monthly_subscription_status', 1);
        $query = $this->db->get();
        $r = $query->result();
        // debug($r,1);
        if ($r[0]->monthly_subscription_package_job) {
            $paramMonthly1['where']['monthly_subscription_signup_id'] = $this->userid;
            $paramMonthly1['where']['monthly_subscription_package_job'] = $r[0]->monthly_subscription_package_job;
            $paramMonthly1['where']['monthly_subscription_status'] = 1;
            $monthlySubscriptionDetails = $this->model_monthly_subscription->find_one($paramMonthly1);
            // debug($r[0]->monthly_subscription_package_job,1);

            $get_signup_id['where']['signup_id'] = $id;
            $get_user_package_details = $this->model_signup->find_one($get_signup_id);
            $after_one_month_date = date('Y-m-d');
            $get_signup_package_jobs = $get_user_package_details['signup_package_job'] + $monthlySubscriptionDetails['monthly_subscription_package_job'];
            // debug($get_user_package_details['after_one_month_date']);
            // debug($after_one_month_date,1);
            if ($get_user_package_details['after_one_month_date'] <= $after_one_month_date) {
                // debug($monthlySubscriptionDetails,1);
                if ($monthlySubscriptionDetails) {
                    $update_date = strtotime("+1 month");
                    $after_one_month_date_update = date('Y-m-d', $update_date);
                    $signup =  $this->model_signup->update_by_pk($id, array(
                        'signup_id' => $id,
                        'signup_amount_paid' => $monthlySubscriptionDetails['monthly_subscription_amount_paid'],
                        'signup_package_name' => $monthlySubscriptionDetails['monthly_subscription_package_name'],
                        'signup_package_job' => $get_signup_package_jobs,
                        'signup_package_amount' => $monthlySubscriptionDetails['monthly_subscription_package_amount'],
                        'signup_coupon_name' => $monthlySubscriptionDetails['monthly_subscription_coupon_name'],
                        'signup_percent_off' => $monthlySubscriptionDetails['monthly_subscription_percent_off'],
                        'after_one_month_date' => $after_one_month_date_update,
                    ));
                    // insert data into signup payment 
                    $signup_payment["signup_payment_user_id"] = $id;
                    $signup_payment["signup_payment_package_amount"] = $monthlySubscriptionDetails['monthly_subscription_package_amount'];
                    $signup_payment["signup_payment_package_name"] = $monthlySubscriptionDetails['monthly_subscription_package_name'];
                    $signup_payment["signup_subscription_amount"] = $monthlySubscriptionDetails['monthly_subscription_amount_paid'];
                    $signup_payment["signup_payment_package_total_amount"] = $monthlySubscriptionDetails['monthly_subscription_package_amount'];
                    $insert_data_into_signup_payment = $this->model_signup_payment->insert_record($signup_payment);

                    $update_rows = array('monthly_subscription_status' => '0');
                    $multipleWhere = array('monthly_subscription_signup_id' => $id);
                    $this->db->where($multipleWhere);
                    $this->db->update('ctc_monthly_subscription', $update_rows);
                }
            }
        }
        // end

        // debug(1,1);
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        $params['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $paramS['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
        );
        $params['order'] = "cleaning_service_id DESC";
        $params['where']['cleaning_service_status'] = 1;
        $data['avaiable_jobs'] = $this->model_cleaning_service->find_all($params);

        // SALEKEEN WORK
        $paramdd['where']['signup_id'] = $this->userid;
        $loggedinInfo = $this->model_signup->find_one($paramdd);
        foreach ($data['avaiable_jobs'] as $datas) {
            $theta = $loggedinInfo['signup_address_lng'] - $datas['cleaning_service_address_lng'];
            $dist = sin(deg2rad($loggedinInfo['signup_address_lat'])) * sin(deg2rad($datas['cleaning_service_address_lat'])) +  cos(deg2rad($loggedinInfo['signup_address_lat'])) * cos(deg2rad($datas['cleaning_service_address_lat'])) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            // debug($miles,1);
            $this->model_cleaning_service->update_by_pk($datas['cleaning_service_id'], array(
                'cleaning_service_update_distance' => $miles,
            ));
        }
        $params['where']['cleaning_service_update_distance <'] = floatval($loggedinInfo['signup_miles']);
        $data['avaiable_jobs'] = $this->model_cleaning_service->find_all($params);


        $param2['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_decline_id"
        );
        $param2['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $param2['where']['signup_id'] = $this->userid;
        $param2['order'] = "cleaning_service_id DESC";
        $param2['where']['cleaning_service_status'] = 1;
        $data['cleaning_decline'] = $this->model_cleaning_service->find_all($param2);



        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        $this->load_view("browse_task", $data);
    }


    public function my_task()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        
        

        // if(isset($_POST['searchSubmit'])){ 
        //     if(!empty($_POST['47 W 13th St, New York, NY 10011, USA'])){ 
        //         $location = $_POST['47 W 13th St, New York, NY 10011, USA']; 
        //     } 

        //     if(!empty($_POST['40.820240'])){ 
        //         $latitude = $_POST['40.820240']; 
        //     } 

        //     if(!empty($_POST['-73.935944'])){ 
        //         $longitude = $_POST['-73.935944']; 
        //     } 

        //     if(!empty($_POST['30'])){ 
        //         $distance_km = $_POST['30']; 
        //     } 
        // } 

        // $location = '47 W 13th St, New York, NY 10011, USA';
        // $latitude = '40.820240';
        // $longitude = '-73.935944';
        // $distance_km = '30';
        // // Calculate distance and filter records by radius 
        // $sql_distance = $having = ''; 
        // if(!empty($distance_km) && !empty($latitude) && !empty($longitude)){ 
        //     $radius_km = $distance_km; 
        //     $sql_distance = " ,(((acos(sin((".$latitude."*pi()/180)) * sin((`p`.`latitude`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`p`.`latitude`*pi()/180)) * cos(((".$longitude."-`p`.`longitude`)*pi()/180))))*180/pi())*60*1.1515*1.609344) as distance "; 
        //     debug($sql_distance);
        //     $having = " HAVING (distance <= $radius_km) "; 
        //     debug($having,1);
        //     $order_by = ' distance ASC '; 
        //     // debug($order_by,1);
        // }else{ 
        //     $order_by = ' p.cleaning_service_id DESC '; 
        // } 

        // // Fetch places from the database 
        // $sql = "SELECT p.*".$sql_distance." FROM ctc_cleaning_service p $having ORDER BY $order_by"; 
        // $que12 = $this->db->query($sql);
        // $usersData  = $que12->result_array();
        // // $query = $db->query($sql); 
        // debug($usersData,1);

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        // $param['joins'][] = array(
        //     "table" => "cleaning_service",
        //     "joint" => "cleaning_service.cleaning_service_id = upload_document.upload_document_cleaning_id"
        // );
        // $param['where']['cleaning_service_cleaner_id'] = $this->userid;
        // $data['upload_document'] = $this->model_upload_document->find_all($param);
        // debug($data['upload_document'],1);



        // $params['joins'][] = array(
        //     "table" => "signup",
        //     "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
        // );
        // // $params['where']['signup_id'] = $this->userid;
        // // $params['where']['cleaning_service_status'] = 1;
        // // $params['order'] = "cleaning_service_id DESC";
        // $data['cleaning_realtor'] = $this->model_cleaning_service->find_all($params);
        // debug($data['cleaning_realtor'],1);
        $this->load_view("my_task", $data);
    }

    public function view_detail()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;


        // $data['boxshow'] = $this->db->where("DATE(`cleaning_service_closing_date`) + INTERVAL 1 DAY < NOW() ")->get('ctc_cleaning_service')->result();
        // debug($data,1);

        $params['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $params['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
        );
        $params['where']['cleaning_service_id'] = $_GET['id'];
        $data['cleaning_detail'] = $this->model_cleaning_service->find_one($params);
        // debug($data['cleaning_detail'],1);

        $param5['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_package_id = type_clean_package.type_clean_package_pack_id"
        );
        $param5['where']['cleaning_service_id'] = $_GET['id'];
        $data['package_1'] = $this->model_type_clean_package->find_all_active($param5);

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        $this->load_view("view_detail", $data);
    }
    
    public function view_detail_notclaim()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;


        // $data['boxshow'] = $this->db->where("DATE(`cleaning_service_closing_date`) + INTERVAL 1 DAY < NOW() ")->get('ctc_cleaning_service')->result();
        // debug($data,1);

        $paramsclaim['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $paramsclaim['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
        );
        $paramsclaim['where']['cleaning_service_id'] = $_GET['id'];
        $data['cleaning_detail'] = $this->model_cleaning_service->find_one($paramsclaim);
        // debug($data['cleaning_detail'],1);

        $paramnot['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_package_id = type_clean_package.type_clean_package_pack_id"
        );
        $paramnot['where']['cleaning_service_id'] = $_GET['id'];
        $data['package_1'] = $this->model_type_clean_package->find_all_active($paramnot);

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        $this->load_view("view_detail_notclaim", $data);
    }

    public function upload_images()
    {
        // debug($_POST,1);
        // debug($_FILES,1);

        $id = intval($_POST['cleanerid']['cleaning_service_id']);
        $this->model_cleaning_service->update_by_pk($id, array(
            'cleaning_service_upload_user_id' => $_POST['cleanerid']['cleaning_service_upload_user_id'],
            'cleaning_service_status' => 4,
        ));

        // debug($_POST,1);
        // debug($_FILES,1);
        global $config;

        $user_data = $this->model_signup->find_by_pk($this->userid);
        // debug($uploaddocument);
        // Validation success
        if ($this->validate("model_upload_document")) {
            // debug($_FILES);
            // before image
            $file_name = $_FILES['uploaddocument']['name']['upload_document_before1_image'];
            $tmp_name = $_FILES['uploaddocument']['tmp_name']['upload_document_before1_image'];
            move_uploaded_file($tmp_name, 'assets/uploads/cleaning_picture/' . $file_name);

            $file_name1 = $_FILES['uploaddocument']['name']['upload_document_before2_image'];
            $tmp_name1 = $_FILES['uploaddocument']['tmp_name']['upload_document_before2_image'];
            move_uploaded_file($tmp_name1, 'assets/uploads/cleaning_picture/' . $file_name1);

            $file_name2 = $_FILES['uploaddocument']['name']['upload_document_before3_image'];
            $tmp_name2 = $_FILES['uploaddocument']['tmp_name']['upload_document_before3_image'];
            move_uploaded_file($tmp_name2, 'assets/uploads/cleaning_picture/' . $file_name2);

            // after image
            $file_name3 = $_FILES['uploaddocument']['name']['upload_document_after1_image'];
            $tmp_name3 = $_FILES['uploaddocument']['tmp_name']['upload_document_after1_image'];
            move_uploaded_file($tmp_name3, 'assets/uploads/cleaning_picture/' . $file_name3);

            $file_name4 = $_FILES['uploaddocument']['name']['upload_document_after2_image'];
            $tmp_name4 = $_FILES['uploaddocument']['tmp_name']['upload_document_after2_image'];
            move_uploaded_file($tmp_name4, 'assets/uploads/cleaning_picture/' . $file_name4);

            $file_name5 = $_FILES['uploaddocument']['name']['upload_document_after3_image'];
            $tmp_name5 = $_FILES['uploaddocument']['tmp_name']['upload_document_after3_image'];
            move_uploaded_file($tmp_name5, 'assets/uploads/cleaning_picture/' . $file_name5);

            // signed image
            $file_name6 = $_FILES['uploaddocument']['name']['upload_document_signed_image'];
            $tmp_name6 = $_FILES['uploaddocument']['tmp_name']['upload_document_signed_image'];
            move_uploaded_file($tmp_name6, 'assets/uploads/cleaning_picture/' . $file_name6);

            // before image data
            $uploaddocument['upload_document_before1_image'] = $file_name;
            $uploaddocument['upload_document_before2_image'] = $file_name1;
            $uploaddocument['upload_document_before3_image'] = $file_name2;

            // after image data
            $uploaddocument['upload_document_after1_image'] = $file_name3;
            $uploaddocument['upload_document_after2_image'] = $file_name4;
            $uploaddocument['upload_document_after3_image'] = $file_name5;

            // signedimage
            $uploaddocument['upload_document_signed_image'] = $file_name6;

            // property type data
            $uploaddocument['upload_document_Whole_House'] = serialize($_POST['uploaddocument']['Whole_House']);
            $uploaddocument['upload_document_Kitchen'] = serialize($_POST['uploaddocument']['Kitchen']);
            $uploaddocument['upload_document_Bathrooms'] = serialize($_POST['uploaddocument']['Bathrooms']);
            $uploaddocument['upload_document_Interior_Cleaning_Of'] = serialize($_POST['uploaddocument']['Interior_Cleaning_Of']);
            $uploaddocument['upload_document_Dusting_of'] = serialize($_POST['uploaddocument']['Dusting_of']);
            $uploaddocument['upload_document_Wiping_Down_Of'] = serialize($_POST['uploaddocument']['Wiping_Down_Of']);

            // data save
            $uploaddocument['upload_document_reltor_id'] = $_POST['uploaddocument']['upload_document_reltor_id'];
            $uploaddocument['upload_document_cleaning_id'] = $_POST['uploaddocument']['upload_document_cleaning_id'];
            $uploaddocument['upload_document_cleaner_id'] = $_POST['uploaddocument']['upload_document_cleaner_id'];
            $uploaddocument['upload_document_arrival_time_id'] = $_POST['uploaddocument']['upload_document_arrival_time_id'];
            $uploaddocument['upload_document_left_time_id'] = $_POST['uploaddocument']['upload_document_left_time_id'];
            $uploaddocument['upload_document_arrive_time'] = $_POST['uploaddocument']['upload_document_arrive_time'];
            $uploaddocument['upload_document_left_time'] = $_POST['uploaddocument']['upload_document_left_time'];
            $uploaddocument['upload_document_property_image_id'] = $_POST['uploaddocument']['upload_document_property_image_id'];
            $uploaddocument['upload_document_signedcompl_image_id'] = $_POST['uploaddocument']['upload_document_signedcompl_image_id'];
            $uploaddocument['upload_document_package_id'] = $_POST['uploaddocument']['upload_document_package_id'];

            $uploaddocument['upload_document_task'] = $_POST['uploaddocument']['upload_document_task'];



            $inserted_id = $this->model_upload_document->insert_record($uploaddocument);

            $params['joins'][] = array(
                "table" => "signup",
                "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
            );
            $relator1_data = $this->model_cleaning_service->find_one($params);

            $param2['joins'][] = array(
                "table" => "signup",
                "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
            );
            $clean1_data = $this->model_cleaning_service->find_one($param2);

            $param3['joins'][] = array(
                "table" => "upload_document",
                "joint" => "upload_document.upload_document_arrival_time_id = arrival_time.arrival_time_id"
            );
            $arrival_time = $this->model_arrival_time->find_one($param3);

            $param4['joins'][] = array(
                "table" => "upload_document",
                "joint" => "upload_document.upload_document_left_time_id = left_time.left_time_id"
            );
            $left_time = $this->model_left_time->find_one($param4);

            // Record insert successfully
            if ($inserted_id > 0) {
                // debug($inserted_id,1);
                //    if(ENVIRONMENT!='development'){
                //     // Send confirmation email
                // $this->model_email->upload_email($inserted_id, $user_data, $relator1_data, $clean1_data, $arrival_time, $left_time);
                //     //sleep(2);
                //     // Welcome email
                //     // $this->model_email->send_welcome_email($signup['signup_email']);

                //    }

                // $this->model_signup->auto_login($inserted_id);

                $this->json_param['status'] = true;
                //$this->json_param['txt'] = 'Thanks for registration. Please check your inbox for account verification.';
                $this->json_param['txt'] = 'Thank you for your submission.';
            }
            // Record not insert
            else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = 'Something went wrong.Please try later.';
            }
        }
        // Validation failed
        else {
            $this->json_param['status'] = false;
            $this->json_param['txt'] = validation_errors();
        }
        echo json_encode($this->json_param);
    }

    public function upload_arrival_departure()
    {
        // debug($_POST);
        // debug($_FILES,1);

        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        // arrival_time
        $param2['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_id = arrival_time.arrival_time_cleaning_id"
        );
        $param2['where']['arrival_time_cleaning_id'] = $_GET['id'];
        $data['arrival_time'] = $this->model_arrival_time->find_one($param2);

        // left_time
        $param3['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_id = left_time.left_time_cleaning_id"
        );
        $param3['where']['left_time_cleaning_id'] = $_GET['id'];
        $data['left_time'] = $this->model_left_time->find_one($param3);


        $param4['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_package_id = type_clean_package.type_clean_package_pack_id"
        );
        $param4['where']['cleaning_service_id'] = $_GET['id'];
        $data['package_1'] = $this->model_type_clean_package->find_all_active($param4);

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();



        $this->load_view("upload_arrival_departure", $data);
    }

    public function update_cleaner_id()
    {
        //   debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerid']['cleaning_service_id']);

            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_id' => $_POST['cleanerid']['cleaning_service_cleaner_id'],
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    // public function update_cleaner()
    // {
    //     //   debug($_POST,1);


    //     if (isset($_POST) and array_filled($_POST)) {
    //         $id = intval($_POST['cleanerid']['cleaning_service_id']);

    //         $paramsignup['where']['signup_id'] = $_POST['cleanerid']['cleaning_service_cleaner_id'];
    //         $signup_data = $this->model_signup->find_one($paramsignup);
    //         $id_1 = intval($signup_data['signup_id']);
    //         $job_minus = $signup_data['signup_package_job'] -1;

    //         $this->model_signup->update_by_pk($id_1,array(
    //             'signup_package_job' =>  $job_minus
    //         ));

    //         $this->model_cleaning_service->update_by_pk($id, array(
    //             'cleaning_service_cleaner_id' => $_POST['cleanerid']['cleaning_service_cleaner_id'],
    //             'cleaning_service_status' => 3,
    //         ));
    //         $json_param['status'] = true;
    //         echo json_encode($json_param);
    //     }
    // }


    public function update_cleaner()
    {
        //   debug($_POST,1);

        $paramaccpet['where']['cleaning_service_id'] = $_POST['cleanerid']['cleaning_service_id'];
        $data_updated_job = $this->model_cleaning_service->find_one($paramaccpet);
        // debug($data_updated_job,1);

        if ($data_updated_job['cleaning_service_accpet'] == 0) {
            if (isset($_POST) and array_filled($_POST)) {
                $id = intval($_POST['cleanerid']['cleaning_service_id']);
                $paramsignup['where']['signup_id'] = $_POST['cleanerid']['cleaning_service_cleaner_id'];
                $signup_data = $this->model_signup->find_one($paramsignup);
                $id_1 = intval($signup_data['signup_id']);
                $job_minus = $signup_data['signup_package_job'] - 1;

                $this->model_signup->update_by_pk($id_1, array(
                    'signup_package_job' =>  $job_minus
                ));

                $this->model_cleaning_service->update_by_pk($id, array(
                    'cleaning_service_cleaner_id' => $_POST['cleanerid']['cleaning_service_cleaner_id'],
                    'cleaning_service_status' => 3,
                    'cleaning_service_accpet' => 1,
                    'cleaning_service_cleaner_name' => $_POST['cleanerid']['cleaning_service_cleaner_name'],
                ));
                $json_param['status'] = true;
                echo json_encode($json_param);
            }
        } else {
            $json_param['alreadyaccepet'] = true;
            echo json_encode($json_param);
            //   $this->session->set_flashdata('error', 'This job already accepted by another cleaner');
        }
    }

    public function update_cleaner_decline()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerdec']['cleaning_service_id']);

            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_decline_id' => $_POST['cleanerdec']['cleaning_service_cleaner_decline_id'],
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }
    // arrival tim function

    public function arrival_time()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        // debug($_POST,1);
        $user_data = $this->model_signup->find_by_pk($this->userid);

        $params['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
        );
        $relator_data = $this->model_cleaning_service->find_one($params);

        $param2['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
        );
        $clean_data = $this->model_cleaning_service->find_one($param2);


        $arrival_time = $this->input->post('arrivaltime');

        if (array_filled($arrival_time) > 0) {
            // debug($arrival_time,1);
            if ($this->validate("model_arrival_time")) {
                $inserted_id = $this->model_arrival_time->insert_record($arrival_time);
                // debug($inserted_id,1);  

                if ($inserted_id > 0) {
                    // debug($inserted_id);

                    // Send confirmation email
                    // $this->model_email->arrival_time_email($inserted_id, $user_data, $relator_data, $clean_data);
                    // debug($inserted_id,1);
                    //sleep(2);
                    // Welcome email
                    // $this->model_email->send_welcome_email($signup['signup_email']);

                    $this->json_param['status'] = true;
                    //$this->json_param['txt'] = 'Thanks for registration. Please check your inbox for account verification.';
                    $this->json_param['txt'] = 'Successfully Added.';
                }
                // Record not insert
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Something went wrong.Please try later.';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        }
        echo json_encode($this->json_param);
    }

    public function left_time()
    {
        // debug($_POST,1);
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        // debug($_POST,1);
        $user_data = $this->model_signup->find_by_pk($this->userid);

        $params['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
        );
        $relator_data = $this->model_cleaning_service->find_one($params);

        $param2['joins'][] = array(
            "table" => "signup",
            "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
        );
        $clean_data = $this->model_cleaning_service->find_one($param2);


        $left_time = $this->input->post('lefttime');

        if (array_filled($left_time) > 0) {
            if ($this->validate("model_left_time")) {
                $inserted_id = $this->model_left_time->insert_record($left_time);

                if ($inserted_id > 0) {

                    // Send confirmation email
                    // $this->model_email->left_time_email($inserted_id, $user_data, $relator_data, $clean_data);


                    $this->json_param['status'] = true;
                    $this->json_param['txt'] = 'Successfully Added.';
                }
                // Record not insert
                else {
                    $this->json_param['status'] = false;
                    $this->json_param['txt'] = 'Something went wrong.Please try later.';
                }
            } else {
                $this->json_param['status'] = false;
                $this->json_param['txt'] = validation_errors();
            }
        }
        echo json_encode($this->json_param);
    }

    // team data add
    public function team_name()
    {
        // debug($_POST['team'],1)

        $amount = $this->model_member_amount->find_all();
        // $this->load->library('session');
        $data = $_POST['team'];
        // debug($data,1);
        // $team_member_save = json_decode($data, true);
        // debug($team_member_save,1);
        //  $this->session->set_userdata(array($team_member));
        $this->session->set_userdata('teampeople', $data);
        // debug(1,1);
        require_once('application/libraries/stripe-php/init.php');
        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = g('base_url');


        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Stripe Checkout',
                    ],
                    'unit_amount' => $amount[0]['member_amount_value'] * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => g('base_url') . "account/StripeCheckout",
            'cancel_url' => g('base_url'),
        ]);

        // \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');


        // debug($checkout_session,1);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);

        $this->session->set_userdata('teamdataamount', $charge);
    }
    // session data for addmemeber
    public function StripeCheckout()
    {
        require_once('application/libraries/stripe-php/init.php');

        // \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');
        // \Stripe\PaymentIntent::create([
        //     'amount' => 1099,
        //     'currency' => 'usd',
        //     'payment_method_types' => ['card'],
        //     'receipt_email' => 'fredaston49@gmail.com',
        //     ]);

        $datateam =  $this->session->userdata('teamdataamount');
        // debug($datateam,1);
        // data of team member
        $datateampeople =  $this->session->userdata('teampeople');
        // end

        // data of memeber for
        $teamformte = $this->session->userdata('teampform');
        // end



        // save team memeber / member form
        $memeber_data = $this->model_team_name->insert_record($datateampeople);
        $this->model_email->add_member_email($memeber_data);

        $data1 = array(
            'user_team_user_id' => $this->userid,
            'user_team_form_id' => $memeber_data,
            'user_team_member_name' => $teamformte['user_team_member_name'],
            'user_team_name' => $memeber_data['team_name_memeber'],
            'user_team_date_of_birth' => $teamformte['user_team_date_of_birth'],
            'user_team_print_name' => $teamformte['user_team_print_name'],
            'user_team_print_other_name' => $teamformte['user_team_print_other_name'],
            'user_team_social_security_number' => $teamformte['user_team_social_security_number'],
            'user_team_driver_license' => $teamformte['user_team_driver_license'],
            'user_team_address' => $teamformte['user_team_address'],
            'user_team_date' => $teamformte['user_team_date'],
            'user_team_initials' => $teamformte['user_team_initials'],
            'user_team_signature' => $teamformte['user_team_signature']
        );
        $memeber_form = $this->model_user_team->insert_record($data1);
        // end

        if ($memeber_data > 0) {
            $this->json_param['status'] = true;
            //  $this->json_param['txt'] = 'Payment Successfully Done.';
            $this->json_param['txt'] = 'Successfully Added.';
            $this->session->set_flashdata('success', 'Your member has been added');
            redirect('account/info_cleaner?id=2');
        }
        echo json_encode($this->json_param);
    }
    // end
    public function accpet_addtional_job()
    {

        $data = $_POST['cleanerid'];

        $dataadd = $_POST['cleaneradd'];

        // debug($dataadd,1);
        $this->session->set_userdata('accpet_addtional_job', $data);

        $this->session->set_userdata('amount_addtional_job', $dataadd);


        require_once('application/libraries/stripe-php/init.php');
        \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = g('base_url');

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Stripe Checkout',
                    ],
                    'unit_amount' => 10 * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => g('base_url') . "account/Stripeaddtional",
            'cancel_url' => 'http://localhost/cleantoclose_dev/account/browse_task',
        ]);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);

        $this->session->set_userdata('teamdataamount', $charge);
    }
    public function stripeaddtional()
    {
        // adddtional job data
        $accpet_addtional_job =  $this->session->userdata('accpet_addtional_job');

        $amount_addtional_job =  $this->session->userdata('amount_addtional_job');

        // debug($accpet_addtional_job,1);

        // end  
        if (isset($accpet_addtional_job) and array_filled($accpet_addtional_job)) {
            $id = intval($accpet_addtional_job['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $accpet_addtional_job['cleaning_service_id'],
                'cleaning_service_cleaner_id' => $accpet_addtional_job['cleaning_service_cleaner_id'],
                'cleaning_service_status' => 3
            ));
        }

        $amount_addtional_job['signup_payment_user_id'] = $amount_addtional_job['signup_payment_user_id'];
        $amount_addtional_job['signup_payment_add_amount'] = $amount_addtional_job['signup_payment_add_amount'];
        $amount_addtional_job['signup_payment_package_name'] =  $amount_addtional_job['signup_payment_package_name'];

        $amount_addtional_job = $this->model_signup_payment->insert_record($amount_addtional_job);

        if ($accpet_addtional_job > 0) {
            $this->json_param['status'] = true;
            //  $this->json_param['txt'] = 'Payment Successfully Done.';
            $this->json_param['txt'] = 'Successfully Added.';
            $this->session->set_flashdata('success', 'Job has been accepted successfully');
            redirect('account/my_task');
        }
        echo json_encode($this->json_param);
    }
    // edit page functions
    public function editdocument()
    {

        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();


        $param['joins'][] = array(
            "table" => "cleaning_service",
            "joint" => "cleaning_service.cleaning_service_id = upload_document.upload_document_cleaning_id"
        );
        $param['where']['cleaning_service_cleaner_id'] = $this->userid;
        $param['where']['upload_document_id'] = $_GET['id'];
        $data['upload_document'] = $this->model_upload_document->find_one($param);
        // debug($data['upload_document'], 1);

        $this->load_view("editdocument", $data);
    }

    // edit update function
    public function update_images()
    {
        // debug($_POST);
        // debug($_FILES, 1);

        global $config;

        $param['where']['upload_document_id'] = $_POST['uploaddocument']['upload_document_id'];
        $data = $this->model_upload_document->find_one($param);
        // debug($data,1);

        $id = intval($_POST['uploaddocument']['upload_document_id']);
        $uploaddocument_data = $this->input->post('uploaddocument');

        if ((count($_POST) > 0) && (array_filled($uploaddocument_data))) {

            if ($this->validate("model_upload_document")) {

                // before image
                $file_name = $_FILES['uploaddocument']['name']['upload_document_before1_image'];
                $tmp_name = $_FILES['uploaddocument']['tmp_name']['upload_document_before1_image'];
                move_uploaded_file($tmp_name, 'assets/uploads/cleaning_picture/' . $file_name);

                $file_name1 = $_FILES['uploaddocument']['name']['upload_document_before2_image'];
                $tmp_name1 = $_FILES['uploaddocument']['tmp_name']['upload_document_before2_image'];
                move_uploaded_file($tmp_name1, 'assets/uploads/cleaning_picture/' . $file_name1);

                $file_name2 = $_FILES['uploaddocument']['name']['upload_document_before3_image'];
                $tmp_name2 = $_FILES['uploaddocument']['tmp_name']['upload_document_before3_image'];
                move_uploaded_file($tmp_name2, 'assets/uploads/cleaning_picture/' . $file_name2);

                // after image
                $file_name3 = $_FILES['uploaddocument']['name']['upload_document_after1_image'];
                $tmp_name3 = $_FILES['uploaddocument']['tmp_name']['upload_document_after1_image'];
                move_uploaded_file($tmp_name3, 'assets/uploads/cleaning_picture/' . $file_name3);

                $file_name4 = $_FILES['uploaddocument']['name']['upload_document_after2_image'];
                $tmp_name4 = $_FILES['uploaddocument']['tmp_name']['upload_document_after2_image'];
                move_uploaded_file($tmp_name4, 'assets/uploads/cleaning_picture/' . $file_name4);

                $file_name5 = $_FILES['uploaddocument']['name']['upload_document_after3_image'];
                $tmp_name5 = $_FILES['uploaddocument']['tmp_name']['upload_document_after3_image'];
                move_uploaded_file($tmp_name5, 'assets/uploads/cleaning_picture/' . $file_name5);

                // signed image
                $file_name6 = $_FILES['uploaddocument']['name']['upload_document_signed_image'];
                $tmp_name6 = $_FILES['uploaddocument']['tmp_name']['upload_document_signed_image'];
                move_uploaded_file($tmp_name6, 'assets/uploads/cleaning_picture/' . $file_name6);

                // if($_FILES )
                // before images condition
                if ($_FILES['uploaddocument']['name']['upload_document_before1_image'] != "") {

                    $uploaddocument['upload_document_before1_image'] = $_FILES['uploaddocument']['name']['upload_document_before1_image'];
                } else {
                    $uploaddocument['upload_document_before1_image'] = $data['upload_document_before1_image'];
                }

                if ($_FILES['uploaddocument']['name']['upload_document_before2_image'] != "") {

                    $uploaddocument['upload_document_before2_image'] = $_FILES['uploaddocument']['name']['upload_document_before2_image'];
                } else {

                    $uploaddocument['upload_document_before2_image'] = $data['upload_document_before2_image'];
                }

                if ($_FILES['uploaddocument']['name']['upload_document_before3_image'] != "") {

                    $uploaddocument['upload_document_before3_image'] = $_FILES['uploaddocument']['name']['upload_document_before3_image'];
                } else {

                    $uploaddocument['upload_document_before3_image'] = $data['upload_document_before3_image'];
                }

                // after images condition
                if ($_FILES['uploaddocument']['name']['upload_document_after1_image'] != "") {

                    $uploaddocument['upload_document_after1_image'] = $_FILES['uploaddocument']['name']['upload_document_after1_image'];
                } else {
                    $uploaddocument['upload_document_after1_image'] = $data['upload_document_after1_image'];
                }

                if ($_FILES['uploaddocument']['name']['upload_document_after2_image'] != "") {

                    $uploaddocument['upload_document_after2_image'] = $_FILES['uploaddocument']['name']['upload_document_after2_image'];
                } else {

                    $uploaddocument['upload_document_after2_image'] = $data['upload_document_after2_image'];
                }

                if ($_FILES['uploaddocument']['name']['upload_document_after3_image'] != "") {

                    $uploaddocument['upload_document_after3_image'] = $_FILES['uploaddocument']['name']['upload_document_after3_image'];
                } else {

                    $uploaddocument['upload_document_after3_image'] = $data['upload_document_after3_image'];
                }

                // document image condtion

                if ($_FILES['uploaddocument']['name']['upload_document_signed_image'] != "") {

                    $uploaddocument['upload_document_signed_image'] = $_FILES['uploaddocument']['name']['upload_document_signed_image'];
                } else {
                    $uploaddocument['upload_document_signed_image'] = $data['upload_document_signed_image'];
                }

                // inserted data
                $status = $this->model_upload_document->update_by_pk($id, $uploaddocument);
                // debug($status,1);
                if ($status > 0) {
                    // Update session

                    $param['status'] = 1;
                    $param['txt'] = 'Updated successfully.';
                    echo json_encode($param);
                } else {
                    $param['status'] = 0;
                    $param['txt'] = 'Fail to update record';
                    echo json_encode($param);
                }
            } else {
                $param['status'] = 0;
                $param['txt'] = validation_errors();
                echo json_encode($param);
            }
        } else {
            $param['status'] = 0;
            $param['txt'] = "Please enter required field";
            echo json_encode($param);
        }
    }

    //  cleaner controller function end

    public function edit_palce()
    {

        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        $par['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        $par['where']['cleaning_service_id'] = $_GET['id'];
        $data['cleaning_edit'] = $this->model_cleaning_service->find_one($par);
        $data['sqft_data'] = $this->model_sqft->find_all_active();
        // debug($data['cleaning_edit'],1);
        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();
        $this->load_view("editplaceorder", $data);
    }

    public function cancell_order()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        // $param5['joins'][] = array(
        //     "table" => "signup",
        //     "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
        // );
        $param5['where']['cleaning_service_id'] = $_GET['id'];
        $data['clean_data'] = $this->model_cleaning_service->find_one($param5);
        // debug($clean_data,1);
        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();
        $this->load_view("cancell_order", $data);
    }

    public function video_page()
    {
        // Get Countries
        $data['countries'] = $this->model_country->find_all_active();

        $paramss['where']['cms_page_id'] = 24;
        $data['content'] = $this->model_cms_page->find_one($paramss);
        // debug($data['content'],1);
        $this->load_view("video_page", $data);
    }

    public function submit_order()
    {
        $data['countries'] = $this->model_country->find_all_active();

        // cleaning data
        $para['order'] = "cleaning_service_id DESC";
        $data['clean_id'] = $this->model_cleaning_service->find_one($para);
        // debug($data['clean_id'],1);

        // user_data

        // $param['where']['signup_type'] = 1;
        $param['where']['signup_id'] = $this->userid;
        $data['user_data'] = $this->model_signup->find_one($param);
        // debug($data['user_data'],1);
        $this->load_view("submit_order", $data);
    }

    public function testsubmit()
    {
        $this->load->library('session');
        $vg = $_POST['clean'];
        if ($vg == null) {
            echo json_encode(array(
                'status' => '2',
            ));
        } else {
            echo json_encode(array(
                'status' => '3',
            ));
            $this->session->set_userdata('cleaning_id', $vg);
        }
    }

    public function save_submit()
    {

        $cleaningid =  $this->session->userdata('cleaning_id');

        # code...
        $Data = json_decode(file_get_contents('php://input'), true);
        // $save_email = $Data;


        // cleaning data
        $para1['joins'][] = array(
            "table" => "sqft",
            "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
        );
        // $para1['joins'][] = array(
        //     "table" => "cleaning_service",
        //     "joint" => " cleaning_service.cleaning_service_square_footage = sqft.sqft_id"
        // );
        // $para1['order'] = "cleaning_service_id DESC";
        $para1['where']['cleaning_service_id'] = $cleaningid;
        $cleanear = $this->model_cleaning_service->find_one($para1);
        //  debug($cleanear,1);

        // user_data

        // $param['where']['signup_type'] = 1;
        $param2['where']['signup_id'] = $this->userid;
        $user = $this->model_signup->find_one($param2);
        //  debug($user,1);

        $this->model_email->email_send_document($Data, $cleanear, $user);

        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    // palceorder update
    public function place_order_update()
    {
        // debug($_POST,1);
        # code...
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleaning_service']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_id' => $_POST['cleaning_service']['cleaning_service_id'],
                'cleaning_service_user_id' => $_POST['cleaning_service']['cleaning_service_user_id'],
                'cleaning_service_lockbox' => $_POST['cleaning_service']['cleaning_service_lockbox'],
                'cleaning_service_code_info' => $_POST['cleaning_service']['cleaning_service_code_info'],
                'cleaning_service_location_of_lockbox' => $_POST['cleaning_service']['cleaning_service_location_of_lockbox'],
                'cleaning_service_supra_cbs_code' => $_POST['cleaning_service']['cleaning_service_supra_cbs_code'],
                'cleaning_service_garage' => $_POST['cleaning_service']['cleaning_service_garage'],
                // 'cleaning_service_id' => $_POST['cleaning_service']['cleaning_service_id'],
                // 'cleaning_service_user_id' => $_POST['cleaning_service']['cleaning_service_user_id'],
                // 'cleaning_service_address' => $_POST['cleaning_service']['cleaning_service_address'],
                // 'cleaning_service_unit' => $_POST['cleaning_service']['cleaning_service_unit'],
                // 'cleaning_service_city' => $_POST['cleaning_service']['cleaning_service_city'],
                // 'cleaning_service_state' => $_POST['cleaning_service']['cleaning_service_state'],
                // 'cleaning_service_zipcode' => $_POST['cleaning_service']['cleaning_service_zipcode'],
                // 'cleaning_service_lockbox' => $_POST['cleaning_service']['cleaning_service_lockbox'],
                // 'cleaning_service_sentri_lock' => $_POST['cleaning_service']['cleaning_service_sentri_lock'],
                // 'cleaning_service_garage' => $_POST['cleaning_service']['cleaning_service_garage'],
                // 'cleaning_service_supra_cbs_code' => $_POST['cleaning_service']['cleaning_service_supra_cbs_code'],
                // 'cleaning_service_code_info' => $_POST['cleaning_service']['cleaning_service_code_info'],
                // 'cleaning_service_location_of_lockbox' => $_POST['cleaning_service']['cleaning_service_location_of_lockbox'],
                // 'cleaning_service_mls' => $_POST['cleaning_service']['cleaning_service_mls'],
                // 'cleaning_service_representing' => $_POST['cleaning_service']['cleaning_service_representing'],
                // 'cleaning_service_projected_closing_date' => $_POST['cleaning_service']['cleaning_service_projected_closing_date'],
                // 'cleaning_service_closing_tittle_company' => $_POST['cleaning_service']['cleaning_service_closing_tittle_company'],
                // 'cleaning_service_cleaning_occur_prior_closing' => $_POST['cleaning_service']['cleaning_service_cleaning_occur_prior_closing'],
                // 'cleaning_service_responsible_payment' => $_POST['cleaning_service']['cleaning_service_responsible_payment'],
                // 'cleaning_service_closing_date' => $_POST['cleaning_service']['cleaning_service_closing_date'],
                // 'cleaning_service_closing_time' => $_POST['cleaning_service']['cleaning_service_closing_time'],
                // 'cleaning_service_type_residence' => $_POST['cleaning_service']['cleaning_service_type_residence'],
                // 'cleaning_service_square_footage' => $_POST['cleaning_service']['cleaning_service_square_footage'],
                // 'cleaning_service_bathroom' => $_POST['cleaning_service']['cleaning_service_bathroom'],
                // 'cleaning_service_full_bathroom' => $_POST['cleaning_service']['cleaning_service_full_bathroom'],
                // 'cleaning_service_bedrooms' => $_POST['cleaning_service']['cleaning_service_bedrooms'],
                // 'cleaning_service_first_name' => $_POST['cleaning_service']['cleaning_service_first_name'],
                // 'cleaning_service_email' => $_POST['cleaning_service']['cleaning_service_email'],
                // 'cleaning_service_contact' => $_POST['cleaning_service']['cleaning_service_contact'],
                // 'cleaning_service_other_buyer_fullname' => $_POST['cleaning_service']['cleaning_service_other_buyer_fullname'],
                // 'cleaning_service_other_buyer_email' => $_POST['cleaning_service']['cleaning_service_other_buyer_email'],
                // 'cleaning_service_other_buyer_phone' => $_POST['cleaning_service']['cleaning_service_other_buyer_phone'],
                // 'cleaning_service_other_seller_fullname' => $_POST['cleaning_service']['cleaning_service_other_seller_fullname'],
                // 'cleaning_service_other_seller_email' => $_POST['cleaning_service']['cleaning_service_other_seller_email'],
                // 'cleaning_service_other_seller_phone' => $_POST['cleaning_service']['cleaning_service_other_seller_phone'],
                // 'cleaning_service_agent_buyer_name' => $_POST['cleaning_service']['cleaning_service_agent_buyer_name'],
                // 'cleaning_service_agent_buyer_email' => $_POST['cleaning_service']['cleaning_service_agent_buyer_email'],
                // 'cleaning_service_agent_buyer_phone' => $_POST['cleaning_service']['cleaning_service_agent_buyer_phone'],
                // 'cleaning_service_agent_seller_name' => $_POST['cleaning_service']['cleaning_service_agent_seller_name'],
                // 'cleaning_service_agent_seller_email' => $_POST['cleaning_service']['cleaning_service_agent_seller_email'],
                // 'cleaning_service_agent_seller_phone' => $_POST['cleaning_service']['cleaning_service_agent_seller_phone'],
                // 'cleaning_service_last_name' => $_POST['cleaning_service']['cleaning_service_last_name'],
                // 'cleaning_service_last_name_seller' => $_POST['cleaning_service']['cleaning_service_last_name_seller'],
                // 'cleaning_buyer_last_name' => $_POST['cleaning_service']['cleaning_buyer_last_name'],
                // 'cleaning_service_agent_buyer_last_name' => $_POST['cleaning_service']['cleaning_service_agent_buyer_last_name'],
                // 'cleaning_service_other_seller_lastname' => $_POST['cleaning_service']['cleaning_service_other_seller_lastname'],
                // 'cleaning_seller_last_name' => $_POST['cleaning_service']['cleaning_seller_last_name'],
                // 'cleaning_service_agent_seller_last_name' => $_POST['cleaning_service']['cleaning_service_agent_seller_last_name'],
                // 'cleaning_service_other_buyer_lastname' => $_POST['cleaning_service']['cleaning_service_other_buyer_lastname'],
                // 'cleaning_service_closing_tittle_company_email' => $_POST['cleaning_service']['cleaning_service_closing_tittle_company_email'],
                // 'cleaning_service_closing_tittle_company_phone_number' => $_POST['cleaning_service']['cleaning_service_closing_tittle_company_phone_number'],
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }
    public function package_name()
    {
        global $config;
        // $param['where']['signup_id'] = $this->userid;
        $param['order'] = "signup_id DESC";
        $data['package_detail'] = $this->model_signup->find_one($param);
        // debug($data['package_detail'],1);
        $this->load_view('package_name', $data);
    }

    public function cancle_cleaning()
    {
        $param130['where']['signup_id'] =  $_POST['cleanerid']['cleaning_service_cleaner_id'];
        $signupId = $this->model_signup->find_one($param130);
        $id1 = intval($signupId['signup_id']);
        $updateJob = $signupId['signup_package_job'] + 1;

        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerid']['cleaning_service_id']);

            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_id' => 0,
                'cleaning_service_cleaner_name' => '',
                'cleaning_service_accpet' => 0,
                'cleaning_service_status' => 1,
            ));
            $this->model_signup->update_by_pk($id1, array(
                'signup_package_job' =>  $updateJob,

            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    public function cancle_cleaning_update()
    {
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerid']['cleaning_service_id']);

            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_id' => 0,
                'cleaning_service_cleaner_name' => '',
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }



    public function save_member_form()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;

        $this->load->library('session');
        // $team_member_form = $_POST;
        $team_member_form = $_POST['form_data'];
        // debug($team_member_form,1);
        // $team_member = json_decode($team_member_form, true);
        // debug($team_member,1);
        // if ($team_member_form) {
        //         $this->json_param['status'] = true;
        //         $this->json_param['txt'] = 'Successfully Added.';
        //     }
        $this->session->set_userdata('teampform', $team_member_form);
        // // debug($team_member_form,1);
        // $inserted_id = $this->model_user_team->insert_record($team_member_form);
        // // debug($inserted_id,1);  
        // if ($inserted_id > 0) {
        //     $this->json_param['status'] = true;
        //     $this->json_param['txt'] = 'Successfully Added.';
        // }
        // // Record not insert
        // else {
        //     $this->json_param['status'] = false;
        //     $this->json_param['txt'] = 'Something went wrong.Please try later.';
        // }
        echo json_encode($this->json_param);
    }
    // update date relase job 
    // public function update_cleaning_release()
    // {
    //     if ($this->userid <= 0) {
    //         redirect(g('base_url') . 'user/login');
    //     }
    //     global $config;
    //     // debug($_POST,1);
    //     if (isset($_POST) and array_filled($_POST)) {
    //         $id = intval($_POST['cleanerupdateid']['cleaning_service_id']);
    //         $this->model_cleaning_service->update_by_pk($id, array(
    //             'cleaning_service_cleaner_id' => 0,
    //             'cleaning_service_update_status' => 0,
    //             'cleaning_service_status'=>1
    //         ));
    //         $json_param['status'] = true;
    //         echo json_encode($json_param);
    //     }
    // }

    public function update_cleaning_release()
    {
        // debug($_POST,1)
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        // debug($_POST,1);
        $param129['where']['signup_id'] =  $_POST['cleanerupdateid']['cleaning_service_cleaner_id'];
        $signupId = $this->model_signup->find_one($param129);
        $id1 = intval($signupId['signup_id']);
        $updateJob = $signupId['signup_package_job'] + 1;


        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerupdateid']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_id' => 0,
                'cleaning_service_update_status' => 0,
                'cleaning_service_status' => 1,
                'cleaning_service_accpet' => 0,
                'cleaning_service_cleaner_name' => '',
            ));

            $this->model_signup->update_by_pk($id1, array(
                'signup_package_job' =>  $updateJob,

            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }

    // update accpet after date update
    public function update_cleaning_accpet()
    {
        if ($this->userid <= 0) {
            redirect(g('base_url') . 'user/login');
        }
        global $config;
        // debug($_POST,1);

        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['cleanerupdateid']['cleaning_service_id']);
            $this->model_cleaning_service->update_by_pk($id, array(
                'cleaning_service_cleaner_id' => $this->userid,
                'cleaning_service_update_status' => 0,
                'cleaning_service_status' => 3
            ));
            $json_param['status'] = true;
            echo json_encode($json_param);
        }
    }


    public function save_form_team()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['teamform']['user_team_id']);
            $this->model_user_team->update_by_pk($id, array(
                'user_team_id' => $_POST['teamform']['user_team_id'],
                'user_team_user_id' => $_POST['teamform']['user_team_user_id'],
                'user_team_member_name' => $_POST['teamform']['user_team_member_name'],
                'user_team_name' => $_POST['teamform']['user_team_name'],
                'user_team_signature' => $_POST['teamform']['user_team_signature'],
                'user_team_initials' => $_POST['teamform']['user_team_initials'],
                'user_team_print_name' => $_POST['teamform']['user_team_print_name'],
                'user_team_print_other_name' => $_POST['teamform']['user_team_print_other_name'],
                'user_team_social_security_number' => $_POST['teamform']['user_team_social_security_number'],
                'user_team_date_of_birth' => $_POST['teamform']['user_team_date_of_birth'],
                'user_team_driver_license' => $_POST['teamform']['user_team_driver_license'],
                'user_team_address' => $_POST['teamform']['user_team_address'],
                'user_team_date' => $_POST['teamform']['user_team_date'],
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }

    public function ownerformedit()
    {
        // debug($_POST,1);
        if (isset($_POST) and array_filled($_POST)) {
            $id = intval($_POST['ownerform']['user_team_id']);
            $this->model_user_team->update_by_pk($id, array(
                'user_team_id' => $_POST['ownerform']['user_team_id'],
                'user_team_user_id' => $_POST['ownerform']['user_team_user_id'],
                'user_team_form_id' => $_POST['ownerform']['user_team_form_id'],
                'user_team_member_name' => $_POST['ownerform']['user_team_member_name'],
                'user_team_name' => $_POST['ownerform']['user_team_name'],
                'user_team_signature' => $_POST['ownerform']['user_team_signature'],
                'user_team_initials' => $_POST['ownerform']['user_team_initials'],
                'user_team_print_name' => $_POST['ownerform']['user_team_print_name'],
                'user_team_print_other_name' => $_POST['ownerform']['user_team_print_other_name'],
                'user_team_social_security_number' => $_POST['ownerform']['user_team_social_security_number'],
                'user_team_date_of_birth' => $_POST['ownerform']['user_team_date_of_birth'],
                'user_team_driver_license' => $_POST['ownerform']['user_team_driver_license'],
                'user_team_address' => $_POST['ownerform']['user_team_address'],
                'user_team_date' => $_POST['ownerform']['user_team_date'],
            ));
        }
        $json_param['status'] = true;
        echo json_encode($json_param);
    }
    public function zipcode_email()
    {
        // $param 
        // debug($_POST["zip"],1);
        $zipcode = $_POST["zip"];
        $data['user_email_data'] = $this->model_signup->find_by_pk($this->userid);
        // debug($data['user_email_data']['signup_email'],1);
        $email_zip_data = $data['user_email_data'];
        $this->model_email->zip_email($email_zip_data, $zipcode);
    }

    public function reshduledate()
    {
        $json_param['status'] = true;
        echo json_encode($json_param);
        // debug($_POST,1);
        # code...
        // if (isset($_POST) and array_filled($_POST)) {
        //     $pardate['where']['cleaning_service_id'] = $_POST['datechange']['cleaning_service_id'];
        //     $data['daterequest'] = $this->model_cleaning_service->find_one($pardate);
        //     $update_date =   $data['daterequest'];
        //     $this->model_email->date_update($update_date);
        // }
        // $json_param['update_date_admin'] = true;
        // echo json_encode($json_param);
        // debug($data['daterequest'],1);

        // debug($_POST['cancel']['id']);
        //    if (isset($_POST) and array_filled($_POST)) {
        //     $id = intval($_POST['cancel']['id']);
        //     // debug($id,1);
        //     $this->model_cleaning_service->update_by_pk($id, array(
        //         'cleaning_service_id' => $_POST['cancel']['id'],


        //     ));
        // $this->model_email->cancel_email($id);

        // }
    }
}
