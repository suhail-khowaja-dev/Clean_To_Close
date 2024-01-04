<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-26 02:02:15 --> Query error: Unknown column 'prospect_image_path' in 'field list' - Invalid query: SELECT SQL_CALC_FOUND_ROWS prospect_id, prospect_title, CONCAT(prospect_image_path, prospect_image) AS prospect_image, prospect_status
FROM `mk_prospect`
WHERE `mk_prospect`.`prospect_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-05-26 02:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\kicker\detail.php 29
ERROR - 2021-05-26 02:16:01 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\punter\detail.php 25
ERROR - 2021-05-26 04:08:12 --> Severity: error --> Exception: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 186
