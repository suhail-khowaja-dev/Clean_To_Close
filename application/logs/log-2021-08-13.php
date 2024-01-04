<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-13 00:36:02 --> Severity: error --> Exception: Call to undefined function asset() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 424
ERROR - 2021-08-13 01:18:14 --> Query error: Unknown column 'cleaning_service_cleaner_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
WHERE `cleaning_service_cleaner_id` = 4
ERROR - 2021-08-13 01:18:49 --> Query error: Unknown column 'cleaning_service_cleaner_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
WHERE `cleaning_service_cleaner_id` = 4
ERROR - 2021-08-13 01:18:58 --> Query error: Unknown column 'cleaning_service_cleaner_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
WHERE `cleaning_service_cleaner_id` = 4
ERROR - 2021-08-13 01:24:40 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 01:24:48 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 01:25:10 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 01:25:47 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 01:26:13 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_id` =`ctc_upload_document`.`upload_document_cleaning_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 01:26:24 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_id` =`ctc_upload_document`.`upload_document_cleaning_id`
WHERE `signup_id` = 4
AND `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-13 00:54:25 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 00:59:44 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:00:17 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:00:23 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:00:28 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:01:33 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:01:49 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:02:45 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:02:56 --> 404 Page Not Found: admin/Cleaningservice/index
ERROR - 2021-08-13 01:05:07 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:05:43 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:06:58 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:08:43 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:08:52 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:09:37 --> 404 Page Not Found: admin/Cleanservices/index
ERROR - 2021-08-13 01:09:46 --> 404 Page Not Found: admin/Cleanservices/index
ERROR - 2021-08-13 01:10:36 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:10:39 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:10:53 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:10:58 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:11:14 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:12:59 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:15:29 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:23:39 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 01:26:25 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 02:04:27 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 02:05:21 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 02:05:31 --> 404 Page Not Found: admin/Cleaning_service/detail
ERROR - 2021-08-13 02:09:50 --> 404 Page Not Found: admin/Cleaning_service/index
ERROR - 2021-08-13 05:12:30 --> Severity: error --> Exception: Call to a member function get_fields() on null D:\XAMMP\htdocs\cleantoclose_dev\application\core\MY_Controller_Admin.php 97
ERROR - 2021-08-13 05:14:05 --> Query error: Unknown column 'cleaning_service_type' in 'field list' - Invalid query: SELECT SQL_CALC_FOUND_ROWS cleaning_service_id, cleaning_service_type, cleaning_service_name, cleaning_service_price, cleaning_service_status
FROM `ctc_cleaning_service`
WHERE `ctc_cleaning_service`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-08-13 05:36:15 --> Query error: Unknown column 'cleaning_service_type' in 'field list' - Invalid query: SELECT SQL_CALC_FOUND_ROWS cleaning_service_id, cleaning_service_type, cleaning_service_name, cleaning_service_price, cleaning_service_status
FROM `ctc_cleaning_service`
WHERE `ctc_cleaning_service`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-08-13 20:34:22 --> Query error: Unknown column 'cleaning_service_type' in 'field list' - Invalid query: SELECT SQL_CALC_FOUND_ROWS cleaning_service_id, cleaning_service_type, cleaning_service_name, cleaning_service_price, cleaning_service_status
FROM `ctc_cleaning_service`
WHERE `ctc_cleaning_service`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-08-13 20:51:29 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 20:51:40 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 20:53:02 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 20:54:59 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 20:57:43 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:20:04 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:27:34 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:35:32 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:35:36 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:36:09 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:36:36 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:43:41 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:46:31 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:46:36 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:46:44 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:46:49 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:46:56 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:47:01 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:53:46 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:54:08 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:55:09 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:55:34 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:55:43 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:55:46 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 21:58:04 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:00:37 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:00:38 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:00:42 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:00:50 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:05:08 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 22:08:44 --> Severity: error --> Exception: Call to undefined method Tkd_form_helper::gen_email() D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\tkd_form_helper.php 744
ERROR - 2021-08-13 23:16:44 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 77
ERROR - 2021-08-13 23:17:39 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 77
ERROR - 2021-08-13 23:18:40 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 84
ERROR - 2021-08-13 23:19:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 84
ERROR - 2021-08-13 23:20:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 99
ERROR - 2021-08-13 23:20:27 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 112
ERROR - 2021-08-13 23:21:26 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 140
ERROR - 2021-08-13 23:21:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 144
