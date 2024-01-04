<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-27 00:00:47 --> Query error: Not unique table/alias: 'ctc_signup' - Invalid query: SELECT *
FROM `ctc_cleaning_service`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
JOIN `ctc_signup` ON `ctc_signup`.`signup_id` = `ctc_cleaning_service`.`cleaning_service_cleaner_id`
WHERE `signup_id` = 5
AND `cleaning_service_status` = 5
AND `cleaning_service_cleaner_id` > 0
AND `cleaning_service_upload_user_id` > 0
AND `cleaning_service_compelted_user_id` > 0
ORDER BY `cleaning_service_id` DESC
ERROR - 2022-01-27 01:00:52 --> Severity: Warning --> include(classes/Stripe\Stripe.class.php): failed to open stream: No such file or directory D:\XAMMP\htdocs\cleantoclose_dev\application\config\autoload.php 160
ERROR - 2022-01-27 01:00:52 --> Severity: Warning --> include(): Failed opening 'classes/Stripe\Stripe.class.php' for inclusion (include_path='D:\XAMMP\php\PEAR') D:\XAMMP\htdocs\cleantoclose_dev\application\config\autoload.php 160
ERROR - 2022-01-27 01:00:52 --> Severity: error --> Exception: Class 'Stripe\Stripe' not found D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1422
ERROR - 2022-01-27 01:01:28 --> Severity: error --> Exception: This API call cannot be made with a publishable API key. Please use a secret API key. You can find a list of your API keys at https://dashboard.stripe.com/account/apikeys. D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:02:10 --> Severity: error --> Exception: The `price` parameter should be the ID of a price object, rather than the literal numerical price. Please see https://stripe.com/docs/billing/prices-guide#create-prices for more information about how to set up price objects. D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:16:48 --> Severity: error --> Exception: No such price: '{{price_xxxxxxx}}' D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:17:52 --> Severity: error --> Exception: No such price: '{{PRICE_ID}}' D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:22:42 --> Severity: error --> Exception: No such price: '{{PRICE_ID}}' D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:23:52 --> Severity: error --> Exception: No such price: 'price_1KMI01DqJCBDaAiyyDXoODqA' D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:25:14 --> Severity: error --> Exception: In order to use Checkout, you must set an account or business name at https://dashboard.stripe.com/account. D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:57:48 --> Severity: error --> Exception: Received unknown parameter: paynebt_method_types. Did you mean payment_method_types? D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 01:58:11 --> Severity: error --> Exception: Received unknown parameter: line_items[0][price_data][unit_amout]. Did you mean unit_amount? D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 02:01:46 --> Severity: error --> Exception: Call to a member function withHeader() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1446
ERROR - 2022-01-27 02:02:26 --> Severity: error --> Exception: Call to a member function withHeader() on null D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1446
ERROR - 2022-01-27 02:08:45 --> Severity: error --> Exception: Missing required param: success_url. D:\XAMMP\htdocs\cleantoclose_dev\application\libraries\stripe-php\lib\Exception\ApiErrorException.php 38
ERROR - 2022-01-27 02:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:21:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:21:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:38:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:38:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:43:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:43:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:47:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:47:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:51:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 02:51:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 03:50:56 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1424
ERROR - 2022-01-27 03:52:34 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1424
ERROR - 2022-01-27 03:52:36 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1424
ERROR - 2022-01-27 03:56:54 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1424
ERROR - 2022-01-27 03:57:59 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1424
ERROR - 2022-01-27 04:10:14 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\views\account\info_cleaner.php 201
ERROR - 2022-01-27 04:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1531
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Invalid argument supplied for foreach() D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1483
ERROR - 2022-01-27 23:04:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:11:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_memeber' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1474
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_contact' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1475
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Illegal string offset 'team_name_email' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1476
ERROR - 2022-01-27 23:13:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\XAMMP\htdocs\cleantoclose_dev\system\core\Exceptions.php:271) D:\XAMMP\htdocs\cleantoclose_dev\system\helpers\url_helper.php 564
ERROR - 2022-01-27 19:13:55 --> Severity: error --> Exception: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' D:\XAMMP\htdocs\cleantoclose_dev\application\controllers\Account.php 1480
