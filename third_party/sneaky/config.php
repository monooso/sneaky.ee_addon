<?php

/**
 * Sneaky NSM Add-on Updater information.
 *
 * @author          Stephen Lewis (http://github.com/experience/)
 * @copyright       Experience Internet
 * @package         Sneaky
 * @version         1.0.1
 */

if ( ! defined('SNEAKY_NAME'))
{
  define('SNEAKY_NAME', 'Sneaky');
  define('SNEAKY_TITLE', 'Sneaky');
  define('SNEAKY_VERSION', '1.0.1');
}

$config['name']     = SNEAKY_NAME;
$config['version']  = SNEAKY_VERSION;
$config['nsm_addon_updater']['versions_xml']
  = 'http://experienceinternet.co.uk/software/feeds/sneaky';

/* End of file      : config.php */
/* File location    : third_party/sneaky/config.php */
