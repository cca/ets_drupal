<?php

/* Provide a form to upload a CSV file */
function staff_migration_admin_upload_form($form_state) {

  $form['csv'] = array(
    '#name' => 'files[csv]',
    '#type' => 'file',
    '#title' => t('CSV file upload'),
    '#description' => t('Use this form to upload a CSV file containing updated Staff information.'),
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
    '#submit' => array('staff_migration_admin_upload_form_submit'),
  );

  return $form;
}

/* form validation */
function staff_migration_admin_upload_form_validate($form, &$form_state) {
  $file = file_save_upload('csv', array(
    'file_validate_extensions' => array('csv, CSV'), // Validate extensions.
  ), STAFF_UPLOAD_PATH, FILE_EXISTS_REPLACE);
  // If the file passed validation:
  if ($file) {
    // Save the file for use in the submit handler.
    $form_state['storage']['csv'] = $file;
  }
  else {
    form_set_error('csv', t('No file was uploaded.'));
  }
}

/* form submit */
function staff_migration_admin_upload_form_submit($form, &$form_state) {
  $file = $form_state['storage']['csv'];
  // We are done with the file, remove it from storage.
  unset($form_state['storage']['csv']);
  // rename file using file_unmanaged_move, since we're not saving it permanently
  file_unmanaged_move(STAFF_UPLOAD_PATH . $file->filename, STAFF_UPLOAD_PATH . 'staff.csv', FILE_EXISTS_REPLACE);
  // run migration
  $migration = Migration::getInstance('StaffCSV');
  $migration->prepareUpdate();
  $migration->processImport();
  // Set a response to the user.
  drupal_set_message(t('Imported file: <i>@filename</i>', array('@filename' => $file->filename)));
  return TRUE;
}
