<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-15 14:32:11 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
ERROR - 2021-11-15 14:32:39 --> Severity: error --> Exception: Call to a member function find_all() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 451
ERROR - 2021-11-15 14:32:58 --> Severity: error --> Exception: Call to a member function find_all() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 451
ERROR - 2021-11-15 14:33:16 --> Severity: error --> Exception: Call to a member function find_all_Active() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 451
ERROR - 2021-11-15 14:33:26 --> Severity: error --> Exception: Call to a member function find_one() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 451
ERROR - 2021-11-15 14:33:52 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
ERROR - 2021-11-15 16:05:10 --> Severity: error --> Exception: Too few arguments to function Model_email::upload_email(), 1 passed in D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php on line 532 and exactly 6 expected D:\XAMMP\htdocs\cleantoclose_dev\application\models\Model_email.php 870
