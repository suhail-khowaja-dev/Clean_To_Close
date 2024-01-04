<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-13 04:11:42 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = '0'
AND `cleaning_service_cleaner_id` > 0
 LIMIT 1
ERROR - 2021-11-13 04:12:12 --> Query error: Not unique table/alias: 'ctc_cleaning_service' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '0'
AND `cleaning_service_cleaner_id` > 0
 LIMIT 1
ERROR - 2021-11-13 04:12:20 --> Query error: Not unique table/alias: 'ctc_cleaning_service' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '0'
 LIMIT 1
ERROR - 2021-11-13 04:12:30 --> Query error: Not unique table/alias: 'ctc_cleaning_service' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_cleaner_id` = `ctc_signup`.`signup_id`
WHERE `signup_id` = '0'
ERROR - 2021-11-13 04:14:43 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` =`ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 2
ERROR - 2021-11-13 04:15:06 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_id`
WHERE `signup_id` = 2
ERROR - 2021-11-13 04:15:12 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_id`
ERROR - 2021-11-13 04:15:38 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `cleaning_service_cleaner_id` > 0
ERROR - 2021-11-13 04:16:00 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `cleaning_service_cleaner_id` > 0
 LIMIT 1
ERROR - 2021-11-13 04:16:10 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_signup`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `cleaning_service_cleaner_id` > 0
 LIMIT 1
