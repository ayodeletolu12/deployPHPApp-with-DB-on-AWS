<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mccisbdb.coni7vrobjzv.us-east-1.rds.amazonaws.com";
$username   = "mccisb";
$password   = "3nairadan";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );