<?php
// This file declares a managed database record of type "Job".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed/
return [
  0 => [
    'name' => 'Cron:PDFbundle.Sendpdf',
    'entity' => 'Job',
    // This job requires the admin to set various params in the Scheduled Job
    // settings. Without update=never those params will be lost on system.flush.
    'update' => 'never',
    'params' => [
      'version' => 3,
      'name' => 'Create 1 bundled PDF for entire group, email to staff/volunteer contact',
      'description' => 'Sends a single large PDF to the contact specified, who will presumably print and mail it via snail mail.',
      'run_frequency' => 'Daily',
      'api_entity' => 'PDFbundle',
      'api_action' => 'Sendpdf',
      'parameters' => '',
    ],
  ],
];