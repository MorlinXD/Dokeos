<?php
# DOKEOS version {DOKEOS_VERSION}
# File generated by /install/index.php script - Fri, 15 Dec 2023 03:37:46 +0100
/* For licensing terms, see /dokeos_license.txt */
/*
==============================================================================
		Configuration of virtual campus

This file contains a list of variables that can be modified by the campus
site administrator. Pay attention when changing these variables, some changes
can cause Dokeos to stop working.
If you changed some settings and want to restore them, please have a look at
configuration.php. That file is an exact copy of the config file at
install time.
==============================================================================
*/

/**
 * @todo change these into a $_configuration array. $_configuration will use only the bare essential variables
 * 		for configuring the platform (paths, database connections, ...). Changing a $_configuration variable
 * 		CAN break the installation.
 * 		Besides the $_configuration array there is also a $_settings array that contains variables that
 * 		can be changed and will not break the platform.
 * 		Some of the variables that are used here can move to the $_settings array (and thus be stored in the database)
 * 		example: $_configuration['tracking_enabled'] (assuming that the install script creates the necessary tables anyway.
 * 				 $phpMyAdminPath
 *
 * 		@todo use more obvious names for the variables and respect the code guidelines
 */

//============================================================================
//   MYSQL connection settings
//============================================================================
// Your MySQL server
$_configuration['db_host']								= 'localhost';
// Your MySQL username
$_configuration['db_user']								= 'root';
// Your MySQL password
$_configuration['db_password']							= '';

//============================================================================
//   Database settings
//============================================================================
// Is tracking enabled?
$_configuration['tracking_enabled'] 					= true;
// Is single database enabled (DO NOT MODIFY THIS)
$_configuration['single_database']    					= false;
// Prefix for course tables (IF NOT EMPTY, can be replaced by another prefix, else leave empty)
$_configuration['table_prefix']  						= '';
// Separator between database and table name (DO NOT MODIFY THIS)
$_configuration['db_glue'] 								= '`.`';
// prefix all created bases (for courses) with this string
$_configuration['db_prefix']       						= 'dokeos_';
// main Dokeos database
$_configuration['main_database']						= 'dokeos_main';
// stats Dokeos database
$_configuration['statistics_database']        			='dokeos_stats';
// Scorm Dokeos database
$_configuration['scorm_database']       				='dokeos_scorm';
// User Personal Database (where all the personal stuff of the user is stored
// (personal agenda items, course sorting)
$_configuration['user_personal_database']   			='dokeos_user';

//============================================================================
//   Directory settings
//============================================================================

// URL to the root of your Dokeos installation, example: http://www.mydokeos.com/
$_configuration['root_web'] 							= 'http://localhost/dokeos/';

// Path to the webroot of system, example: /var/www/
$_configuration['root_sys'] 							= 'C:/xampp1/htdocs/dokeos/';

// Path from your WWW-root to the root of your Dokeos installation, example: dokeos (this means dokeos is installed in /var/www/dokeos/
$_configuration['url_append'] 							= '/dokeos';

// Directory of the Dokeos code. You could change this but it is not advised since this has not been tested yet.
$_configuration['code_append']    						= "main/";

// Directory to store all course-related files. You could change this but it is not advised since this has not been tested yet.
$_configuration['course_folder'] 						= "courses/";




// @todo this shouldn't be here.
// Directory of the admin-area
$rootAdminAppend             							= "admin/";

// Do not change the following values
// @todo should be moved to api_get_path
$clarolineRepositorySys      							= $_configuration['root_sys'].$_configuration['code_append'];
$clarolineRepositoryWeb      							= $_configuration['root_web'].$_configuration['code_append'];
$rootAdminSys                							= $clarolineRepositorySys.$rootAdminAppend;
$rootAdminWeb                							= $clarolineRepositoryWeb.$rootAdminAppend;
// directory to store archived courses
$archiveDirName              							= "archive";
// URL to your phpMyAdmin installation.
// If not empty, a link will be available in the Platform Administration
$phpMyAdminPath              							= '';

//============================================================================
//   Login modules settings
//============================================================================
// For new login module
// Uncomment these lines to activate ldap
// $extAuthSource["ldap"]["login"]						= $_configuration['root_sys'].$_configuration['code_append']."auth/ldap/login.php";
// $extAuthSource["ldap"]["newUser"]					= $_configuration['root_sys'].$_configuration['code_append']."auth/ldap/newUser.php";

//============================================================================
//   Misc. settings
//============================================================================
// Verbose backup
$_configuration['verbose_backup']						= false;
// security word for password recovery
$_configuration['security_key']      					= '74979946f9f5801b43fef0e837608478';
// Hash function method
$userPasswordCrypted          							= 'md5';
// You may have to restart your web server if you change this
$storeSessionInDb             							= false;
// Session lifetime
$_configuration['session_lifetime']						= 360000;
// Activation for multi-url access
//$_configuration['multiple_access_urls']					= true;


// Version settings
$_configuration['dokeos_version'] 	= '2.1';
$_configuration['dokeos_stable'] 	= true;
$_configuration['dokeos_package'] 	= '{free}';
?>
