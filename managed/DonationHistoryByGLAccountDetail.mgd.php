<?php
return array(
  array(
    'module' => 'biz.jmaconsulting.chreports',
    'name' => 'Contribution History by GL Account (Detailed)',
    'update' => 'never',
    'entity' => 'ReportInstance',
    'params' => array(
      'version' => 3,
      'report_id' => 'contribute/bookkeeping',
      'title' => ts('Contribution History by GL Account (Detailed)'),
      'name' => 'Contribution History by GL Account (Detailed)',
      "description" => "In depth view of contributions by GL Account",
      'permission' => 'administer Reports',
      'is_active' => 1,
      "form_values" => "a:119:{s:8:\"entryURL\";s:100:\"https://test2-dms.canadahelps.org/civicrm/report/biz.jmaconsulting.chreports/glaccountdetail?reset=1\";s:6:\"fields\";a:9:{s:9:\"sort_name\";s:1:\"1\";s:10:\"exposed_id\";s:1:\"1\";s:17:\"financial_account\";s:1:\"1\";s:12:\"receive_date\";s:1:\"1\";s:12:\"check_number\";s:1:\"1\";s:21:\"payment_instrument_id\";s:1:\"1\";s:9:\"trxn_date\";s:1:\"1\";s:7:\"trxn_id\";s:1:\"1\";s:6:\"amount\";s:1:\"1\";}s:12:\"sort_name_op\";s:3:\"has\";s:15:\"sort_name_value\";s:0:\"\";s:6:\"id_min\";s:0:\"\";s:6:\"id_max\";s:0:\"\";s:5:\"id_op\";s:3:\"lte\";s:8:\"id_value\";s:0:\"\";s:12:\"gender_id_op\";s:2:\"in\";s:15:\"gender_id_value\";a:0:{}s:19:\"birth_date_relative\";s:0:\"\";s:15:\"birth_date_from\";s:0:\"\";s:13:\"birth_date_to\";s:0:\"\";s:15:\"contact_type_op\";s:2:\"in\";s:18:\"contact_type_value\";a:0:{}s:19:\"contact_sub_type_op\";s:2:\"in\";s:22:\"contact_sub_type_value\";a:0:{}s:24:\"debit_accounting_code_op\";s:2:\"in\";s:27:\"debit_accounting_code_value\";a:0:{}s:19:\"debit_contact_id_op\";s:2:\"eq\";s:22:\"debit_contact_id_value\";s:0:\"\";s:25:\"credit_accounting_code_op\";s:2:\"in\";s:28:\"credit_accounting_code_value\";a:0:{}s:20:\"credit_contact_id_op\";s:2:\"eq\";s:23:\"credit_contact_id_value\";s:0:\"\";s:13:\"debit_name_op\";s:2:\"in\";s:16:\"debit_name_value\";a:0:{}s:14:\"credit_name_op\";s:2:\"in\";s:17:\"credit_name_value\";a:0:{}s:20:\"financial_type_id_op\";s:2:\"in\";s:23:\"financial_type_id_value\";a:0:{}s:19:\"contribution_id_min\";s:0:\"\";s:19:\"contribution_id_max\";s:0:\"\";s:18:\"contribution_id_op\";s:3:\"lte\";s:21:\"contribution_id_value\";s:0:\"\";s:21:\"receive_date_relative\";s:0:\"\";s:17:\"receive_date_from\";s:0:\"\";s:15:\"receive_date_to\";s:0:\"\";s:22:\"contribution_source_op\";s:3:\"has\";s:25:\"contribution_source_value\";s:0:\"\";s:25:\"contribution_status_id_op\";s:2:\"in\";s:28:\"contribution_status_id_value\";a:1:{i:0;s:1:\"1\";}s:24:\"payment_instrument_id_op\";s:2:\"in\";s:27:\"payment_instrument_id_value\";a:0:{}s:11:\"currency_op\";s:2:\"in\";s:14:\"currency_value\";a:0:{}s:18:\"trxn_date_relative\";s:0:\"\";s:14:\"trxn_date_from\";s:0:\"\";s:12:\"trxn_date_to\";s:0:\"\";s:12:\"status_id_op\";s:2:\"in\";s:15:\"status_id_value\";a:1:{i:0;s:1:\"1\";}s:15:\"card_type_id_op\";s:2:\"in\";s:18:\"card_type_id_value\";a:0:{}s:10:\"amount_min\";s:0:\"\";s:10:\"amount_max\";s:0:\"\";s:9:\"amount_op\";s:3:\"lte\";s:12:\"amount_value\";s:0:\"\";s:8:\"tagid_op\";s:2:\"in\";s:11:\"tagid_value\";a:0:{}s:6:\"gid_op\";s:2:\"in\";s:9:\"gid_value\";a:0:{}s:12:\"custom_13_op\";s:2:\"in\";s:15:\"custom_13_value\";a:0:{}s:12:\"custom_25_op\";s:2:\"in\";s:15:\"custom_25_value\";a:0:{}s:18:\"custom_26_relative\";s:0:\"\";s:14:\"custom_26_from\";s:0:\"\";s:12:\"custom_26_to\";s:0:\"\";s:13:\"custom_14_min\";s:0:\"\";s:13:\"custom_14_max\";s:0:\"\";s:12:\"custom_14_op\";s:3:\"lte\";s:15:\"custom_14_value\";s:0:\"\";s:13:\"custom_15_min\";s:0:\"\";s:13:\"custom_15_max\";s:0:\"\";s:12:\"custom_15_op\";s:3:\"lte\";s:15:\"custom_15_value\";s:0:\"\";s:18:\"custom_16_relative\";s:0:\"\";s:14:\"custom_16_from\";s:0:\"\";s:12:\"custom_16_to\";s:0:\"\";s:18:\"custom_17_relative\";s:0:\"\";s:14:\"custom_17_from\";s:0:\"\";s:12:\"custom_17_to\";s:0:\"\";s:13:\"custom_18_min\";s:0:\"\";s:13:\"custom_18_max\";s:0:\"\";s:12:\"custom_18_op\";s:3:\"lte\";s:15:\"custom_18_value\";s:0:\"\";s:13:\"custom_19_min\";s:0:\"\";s:13:\"custom_19_max\";s:0:\"\";s:12:\"custom_19_op\";s:3:\"lte\";s:15:\"custom_19_value\";s:0:\"\";s:12:\"custom_36_op\";s:3:\"has\";s:15:\"custom_36_value\";s:0:\"\";s:12:\"custom_37_op\";s:3:\"has\";s:15:\"custom_37_value\";s:0:\"\";s:13:\"custom_38_min\";s:0:\"\";s:13:\"custom_38_max\";s:0:\"\";s:12:\"custom_38_op\";s:3:\"lte\";s:15:\"custom_38_value\";s:0:\"\";s:12:\"custom_32_op\";s:2:\"eq\";s:15:\"custom_32_value\";s:0:\"\";s:12:\"custom_33_op\";s:2:\"eq\";s:15:\"custom_33_value\";s:0:\"\";s:12:\"custom_34_op\";s:3:\"has\";s:15:\"custom_34_value\";s:0:\"\";s:12:\"custom_35_op\";s:3:\"has\";s:15:\"custom_35_value\";s:0:\"\";s:9:\"order_bys\";a:1:{i:1;a:2:{s:6:\"column\";s:9:\"sort_name\";s:5:\"order\";s:3:\"ASC\";}}s:11:\"description\";s:44:\"In depth view of contributions by GL Account\";s:13:\"email_subject\";s:0:\"\";s:8:\"email_to\";s:0:\"\";s:8:\"email_cc\";s:0:\"\";s:9:\"row_count\";s:0:\"\";s:9:\"view_mode\";s:4:\"view\";s:13:\"cache_minutes\";s:2:\"60\";s:10:\"permission\";s:18:\"administer Reports\";s:9:\"parent_id\";s:0:\"\";s:8:\"radio_ts\";s:0:\"\";s:6:\"groups\";s:0:\"\";s:11:\"instance_id\";N;}",
      'is_reserved' =>  0,
    ),
  ),
);
