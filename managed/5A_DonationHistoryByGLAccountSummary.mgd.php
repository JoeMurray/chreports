<?php
return array(
  array(
    'module' => 'biz.jmaconsulting.chreports',
    'name' => 'Contribution History by GL Account (Summary)',
    'update' => 'never',
    'entity' => 'ReportInstance',
    'params' => array(
      'version' => 3,
      'report_id' => 'biz.jmaconsulting.chreports/glsummaryreport',
      'title' => ts('Contribution History by GL Account (Summary)'),
      'name' => 'Contribution History by GL Account (Summary)',
      "description" => "Overview of contributions by GL Accounts",
      'permission' => 'access CiviReport',
      'is_active' => 1,
      "form_values" => "a:35:{s:8:\"entryURL\";s:100:\"https://test2-dms.canadahelps.org/civicrm/report/biz.jmaconsulting.chreports/glsummaryreport?reset=1\";s:6:\"fields\";a:3:{s:10:\"gl_account\";s:1:\"1\";s:15:\"gl_account_code\";s:1:\"1\";s:9:\"gl_amount\";s:1:\"1\";}s:6:\"id_min\";s:0:\"\";s:6:\"id_max\";s:0:\"\";s:5:\"id_op\";s:3:\"lte\";s:8:\"id_value\";s:0:\"\";s:19:\"contribution_id_min\";s:0:\"\";s:19:\"contribution_id_max\";s:0:\"\";s:18:\"contribution_id_op\";s:2:\"eq\";s:21:\"contribution_id_value\";s:0:\"\";s:21:\"receive_date_relative\";s:0:\"\";s:17:\"receive_date_from\";s:0:\"\";s:15:\"receive_date_to\";s:0:\"\";s:25:\"contribution_status_id_op\";s:2:\"in\";s:28:\"contribution_status_id_value\";a:1:{i:0;s:1:\"1\";}s:13:\"gl_account_op\";s:2:\"in\";s:16:\"gl_account_value\";a:0:{}s:20:\"financial_type_id_op\";s:2:\"in\";s:23:\"financial_type_id_value\";a:0:{}s:24:\"payment_instrument_id_op\";s:2:\"in\";s:27:\"payment_instrument_id_value\";a:0:{}s:9:\"group_bys\";a:1:{s:10:\"gl_account\";s:1:\"1\";}s:9:\"order_bys\";a:1:{i:1;a:1:{s:6:\"column\";s:1:\"-\";}}s:11:\"description\";s:69:\"Overview of contributions by GL Account (biz.jmaconsulting.chreports)\";s:13:\"email_subject\";s:0:\"\";s:8:\"email_to\";s:0:\"\";s:8:\"email_cc\";s:0:\"\";s:9:\"row_count\";s:0:\"\";s:9:\"view_mode\";s:4:\"view\";s:13:\"cache_minutes\";s:2:\"60\";s:10:\"permission\";s:17:\"access CiviReport\";s:9:\"parent_id\";s:0:\"\";s:8:\"radio_ts\";s:0:\"\";s:6:\"groups\";s:0:\"\";s:11:\"instance_id\";N;}",
    ),
  ),
);
