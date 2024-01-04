<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-28 03:57:36 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:58:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 03:59:03 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 04:00:11 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 04:00:12 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 04:00:19 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 04:00:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\phase_dev\application\views\_layout\header.php 185
ERROR - 2021-05-28 21:34:46 --> Query error: Not unique table/alias: 'mk_kicker_ranking' - Invalid query: SELECT *
FROM `mk_kicker_ranking`
JOIN `mk_kicker_ranking` ON `mk_kicker_ranking`.`kicker_ranking_id` = `mk_kicker_year`.`kicker_year_id`
WHERE `kicker_ranking_prospect` = '7'
AND `mk_kicker_ranking`.`kicker_ranking_status` = 1
AND kicker_ranking_year LIKE'%1%'
ERROR - 2021-05-28 21:50:17 --> Query error: Table 'phase_db.kicker_year' doesn't exist - Invalid query: SELECT * FROM mk_kicker_ranking LEFT JOIN kicker_year ON kicker_year.kicker_year_id = kicker_ranking.kicker_ranking_year WHERE kicker_ranking_year = 1 ORDER BY kicker_ranking_prospect = 6 DESC
ERROR - 2021-05-28 21:50:24 --> Query error: Table 'phase_db.kicker_year' doesn't exist - Invalid query: SELECT * FROM mk_kicker_ranking LEFT JOIN kicker_year ON kicker_year.kicker_year_id = kicker_ranking.kicker_ranking_year WHERE kicker_ranking_year = 1 ORDER BY kicker_ranking_prospect = 5 DESC
ERROR - 2021-05-28 21:50:55 --> Query error: Table 'phase_db.mt_kicker_year' doesn't exist - Invalid query: SELECT * FROM mk_kicker_ranking LEFT JOIN mt_kicker_year ON kicker_year.kicker_year_id = mt_kicker_ranking.kicker_ranking_year WHERE kicker_ranking_year = 1 ORDER BY kicker_ranking_prospect = 5 DESC
ERROR - 2021-05-28 21:53:15 --> Query error: Table 'phase_db.mt_kicker_year' doesn't exist - Invalid query: SELECT * FROM mk_kicker_ranking INNER JOIN mt_kicker_year ON mt_kicker_year.kicker_year_id = mt_kicker_ranking.kicker_ranking_year WHERE kicker_ranking_year = 1 ORDER BY kicker_ranking_prospect = 4 DESC
ERROR - 2021-05-28 21:57:11 --> Query error: Table 'mk_kicker_year.kicker_year_id' doesn't exist - Invalid query: SELECT * FROM mk_kicker_ranking LEFT JOIN mk_kicker_year.kicker_year_id ON mk_kicker_ranking.kicker_ranking_year WHERE kicker_ranking_year = 1 ORDER BY kicker_ranking_prospect = 6 DESC
ERROR - 2021-05-28 22:05:03 --> Query error: Unknown column 'kicker_ranking_year' in 'where clause' - Invalid query: SELECT *
FROM `mk_kicker_year`
WHERE `kicker_ranking_year` = '2'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-05-28 22:05:35 --> Query error: Unknown column 'kicker_year' in 'where clause' - Invalid query: SELECT *
FROM `mk_kicker_year`
WHERE `kicker_year` = '2'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-05-28 22:06:08 --> Query error: Unknown column 'kicker_year' in 'where clause' - Invalid query: SELECT *
FROM `mk_kicker_year`
WHERE `kicker_year` = '2'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
ERROR - 2021-05-28 22:06:18 --> Query error: Unknown column 'kicker_year' in 'where clause' - Invalid query: SELECT *
FROM `mk_kicker_year`
WHERE `kicker_year` = '2'
AND `mk_kicker_year`.`kicker_year_status` = 1
 LIMIT 1
