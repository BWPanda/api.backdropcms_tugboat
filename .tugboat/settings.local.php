<?php
// Database.
$database = 'mysql://tugboat:tugboat@mariadb/backdrop';
$database_charset = 'utf8mb4';

// Config.
$config_directories['active'] = '../config/dev-active';
$config_directories['staging'] = '../config/staging';

// Trusted hosts.
$settings['trusted_host_patterns'] = array('^.+\.tugboat\.qa$');

// Miscellaneous.
