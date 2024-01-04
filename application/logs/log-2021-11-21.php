<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-21 00:38:13 --> Query error: Not unique table/alias: 'ctc_package_service' - Invalid query: SELECT *
FROM `ctc_package_service`
JOIN `ctc_package_service` ON `ctc_package_service`.`package_service_id` = `ctc_type_clean_package`.`type_clean_package_id`
WHERE `package_service_package_id` = 1
AND `ctc_package_service`.`package_service_status` = 1
ERROR - 2021-11-21 00:38:19 --> Query error: Not unique table/alias: 'ctc_package_service' - Invalid query: SELECT *
FROM `ctc_package_service`
JOIN `ctc_package_service` ON `ctc_package_service`.`package_service_id` = `ctc_type_clean_package`.`type_clean_package_id`
WHERE `ctc_package_service`.`package_service_status` = 1
