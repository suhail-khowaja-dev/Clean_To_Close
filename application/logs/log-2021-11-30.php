<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-30 00:16:45 --> Severity: Warning --> Illegal string offset 'cleaning_service_id' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 549
ERROR - 2021-11-30 00:16:45 --> Severity: Warning --> Illegal string offset 'cleaning_service_id' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 551
ERROR - 2021-11-30 00:20:51 --> Severity: Warning --> Illegal string offset 'cleaning_service_id' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 549
ERROR - 2021-11-30 00:22:57 --> Severity: Warning --> Illegal string offset 'cleaning_service_id' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 549
ERROR - 2021-11-30 00:24:54 --> Severity: Warning --> Illegal string offset 'cleaning_service_id' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 553
ERROR - 2021-11-30 02:50:09 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\view_detail.php 194
ERROR - 2021-11-30 03:45:20 --> Query error: Not unique table/alias: 'ctc_sqft' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_sqft` ON `ctc_sqft`.`sqft_id` = `ctc_cleaning_service`.`cleaning_service_square_footage`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_sqft` ON `ctc_sqft`.`sqft_id` = `ctc_cleaning_service`.`cleaning_service_square_footage`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 6
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` = 0
AND `cleaning_service_compelted_user_id` = 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2021-11-30 04:12:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 04:12:44 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 205
ERROR - 2021-11-30 00:21:18 --> 404 Page Not Found: Account/lets_get_to_know
ERROR - 2021-11-30 04:21:18 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 04:21:19 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 206
ERROR - 2021-11-30 04:24:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 04:24:06 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 204
ERROR - 2021-11-30 17:10:26 --> 404 Page Not Found: Images/tick.svg
ERROR - 2021-11-30 21:59:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 22:11:05 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 23:34:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
ERROR - 2021-11-30 23:37:51 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\User.php 142
