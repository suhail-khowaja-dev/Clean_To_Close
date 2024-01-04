<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-05 00:42:29 --> Severity: Warning --> require_once(G:\xampp\htdocs\cleantoclose_dev\application\views\information_page/lib/Config.php): failed to open stream: No such file or directory G:\xampp\htdocs\cleantoclose_dev\application\views\information_page\index.php 4
ERROR - 2022-02-05 00:42:29 --> Severity: Compile Error --> require_once(): Failed opening required 'G:\xampp\htdocs\cleantoclose_dev\application\views\information_page/lib/Config.php' (include_path='G:\xampp\php\PEAR') G:\xampp\htdocs\cleantoclose_dev\application\views\information_page\index.php 4
ERROR - 2022-02-05 00:42:31 --> Severity: Warning --> require_once(G:\xampp\htdocs\cleantoclose_dev\application\views\information_page/lib/Config.php): failed to open stream: No such file or directory G:\xampp\htdocs\cleantoclose_dev\application\views\information_page\index.php 4
ERROR - 2022-02-05 00:42:31 --> Severity: Compile Error --> require_once(): Failed opening required 'G:\xampp\htdocs\cleantoclose_dev\application\views\information_page/lib/Config.php' (include_path='G:\xampp\php\PEAR') G:\xampp\htdocs\cleantoclose_dev\application\views\information_page\index.php 4
ERROR - 2022-02-05 01:13:27 --> Severity: error --> Exception: Must provide source or customer. G:\xampp\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-02-05 01:44:41 --> Query error: Table 'ctc_db.ctc_zip_code' doesn't exist - Invalid query: SELECT *
FROM `ctc_zip_code`
WHERE `ctc_zip_code`.`zip_code_status` = 1
ERROR - 2022-02-05 01:45:27 --> Query error: Table 'ctc_db.ctc_zip_code' doesn't exist - Invalid query: SELECT *
FROM `ctc_zip_code`
WHERE `ctc_zip_code`.`zip_code_status` = 1
ERROR - 2022-02-05 01:45:27 --> Query error: Table 'ctc_db.ctc_zip_code' doesn't exist - Invalid query: SELECT *
FROM `ctc_zip_code`
WHERE `ctc_zip_code`.`zip_code_status` = 1
ERROR - 2022-02-05 01:46:29 --> Query error: Table 'ctc_db.ctc_zip_code' doesn't exist - Invalid query: SELECT SQL_CALC_FOUND_ROWS zip_code_id, zip_code_number, zip_code_status
FROM `ctc_zip_code`
WHERE `ctc_zip_code`.`zip_code_status` != 2
ORDER BY 1 desc
 LIMIT 20
