<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-21 00:00:33 --> Query error: Unknown column 'ctc_signup.signup_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_user_id` = `ctc_signup`.`signup_id`
WHERE `cleaning_service_id` = '1'
AND `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2022-01-21 00:01:31 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
 LIMIT 1
ERROR - 2022-01-21 00:07:58 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
WHERE `cleaning_service_id` = '1'
 LIMIT 1
ERROR - 2022-01-21 00:10:00 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
WHERE `cleaning_service_id` = '1'
AND `signup_type` = 1
 LIMIT 1
ERROR - 2022-01-21 00:10:39 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
WHERE `cleaning_service_id` = '1'
AND `signup_type` = 1
 LIMIT 1
ERROR - 2022-01-21 00:10:42 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
WHERE `cleaning_service_id` = '1'
AND `signup_type` = 1
 LIMIT 1
ERROR - 2022-01-21 00:10:43 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
WHERE `cleaning_service_id` = '1'
AND `signup_type` = 1
 LIMIT 1
ERROR - 2022-01-21 00:10:50 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_user_id`
 LIMIT 1
ERROR - 2022-01-21 00:26:15 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:26:15 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:29:57 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:29:57 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:30:23 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:30:23 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:30:49 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:30:49 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:31:35 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:31:35 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:34:14 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:34:14 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:34:30 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:34:30 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 1416
ERROR - 2022-01-21 00:35:42 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:36:15 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:36:27 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:40:40 --> Query error: Not unique table/alias: 'ctc_arrival_time' - Invalid query: SELECT *
FROM `ctc_arrival_time`
JOIN `ctc_arrival_time` ON `ctc_arrival_time`.`arrival_time_cleaning_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `cleaning_service_id` = '2'
 LIMIT 1
ERROR - 2022-01-21 00:42:51 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:43:16 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:43:33 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:44:32 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:45:23 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:46:55 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 00:47:23 --> Severity: Warning --> A non-numeric value encountered D:\XAMMP\htdocs\cleantoclose_dev\application\helpers\common_helper.php 255
ERROR - 2022-01-21 19:37:30 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 19:44:32 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 19:46:11 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:10:27 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:19:22 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:19:45 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:39:30 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:39:49 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:40:05 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:42:03 --> 404 Page Not Found: Front_assets/fonts
ERROR - 2022-01-21 20:42:14 --> 404 Page Not Found: Front_assets/fonts
