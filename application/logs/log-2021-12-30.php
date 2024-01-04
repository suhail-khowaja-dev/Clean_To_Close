<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-30 01:39:22 --> Query error: Not unique table/alias: 'ctc_sqft' - Invalid query: SELECT *
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
ERROR - 2021-12-30 01:39:25 --> Query error: Not unique table/alias: 'ctc_sqft' - Invalid query: SELECT *
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
ERROR - 2021-12-30 01:39:26 --> Query error: Not unique table/alias: 'ctc_sqft' - Invalid query: SELECT *
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
ERROR - 2021-12-30 02:21:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 828
