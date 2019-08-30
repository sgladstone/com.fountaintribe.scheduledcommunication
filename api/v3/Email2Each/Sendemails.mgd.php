<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed/
return [
  0 => [
    'name' => 'Cron:Email2Each.Sendemails',
    'entity' => 'Job',
    // This job requires the admin to set various params in the Scheduled Job
    // settings. Without update=never those params will be lost on system.flush.
    'update' => 'never',
    'params' => [
      'version' => 3,
      'name' => 'Call Email2Each.Sendemails API',
      'description' => 'Sends an email to each contact in the group',
      'run_frequency' => 'Daily',
      'api_entity' => 'Email2Each',
      'api_action' => 'Sendemails',
      'parameters' => '',
    ],
  ],
];
