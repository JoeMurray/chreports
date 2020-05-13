<?php
return array(
  array(
    'module' => 'biz.jmaconsulting.chreports',
    'name' => 'Contribution History by Campaign (Yearly)',
    'update' => 'always',
    'entity' => 'ReportInstance',
    'params' => array(
      'version' => 3,
      'report_id' => 'contribution/pivot',
      'title' => ts('Contribution History by Contribution Page (Yearly)'),
      'name' => 'Contribution History by Campaign (Yearly)',
      "description" => "Campaign contributions year over year",
      'permission' => 'access CiviReport',
      'is_active' => 1,
      "form_values" => "a:97:{s:24:\"aggregate_column_headers\";s:30:\"contribution_total_amount_year\";s:21:\"aggregate_row_headers\";s:33:\"contribution_contribution_page_id\";s:11:\"delete_null\";s:0:\"\";s:8:\"entryURL\";s:75:\"https://test2-dms.canadahelps.org/civicrm/report/contribution/pivot?reset=1\";s:19:\"contribution_id_min\";s:0:\"\";s:19:\"contribution_id_max\";s:0:\"\";s:18:\"contribution_id_op\";s:3:\"lte\";s:21:\"contribution_id_value\";s:0:\"\";s:33:\"contribution_financial_type_id_op\";s:2:\"in\";s:36:\"contribution_financial_type_id_value\";a:0:{}s:37:\"contribution_payment_instrument_id_op\";s:2:\"in\";s:40:\"contribution_payment_instrument_id_value\";a:0:{}s:38:\"contribution_contribution_status_id_op\";s:2:\"in\";s:41:\"contribution_contribution_status_id_value\";a:1:{i:0;s:1:\"1\";}s:27:\"contribution_campaign_id_op\";s:2:\"in\";s:30:\"contribution_campaign_id_value\";a:0:{}s:22:\"contribution_source_op\";s:3:\"has\";s:25:\"contribution_source_value\";s:0:\"\";s:34:\"contribution_receive_date_relative\";s:0:\"\";s:30:\"contribution_receive_date_from\";s:0:\"\";s:35:\"contribution_receive_date_from_time\";s:0:\"\";s:28:\"contribution_receive_date_to\";s:0:\"\";s:33:\"contribution_receive_date_to_time\";s:0:\"\";s:35:\"contribution_thankyou_date_relative\";s:0:\"\";s:31:\"contribution_thankyou_date_from\";s:0:\"\";s:29:\"contribution_thankyou_date_to\";s:0:\"\";s:29:\"contribution_total_amount_min\";s:0:\"\";s:29:\"contribution_total_amount_max\";s:0:\"\";s:28:\"contribution_total_amount_op\";s:3:\"lte\";s:31:\"contribution_total_amount_value\";s:0:\"\";s:36:\"contribution_contribution_page_id_op\";s:2:\"in\";s:39:\"contribution_contribution_page_id_value\";a:0:{}s:24:\"contribution_currency_op\";s:2:\"in\";s:27:\"contribution_currency_value\";a:0:{}s:23:\"contribution_is_test_op\";s:2:\"eq\";s:26:\"contribution_is_test_value\";s:0:\"\";s:27:\"contribution_contact_id_min\";s:0:\"\";s:27:\"contribution_contact_id_max\";s:0:\"\";s:26:\"contribution_contact_id_op\";s:3:\"lte\";s:29:\"contribution_contact_id_value\";s:0:\"\";s:31:\"civicrm_contact_display_name_op\";s:3:\"has\";s:34:\"civicrm_contact_display_name_value\";s:0:\"\";s:30:\"civicrm_contact_contact_id_min\";s:0:\"\";s:30:\"civicrm_contact_contact_id_max\";s:0:\"\";s:29:\"civicrm_contact_contact_id_op\";s:3:\"lte\";s:32:\"civicrm_contact_contact_id_value\";s:0:\"\";s:28:\"civicrm_contact_sort_name_op\";s:3:\"has\";s:31:\"civicrm_contact_sort_name_value\";s:0:\"\";s:31:\"civicrm_contact_contact_type_op\";s:2:\"in\";s:34:\"civicrm_contact_contact_type_value\";a:0:{}s:35:\"civicrm_contact_contact_sub_type_op\";s:2:\"in\";s:38:\"civicrm_contact_contact_sub_type_value\";a:0:{}s:29:\"civicrm_contact_first_name_op\";s:3:\"has\";s:32:\"civicrm_contact_first_name_value\";s:0:\"\";s:28:\"civicrm_contact_last_name_op\";s:3:\"has\";s:31:\"civicrm_contact_last_name_value\";s:0:\"\";s:28:\"civicrm_contact_nick_name_op\";s:3:\"has\";s:31:\"civicrm_contact_nick_name_value\";s:0:\"\";s:28:\"civicrm_contact_gender_id_op\";s:2:\"in\";s:31:\"civicrm_contact_gender_id_value\";a:0:{}s:35:\"civicrm_contact_birth_date_relative\";s:0:\"\";s:31:\"civicrm_contact_birth_date_from\";s:0:\"\";s:29:\"civicrm_contact_birth_date_to\";s:0:\"\";s:25:\"address_street_number_min\";s:0:\"\";s:25:\"address_street_number_max\";s:0:\"\";s:24:\"address_street_number_op\";s:3:\"lte\";s:27:\"address_street_number_value\";s:0:\"\";s:25:\"address_street_address_op\";s:3:\"has\";s:28:\"address_street_address_value\";s:0:\"\";s:15:\"address_city_op\";s:3:\"has\";s:18:\"address_city_value\";s:0:\"\";s:22:\"address_postal_code_op\";s:3:\"has\";s:25:\"address_postal_code_value\";s:0:\"\";s:29:\"address_postal_code_suffix_op\";s:3:\"has\";s:32:\"address_postal_code_suffix_value\";s:0:\"\";s:20:\"address_county_id_op\";s:2:\"in\";s:23:\"address_county_id_value\";a:0:{}s:28:\"address_state_province_id_op\";s:2:\"in\";s:31:\"address_state_province_id_value\";a:0:{}s:21:\"address_country_id_op\";s:2:\"in\";s:24:\"address_country_id_value\";a:0:{}s:23:\"contact_id_filter_field\";s:26:\"civicrm_contact_contact_id\";s:24:\"number_of_rows_to_render\";s:0:\"\";s:9:\"order_bys\";a:0:{}s:11:\"description\";s:42:\"Extended Report - Contribution Pivot Chart\";s:13:\"email_subject\";s:0:\"\";s:8:\"email_to\";s:0:\"\";s:8:\"email_cc\";s:0:\"\";s:9:\"row_count\";s:0:\"\";s:9:\"view_mode\";s:4:\"view\";s:13:\"cache_minutes\";s:2:\"60\";s:10:\"permission\";s:17:\"access CiviReport\";s:9:\"parent_id\";s:0:\"\";s:8:\"radio_ts\";s:0:\"\";s:6:\"groups\";s:0:\"\";s:18:\"extended_order_bys\";a:0:{}s:11:\"instance_id\";s:1:\"4\";}",
    ),
  ),
);