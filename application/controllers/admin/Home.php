<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Webklex\PHPIMAP\ClientManager;
use Webklex\PHPIMAP\Client;

class Home extends MY_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// email work start
		$data['admin_email'] = $this->model_emails->find_all();

		// debug($data['admin_email'],1);
		// // email work start
		// $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
		// $username = $data['admin_email'][4]['emails_value'];
		// $password = $data['admin_email'][5]['emails_value'];
		// /* try to connect */
		// $inbox    = imap_open($hostname, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
		// $emails = imap_search($inbox, 'ALL');
		// foreach ($emails as $email_number) {
		// 	/* get information specific to this email */
		// 	$overview = imap_fetch_overview($inbox, $email_number, 0);
		// 	/* output the email header information */
		// 	$count[] = $overview[0]->seen ? 'read' : 'unread';
		// 	$output = $overview[0]->seen ? 'read' : 'unread';
		// 	$output .= '<span class="subject">' . $overview[0]->subject . '</span> ';
		// 	$output .= '<span class="from">' . $overview[0]->from . '</span>';
		// }
		// $tmp = array_count_values($count);
		// $data['rescheduleclean'] = $tmp['unread'];
		// imap_close($inbox);
		// //  email count work end

		// // 2ndemail
		// $hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
		// $username = $data['admin_email'][8]['emails_value'];
		// $password = $data['admin_email'][9]['emails_value'];
		// /* try to connect */
		// $inbox    = imap_open($hostname, $username, $password) or die('Cannot connect to Gmail: ' . imap_last_error());
		// $emails = imap_search($inbox, 'ALL');
		// foreach ($emails as $email_number) {
		// 	/* get information specific to this email */
		// 	$overview = imap_fetch_overview($inbox, $email_number, 0);
		// 	/* output the email header information */
		// 	$count[] = $overview[0]->seen ? 'read' : 'unread';
		// 	$output = $overview[0]->seen ? 'read' : 'unread';
		// 	$output .= '<span class="subject">' . $overview[0]->subject . '</span> ';
		// 	$output .= '<span class="from">' . $overview[0]->from . '</span>';
		// }
		// $tmp = array_count_values($count);
		// $data['adminclean'] = $tmp['unread'];

		// imap_close($inbox);
		//  email count work end

		global $config;
		//Set template configurations before calling load_template
		//Visit MY_Controller for details
		$this->layout_data['page_title'] = "Dashboard";
		//$this->layout_data['page_title_min'] = "Dashboard";
		$this->layout_data['bread_crumbs'] = array(array("home/" => "Home"));
		$this->layout_data['additional_tools'] = array(
			"jquery-ui",
			"bootstrap",
			"bootstrap-hover-dropdown",
			"jquery-slimscroll",
			"boots",
			"font-awesome",
			"simple-line-icons",
		);

		$this->add_script(array("pages/tasks.css", "agent_analytics.css"));
		$this->add_script(array("tasks.js", "index.js", "real-time.js", "canvasjs.min.js"), "js");

		$this->register_plugins(array('fullcalendar2'));

		// all email
		$data['admin_email'] = $this->model_emails->find_all();
		// debug($data['admin_email'],1);

		//$data[ 'products' ] = $this->model_product->find_count_active();


		//$profit_params = array();
		//$profit_params[ 'fields' ] = "SUM(order_total - order_discount) AS total";
		//$data[ 'profit' ] = $this->model_order->find_one_active($profit_params);

		//$data[ 'orders' ] = $this->model_order->find_count_active();

		//$params_today = array() ;
		//$params_today['where']['DATE(order_created_on)'] = date("Y-m-d") ;
		//$data[ 'today_orders' ] = $this->model_order->find_count_active($params_today);

		$data['total_members'] = $this->model_signup->get_total_members();
		$data['unread_inquiry'] = $this->model_inquiry->get_unread_inquiry();
		$data['subscribe'] = $this->model_subscribe->find_count();
		//$data[ 'total_company' ] = $this->model_company->get_total_company();

		// Get all calendar events
		$data['events'] = $this->model_admin_event->get_admin_event_list();
		// Get all records (total users, Desktop , mobile)
		$data['agent'] = $this->model_agent->get_records();
		//$data['subscribers_list'] = $this->model_subscribe->get_records();
		$data['inquiries'] = $this->model_inquiry->get_records();


		$data['config'] = $this->config->config;
		$this->load_view("dashboard", $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */