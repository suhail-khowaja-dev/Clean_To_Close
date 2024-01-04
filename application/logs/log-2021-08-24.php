<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-24 01:43:06 --> Query error: Unknown column 'ctc__additional_add_ons.additional_add_ons_id' in 'on clause' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_additional_add_ons` ON `ctc__additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
 LIMIT 1
ERROR - 2021-08-24 01:44:10 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `additional_add_ons_type` = 2
 LIMIT 1
ERROR - 2021-08-24 01:44:25 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `additional_add_ons_type` = 2
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:44:30 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:44:39 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
ERROR - 2021-08-24 01:44:47 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
 LIMIT 1
ERROR - 2021-08-24 01:47:51 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:48:18 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `cleaning_service_id` = '5'
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:48:26 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:51:28 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:51:39 --> Query error: Not unique table/alias: 'ctc_additional_add_ons' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
JOIN `ctc_additional_add_ons` ON `ctc_additional_add_ons`.`additional_add_ons_id` = `ctc_cleaning_service`.`cleaning_service_additional_kitchen`
WHERE `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 01:58:15 --> Severity: error --> Exception: Call to undefined function unserilize() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\admin\Cleaning_service.php 111
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 509
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 513
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 509
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 513
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 509
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 513
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 509
ERROR - 2021-08-24 02:04:46 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 513
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 510
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 514
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 510
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 514
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 510
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 514
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_id' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 508
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_name' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 510
ERROR - 2021-08-24 02:08:05 --> Severity: Warning --> Illegal string offset 'additional_add_ons_price' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 514
ERROR - 2021-08-24 02:17:01 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
WHERE `additional_add_ons_id` = Array
AND `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 02:18:11 --> Severity: Warning --> Illegal offset type D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 503
ERROR - 2021-08-24 02:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IN ([cleaning_service_additional_kitchen])' at line 1 - Invalid query: SELECT * FROM ctc_cleaning_service WHERE  IN ([cleaning_service_additional_kitchen])
ERROR - 2021-08-24 02:33:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IN ([cleaning_service_additional_kitchen])' at line 1 - Invalid query: SELECT * FROM ctc_cleaning_service WHERE IN ([cleaning_service_additional_kitchen])
ERROR - 2021-08-24 02:37:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ':4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:2:"10";} like  '%N;%'' at line 1 - Invalid query: SELECT * FROM ctc_cleaning_service WHERE cleaning_service_additional_kitchen =a:4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:2:"10";} like  '%N;%'
ERROR - 2021-08-24 02:49:26 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:49:26 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:49:26 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:49:26 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:49:26 --> Query error: Unknown column 'additional_add_ons_id' in 'where clause' - Invalid query: SELECT  * FROM ctc_cleaning_service WHERE  cleaning_service_additional_kitchen =1 AND additional_add_ons_id NOT IN (1,2,3,1)
ERROR - 2021-08-24 02:51:18 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:51:18 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:51:18 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 02:51:18 --> Severity: Warning --> Illegal string offset 'cleaning_service_additional_kitchen' D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 507
ERROR - 2021-08-24 00:16:32 --> Severity: error --> Exception: syntax error, unexpected '$param' (T_VARIABLE) D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\admin\Cleaning_service.php 117
ERROR - 2021-08-24 03:19:28 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
WHERE `additional_add_ons_id` = Array
AND `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 03:20:10 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
WHERE `additional_add_ons_id` = Array
AND `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 03:30:15 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *
FROM `ctc_additional_add_ons`
WHERE `additional_add_ons_id` = Array
AND `additional_add_ons_type` = 1
AND `ctc_additional_add_ons`.`additional_add_ons_status` = 1
ERROR - 2021-08-24 03:42:41 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 515
ERROR - 2021-08-24 03:55:35 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 515
ERROR - 2021-08-24 04:52:37 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting end of file D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 540
ERROR - 2021-08-24 04:52:46 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE), expecting end of file D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 540
ERROR - 2021-08-24 04:52:53 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 515
ERROR - 2021-08-24 04:53:16 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 539
ERROR - 2021-08-24 04:53:28 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 546
ERROR - 2021-08-24 04:54:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\admin\cleaning_service\detail.php 515
