<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-27 00:23:59 --> Query error: Table 'phase_db.mk_punter_ranking' doesn't exist - Invalid query: SELECT SQL_CALC_FOUND_ROWS punter_ranking_id, punter_ranking_year, punter_ranking_title, punter_ranking_state, punter_ranking_offers, punter_ranking_status
FROM `mk_punter_ranking`
WHERE `mk_punter_ranking`.`punter_ranking_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-03-27 00:24:49 --> Query error: Table 'phase_db.mk_punter_ranking' doesn't exist - Invalid query: SELECT SQL_CALC_FOUND_ROWS punter_ranking_id, punter_ranking_year, punter_ranking_title, punter_ranking_state, punter_ranking_offers, punter_ranking_status
FROM `mk_punter_ranking`
WHERE `mk_punter_ranking`.`punter_ranking_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-03-27 00:25:14 --> Query error: Table 'phase_db.mk_punter_ranking' doesn't exist - Invalid query: SELECT SQL_CALC_FOUND_ROWS punter_ranking_id, punter_ranking_year, punter_ranking_title, punter_ranking_state, punter_ranking_offers, punter_ranking_status
FROM `mk_punter_ranking`
WHERE `mk_punter_ranking`.`punter_ranking_status` != 2
ORDER BY 1 desc
 LIMIT 20
ERROR - 2021-03-27 01:31:27 --> Query error: Unknown column '7' in 'order clause' - Invalid query: SELECT SQL_CALC_FOUND_ROWS banner_id, banner_page, banner_heading, banner_sub_heading, banner_description, banner_status
FROM `mk_banner`
WHERE `mk_banner`.`banner_status` != 2
ORDER BY 7 asc
 LIMIT 20
ERROR - 2021-03-27 01:31:31 --> Query error: Unknown column '7' in 'order clause' - Invalid query: SELECT SQL_CALC_FOUND_ROWS banner_id, banner_page, banner_heading, banner_sub_heading, banner_description, banner_status
FROM `mk_banner`
WHERE `mk_banner`.`banner_status` != 2
ORDER BY 7 desc
 LIMIT 20
ERROR - 2021-03-27 01:31:33 --> Query error: Unknown column '7' in 'order clause' - Invalid query: SELECT SQL_CALC_FOUND_ROWS banner_id, banner_page, banner_heading, banner_sub_heading, banner_description, banner_status
FROM `mk_banner`
WHERE `mk_banner`.`banner_status` != 2
ORDER BY 7 asc
 LIMIT 20
ERROR - 2021-03-27 01:31:35 --> Query error: Unknown column '7' in 'order clause' - Invalid query: SELECT SQL_CALC_FOUND_ROWS banner_id, banner_page, banner_heading, banner_sub_heading, banner_description, banner_status
FROM `mk_banner`
WHERE `mk_banner`.`banner_status` != 2
ORDER BY 7 desc
 LIMIT 20
ERROR - 2021-03-27 01:56:10 --> Severity: error --> Exception: syntax error, unexpected end of file C:\xampp1\htdocs\phase_dev\application\views\kicker\index.php 147
ERROR - 2021-03-27 02:07:16 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = 'transfer'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:08:52 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = 'transfer'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:08:55 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = 'transfer'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:09:23 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = 'transfer'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:12:07 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = 'transfer'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:13:13 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = '2021'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:13:37 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = '2021'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:14:04 --> Query error: Unknown column 'kicker_year_detail' in 'field list' - Invalid query: SELECT kicker_year_id, kicker_year_title, kicker_year_slug, kicker_year_detail, kicker_year_image, kicker_year_image_thumb, kicker_year_image_path, kicker_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = kicker_year_id and comment_status=1) AS total_comments
FROM `mk_kicker_year`
WHERE `kicker_year_slug` = '2021'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 02:15:02 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp1\htdocs\phase_dev\application\views\kicker\detail.php 33
ERROR - 2021-03-27 02:38:18 --> Severity: Warning --> extract() expects parameter 1 to be array, string given C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 354
ERROR - 2021-03-27 02:38:26 --> Severity: Warning --> extract() expects parameter 1 to be array, string given C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 354
ERROR - 2021-03-27 02:38:50 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 287
ERROR - 2021-03-27 02:38:50 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:38:50 --> Severity: error --> Exception: Cannot use string offset as an array C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:35 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 287
ERROR - 2021-03-27 02:43:35 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:35 --> Severity: error --> Exception: Cannot use string offset as an array C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:48 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 287
ERROR - 2021-03-27 02:43:48 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:48 --> Severity: error --> Exception: Cannot use string offset as an array C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:53 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 287
ERROR - 2021-03-27 02:43:53 --> Severity: Warning --> Illegal string offset 'where' C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 02:43:53 --> Severity: error --> Exception: Cannot use string offset as an array C:\xampp1\htdocs\phase_dev\application\core\MY_Model.php 292
ERROR - 2021-03-27 03:01:34 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) C:\xampp1\htdocs\phase_dev\application\views\kicker\detail.php 68
ERROR - 2021-03-27 03:02:00 --> Severity: error --> Exception: syntax error, unexpected ')', expecting '(' C:\xampp1\htdocs\phase_dev\application\views\kicker\detail.php 57
ERROR - 2021-03-27 03:05:07 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file C:\xampp1\htdocs\phase_dev\application\views\kicker\detail.php 69
ERROR - 2021-03-27 03:30:39 --> Query error: Unknown column 'punter_year_detail' in 'field list' - Invalid query: SELECT punter_year_id, punter_year_title, punter_year_slug, punter_year_detail, punter_year_image, punter_year_image_thumb, punter_year_image_path, punter_year_createdon, (SELECT COUNT(comment_post_id) FROM mk_comment WHERE comment_post_id = punter_year_id and comment_status=1) AS total_comments
FROM `mk_punter_year`
WHERE `punter_year_slug` = 'transfer'
AND `mk_punter_year`.`punter_year_status` = 1
 LIMIT 1
ERROR - 2021-03-27 03:31:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp1\htdocs\phase_dev\application\views\punter\detail.php 43
ERROR - 2021-03-27 18:39:34 --> 404 Page Not Found: Media/index
ERROR - 2021-03-27 20:09:35 --> 404 Page Not Found: New/facekicking
ERROR - 2021-03-27 20:10:25 --> 404 Page Not Found: New/facekicking
ERROR - 2021-03-27 20:10:35 --> 404 Page Not Found: New/facekicking
