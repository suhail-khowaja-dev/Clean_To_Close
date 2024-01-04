<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-11 00:10:24 --> Query error: Column 'user_team_member_name' cannot be null - Invalid query: INSERT INTO `ctc_user_team` (`user_team_user_id`, `user_team_member_name`, `user_team_name`, `user_team_date_of_birth`, `user_team_print_name`, `user_team_print_other_name`, `user_team_social_security_number`, `user_team_driver_license`, `user_team_address`, `user_team_date`, `user_team_initials`, `user_team_signature`) VALUES (8, NULL, 'Violet Mcconnell', '16-May-2016', 'Griffith Whitley', 'Valentine Wong', '800', 'Debitis quis enim iu', 'Nobis ut et voluptat', '2017-08-09', 'Cumque sit distinct', 'Ea dolor unde ut ad ')
ERROR - 2022-01-11 01:02:32 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' D:\XAMMP\htdocs\cleantoclose_dev\application\views\_layout\admin\left_menu.php 140
ERROR - 2022-01-11 01:05:26 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' D:\XAMMP\htdocs\cleantoclose_dev\application\views\_layout\admin\left_menu.php 138
ERROR - 2022-01-11 03:42:08 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\suspended_modal.php 78
ERROR - 2022-01-11 03:48:25 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' D:\XAMMP\htdocs\cleantoclose_dev\application\views\_layout\admin\left_menu.php 139
ERROR - 2022-01-11 03:52:52 --> Severity: error --> Exception: syntax error, unexpected ',' D:\XAMMP\htdocs\cleantoclose_dev\application\views\_layout\admin\left_menu.php 111
ERROR - 2022-01-11 04:06:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`,signup_status` = 1
ORDER BY 1 asc
 LIMIT 20' at line 4 - Invalid query: SELECT SQL_CALC_FOUND_ROWS signup_id, signup_name, signup_lastname, signup_email, signup_status
FROM `ctc_signup`
WHERE `ctc_signup`.`signup_status` != 2
AND `signup_type =2` `,signup_status` = 1
ORDER BY 1 asc
 LIMIT 20
ERROR - 2022-01-11 20:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`Orders`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20' at line 3 - Invalid query: SELECT SQL_CALC_FOUND_ROWS cleaning_service_id, cleaning_service_user_id, cleaning_service_cleaner_id, cleaning_service_projected_closing_date, cleaning_service_closing_date, cleaning_service_closing_time, cleaning_service_createdon, cleaning_service_total_amount, cleaning_service_status
FROM `ctc_All` `Orders`
WHERE `All` `Orders`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2022-01-11 20:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`Orders`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20' at line 3 - Invalid query: SELECT SQL_CALC_FOUND_ROWS cleaning_service_id, cleaning_service_user_id, cleaning_service_cleaner_id, cleaning_service_projected_closing_date, cleaning_service_closing_date, cleaning_service_closing_time, cleaning_service_createdon, cleaning_service_total_amount, cleaning_service_status
FROM `ctc_All` `Orders`
WHERE `All` `Orders`.`cleaning_service_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2022-01-11 21:40:09 --> 404 Page Not Found: admin/Member_amount/update
ERROR - 2022-01-11 21:41:00 --> 404 Page Not Found: admin/Member_amount/update
