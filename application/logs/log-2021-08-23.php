<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-23 08:59:23 --> Query error: Unknown column 'additional_add_ons_type' in 'where clause' - Invalid query: SELECT *
FROM `ctc_upload_document`
JOIN `ctc_cleaning_service` ON `ctc_cleaning_service`.`cleaning_service_id` = `ctc_upload_document`.`upload_document_cleaning_id`
WHERE `additional_add_ons_type` = 1
AND `cleaning_service_cleaner_id` IS NULL
AND `upload_document_id` = '5'
 LIMIT 1
