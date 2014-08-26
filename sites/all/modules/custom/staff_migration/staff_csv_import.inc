<?php
class StaffCSVMigration extends Migration {
  public function __construct() {
    parent::__construct();
    // migration description
    $this->description = t('Imprt Staff CSV File');
    // csv import file path
    $staff_csv_path = DRUPAL_ROOT . '/sites/default/files/staff_migration/staff.csv';
    // migration source
    $this->source = new MigrateSourceCSV($staff_csv_path, array(), array('header_rows' => 1));
    // migration destination
    $this->destination = new MigrateDestinationNode('staff');
    // use email as unique identifier
    $this->map = new MigrateSQLMap($this->machineName,
      array(
        'Email' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'description' => 'Staff email',
        )
      ),
      MigrateDestinationNode::getKeySchema()
    );
    // add field mappings
    $this->addFieldMapping('title', 'Title');
    // cck fields
    $this->addFieldMapping('field_profile_id', 'uid');
    // taxonomy terms
    //$this->addFieldMapping('taxonomy_vocabulary_12', 'term');
  }

  public function prepareRow($current_row) {
    $current_row->uid = staff_migration_get_user($current_row->Email, $current_row->Phone, $current_row->First, $current_row->Last);
    $current_row->term = staff_migration_get_department($current_row->Department);
  }
}
