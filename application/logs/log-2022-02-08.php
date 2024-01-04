<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-08 00:03:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 D:\XAMMP\htdocs\cleantoclose_dev\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2022-02-08 00:03:44 --> Unable to connect to the database
ERROR - 2022-02-08 04:12:53 --> Query error: Table 'ctc_db.ctc_zip_code' doesn't exist - Invalid query: SELECT *
FROM `ctc_zip_code`
WHERE `ctc_zip_code`.`zip_code_status` = 1
