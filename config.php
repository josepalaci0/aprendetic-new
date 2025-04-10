<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '10.10.2.7';
$CFG->dbname    = 'aprendetic-prod';
$CFG->dbuser    = 'aprendetic';
$CFG->dbpass    = 'pg9$tbR8Yy!n';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://ibagueaprendetic.ibague.gov.co';
$CFG->dataroot  = '/var/www/aprendetic/moodledata';
$CFG->admin     = 'admin';
$CFG->upgradekey = 'Aprendetic2024.';

$CFG->debug = E_ALL | E_STRICT;        // Debug level 1: Show ALL errors
$CFG->debugdisplay = true;            // Display errors
//$CFG->debuglog = '/path/to/your/moodle/datafolder/debug.log';  // Log errors to a file

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!