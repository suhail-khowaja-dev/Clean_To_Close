<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-12 03:25:24 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 75
ERROR - 2021-08-12 03:25:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 129
ERROR - 2021-08-12 03:25:51 --> Severity: error --> Exception: Call to undefined method CI_Loader::load_view() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 74
ERROR - 2021-08-12 03:26:02 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 76
ERROR - 2021-08-12 03:26:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 130
ERROR - 2021-08-12 03:26:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '1
ORDER BY `cleaning_service_id` DESC' at line 6 - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND cleaning_service .cleaning_service_status 1
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-12 03:27:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 129
ERROR - 2021-08-12 03:28:37 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 131
ERROR - 2021-08-12 03:28:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 131
ERROR - 2021-08-12 03:28:58 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 131
ERROR - 2021-08-12 03:29:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 131
ERROR - 2021-08-12 03:31:57 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_upload_user_id` = 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-12 01:34:08 --> 404 Page Not Found: Account/3
ERROR - 2021-08-12 05:04:42 --> Query error: Unknown column 'cleaning_service_cleaner_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
WHERE `cleaning_service_cleaner_id` = 4
ERROR - 2021-08-12 05:08:01 --> Query error: Unknown column 'cleaning_service_status' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
 LIMIT 1
ERROR - 2021-08-12 05:08:19 --> Query error: Unknown column 'cleaning_service_status' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
 LIMIT 1
ERROR - 2021-08-12 05:08:27 --> Severity: error --> Exception: Call to undefined method Model_upload_document::find_active() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 237
ERROR - 2021-08-12 05:08:35 --> Query error: Unknown column 'cleaning_service_status' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
AND `upload_document_cleaner_id` = 4
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-12 05:14:29 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` = 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-12 05:18:27 --> Query error: Unknown column 'signup_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
 LIMIT 1
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 05:32:27 --> Severity: Warning --> Illegal string offset 'upload_document_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\my_task.php 151
ERROR - 2021-08-12 21:13:45 --> Query error: Not unique table/alias: 'ctc_cleaning_service' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_id` = `ctc_upload_document`.`upload_document_cleaner_id`
WHERE `signup_id` = 4
AND `cleaning_service_status` = 1
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-08-12 21:22:07 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
 LIMIT 1
ERROR - 2021-08-12 21:22:52 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
 LIMIT 1
ERROR - 2021-08-12 21:24:49 --> Query error: Not unique table/alias: 'ctc_upload_document' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
JOIN `ctc_upload_document` ON `ctc_upload_document`.`upload_document_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `cleaning_service_cleaner_id` = 4
AND `cleaning_service_status` = 1
 LIMIT 1
ERROR - 2021-08-12 21:38:53 --> 404 Page Not Found: Account/js
ERROR - 2021-08-12 21:38:54 --> 404 Page Not Found: Account/js
ERROR - 2021-08-12 21:53:03 --> 404 Page Not Found: Account/jquery_3.5.1.min.js
ERROR - 2021-08-12 22:04:35 --> 404 Page Not Found: ControllerName/get_Full_data
ERROR - 2021-08-12 23:18:48 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ';' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1067
