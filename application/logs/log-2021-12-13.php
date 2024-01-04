<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-13 19:56:03 --> Query error: Not unique table/alias: 'ctc_team_name' - Invalid query: SELECT *
FROM `ctc_team_name`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_user_team`.`user_team_user_id`
WHERE `team_name_user_id` = 7
AND `ctc_team_name`.`team_name_status` = 1
ERROR - 2021-12-13 17:06:28 --> Severity: Compile Error --> Cannot use empty array elements in arrays D:\XAMMP\htdocs\cleantoclose_dev\application\models\Model_signup.php 128
ERROR - 2021-12-13 18:01:27 --> 404 Page Not Found: admin/Signup/detail
ERROR - 2021-12-13 18:03:08 --> 404 Page Not Found: admin/Signup/detail
ERROR - 2021-12-13 18:06:03 --> 404 Page Not Found: admin/Signup/detail
ERROR - 2021-12-13 22:49:53 --> 404 Page Not Found: Account/package_name
ERROR - 2021-12-13 23:09:47 --> 404 Page Not Found: Account/package_name
ERROR - 2021-12-13 23:13:24 --> 404 Page Not Found: User/package_name
