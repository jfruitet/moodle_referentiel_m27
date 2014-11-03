<?php // $Id: version.php,v 1.0 2013/04/05 16:41:20 jf Exp $
/**
 * Code fragment to define the version of referentiel
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @author 
 * @version $Id: version.php,v 1.0 2013/04/05 16:41:20 jf Exp $
 * @package referentiel for Moodle 2.5
 **/


defined('MOODLE_INTERNAL') || die();

$plugin->requires = 2013110500;    // Requires this Moodle version.
$plugin->version  = 2014110300;  // The current module version (Date: YYYYMMDDXX)
$plugin->release  = 'Referentiel v 10.02 for Moodle 2.7 with scale support, block and report - Release 2014-11-03';    // User-friendly date of release
$plugin->cron     = 60; //  Period for cron to check this module (secs)
$plugin->component  = 'mod_referentiel'; // Full name of the plugin (used for diagnostics)
$plugin->maturity  = MATURITY_STABLE;
$plugin->dependencies = NULL;

