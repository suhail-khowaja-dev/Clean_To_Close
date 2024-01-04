<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-10 20:42:29 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_team_name`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
WHERE `team_name_user_id` = 6
AND `ctc_team_name`.`team_name_status` = 1
ERROR - 2022-01-10 20:42:44 --> Query error: Not unique table/alias: 'ctc_team_name' - Invalid query: SELECT *
FROM `ctc_team_name`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_user_team`.`user_team_user_id`
WHERE `team_name_user_id` = 6
AND `ctc_team_name`.`team_name_status` = 1
ERROR - 2022-01-10 23:10:51 --> Query error: Not unique table/alias: 'ctc_team_name' - Invalid query: SELECT *
FROM `ctc_team_name`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_id` = `ctc_user_team`.`user_team_form_id`
WHERE `team_name_user_id` = 7
AND `ctc_team_name`.`team_name_status` = 1
ERROR - 2022-01-10 23:11:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\info_cleaner.php 206
ERROR - 2022-01-10 23:11:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\info_cleaner.php 206
ERROR - 2022-01-10 23:30:22 --> Query error: Unknown column 'user_team_member_name' in 'field list' - Invalid query: UPDATE `ctc_team_name` SET `team_name_id` = NULL, `team_name_user_id` = '7', `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `team_name_id` = 2
ERROR - 2022-01-10 23:34:14 --> Query error: Unknown column 'user_team_user_id' in 'field list' - Invalid query: UPDATE `ctc_team_name` SET `team_name_id` = '2', `user_team_user_id` = '7', `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `team_name_id` = 2
ERROR - 2022-01-10 23:37:29 --> Query error: Unknown column 'user_team_user_id' in 'field list' - Invalid query: UPDATE `ctc_team_name` SET `team_name_id` = '2', `user_team_user_id` = 7, `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `team_name_id` = 2
ERROR - 2022-01-10 23:38:36 --> Query error: Unknown column 'user_team_user_id' in 'field list' - Invalid query: UPDATE `ctc_team_name` SET `team_name_id` = '2', `user_team_user_id` = 7, `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `team_name_id` = 2
ERROR - 2022-01-10 23:38:47 --> Query error: Unknown column 'user_team_member_name' in 'field list' - Invalid query: UPDATE `ctc_team_name` SET `team_name_id` = '2', `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `team_name_id` = 2
ERROR - 2022-01-10 23:41:44 --> Query error: Unknown column 'team_name_id' in 'field list' - Invalid query: UPDATE `ctc_user_team` SET `team_name_id` = '2', `user_team_user_id` = '7', `user_team_member_name` = 'Fred Aston', `user_team_name` = 'Robert', `user_team_signature` = 'Distinctio Voluptat', `user_team_initials` = 'Vero exercitation ac', `user_team_print_name` = 'Petra Berry', `user_team_print_other_name` = 'Kai Rosales', `user_team_social_security_number` = '40', `user_team_date_of_birth` = '08-Jul-2013', `user_team_driver_license` = 'Molestias tempore a', `user_team_address` = 'Cum est laboriosam ', `user_team_date` = '1979-07-25'
WHERE `user_team_id` = 2
