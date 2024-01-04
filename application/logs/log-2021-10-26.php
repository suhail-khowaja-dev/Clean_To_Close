<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-26 17:25:16 --> 404 Page Not Found: admin/Signup/detail
ERROR - 2021-10-26 20:52:12 --> Query error: Unknown column 'ctc_team_name.team_name_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
 LIMIT 1
ERROR - 2021-10-26 20:52:29 --> Query error: Unknown column 'ctc_team_name.team_name_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
 LIMIT 1
ERROR - 2021-10-26 20:53:06 --> Query error: Unknown column 'signup_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '8'
 LIMIT 1
ERROR - 2021-10-26 20:53:46 --> Query error: Unknown column 'signup_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 20:54:21 --> Query error: Unknown column 'ctc_team_name.team_name_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 20:55:20 --> Query error: Unknown column 'team_name_user_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `team_name_user_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 20:59:20 --> Query error: Unknown column 'ctc_team_name.team_name_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 20:59:24 --> Query error: Unknown column 'signup_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 20:59:53 --> Query error: Unknown column 'signup_id' in 'where clause' - Invalid query: SELECT *
FROM `ctc_team`
JOIN `ctc_team_name` ON `ctc_team_name`.`team_name_user_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '8'
AND `ctc_team`.`team_status` = 1
ERROR - 2021-10-26 21:02:46 --> Query error: Unknown column 'ctc_user_team.user_team_status' in 'where clause' - Invalid query: SELECT *
FROM `ctc_user_team`
WHERE `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 21:03:18 --> Query error: Unknown column 'ctc_user_team.user_team_status' in 'where clause' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
WHERE `signup_id` = '8'
AND `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 21:08:40 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:09:07 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id`  = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:17:18 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:26:34 --> Query error: Unknown column 'ctc_team_name.team_name_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:28:53 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_user_team`.`user_team_user_id`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:29:32 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_signup`.`signup_id`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:39:23 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:39:51 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:40:02 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 21:40:09 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '8'
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:06:27 --> Severity: Warning --> Illegal string offset 'team_name_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\signup\detail.php 18
ERROR - 2021-10-26 22:08:27 --> Severity: error --> Exception: Call to a member function uniqid() on array D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\admin\Signup.php 109
ERROR - 2021-10-26 22:09:01 --> Severity: error --> Exception: Call to a member function distinct() on array D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\admin\Signup.php 109
ERROR - 2021-10-26 23:34:52 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 23:39:47 --> Query error: Unknown column 'ctc_team_name.user_team_user_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_team_name` ON `ctc_team_name`.`user_team_user_id` = `ctc_user_team`.`team_name_user_id`
WHERE `team_name_user_id` = '8'
AND `user_team_status` = 1
AND `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 23:40:08 --> Severity: error --> Exception: Call to undefined method Model_user_team::find_all_ctive() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\admin\Signup.php 119
ERROR - 2021-10-26 23:40:48 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `team_name_user_id` = '8'
AND `user_team_status` = 1
AND `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 23:41:03 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `user_team_status` = 1
AND `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 23:41:46 --> Query error: Not unique table/alias: 'ctc_user_team' - Invalid query: SELECT *
FROM `ctc_user_team`
JOIN `ctc_user_team` ON `ctc_user_team`.`user_team_user_id` = `ctc_team_name`.`team_name_user_id`
WHERE `team_name_user_id` = 8
AND `user_team_status` = 1
AND `ctc_user_team`.`user_team_status` = 1
ERROR - 2021-10-26 23:13:19 --> 404 Page Not Found: Ladmin/index
