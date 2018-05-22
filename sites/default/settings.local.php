<?php

/**
 * @file
 * settings.local.php
 */

$databases['default']['default'] = array(
  'database' => 'troy',
  'username' => 'root',
  'password' => 'rootpassword',
  'host' => 'localhost',
  'port' => '8889',
  'driver' => 'mysql',
  'collation' => 'utf8mb4_general_ci',
);

$settings['trusted_host_patterns'] = array(
  'troy.martin',
);
