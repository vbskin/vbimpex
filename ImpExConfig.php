<?php
if (!defined('IDIR')) { die; }

/*======================================================================*\
|| ####################################################################
|| # vBulletin Impex
|| # ----------------------------------------------------------------
|| # All PHP code in this file is Copyright 2000-2014 vBulletin Solutions Inc.
|| # This code is made available under the Modified BSD License -- see license.txt
|| # http://www.vbulletin.com
|| ####################################################################
\*======================================================================*/

/*
# The following settings allow ImpEx to connect to the vBulletin 3
# database into which you will be importing data.
*/

/*
###
#	Set this to some unique value.  This value will be required as a password when entering the impex system.
#	If this is left blank you will not be able to access the impex system
###
*/

$impexconfig['passcode']	= 'test';


/*
####
#
# TARGET - The target is the vBulletin database (where the  data is going to)
#
####
*/

$impexconfig['target']['server']		= 'localhost';
$impexconfig['target']['user']			= 'username';
$impexconfig['target']['password']		= 'password';
$impexconfig['target']['database']		= 'vbulletin_forum';
$impexconfig['target']['tableprefix']	= '';

/*
# If the system that is being imported from uses a database,
# enter the details for it here and set 'sourceexists' to true.
# If the source data is NOT stored in a database, set 'sourceexists' to false
*/

$impexconfig['sourceexists']			= true;

/*
####
#
# SOURCE - The source is the old forum database (where the  data is coming from)
#
####
*/

// mysql / mssql
$impexconfig['source']['databasetype']	= 'mysql';  // mysql OR mssql
$impexconfig['source']['server']		= 'localhost';
$impexconfig['source']['user']			= 'username';
$impexconfig['source']['password']		= 'password';
$impexconfig['source']['database']		= 'source';
$impexconfig['source']['tableprefix']   = '';

/*
####
#
# DUPLICATE CHECKING
# Where unique import id's are available ImpEx can check for duplicates with some
# Tier2 systems this will need to be set to false.
#
# yahoo_groups, YaBB 2.1, Ikonboard 3.1.5 (for attachments)
#
####
*/

define('dupe_checking', false);

/*
####
#
# ADVANCED - For a standard import or a novice user leave the settings below.
#
####
*/

// Advanced Target
$impexconfig['target']['databasetype']	= 'mysql';	// currently mysql only
$impexconfig['target']['charset']		= '';
$impexconfig['target']['persistent']	= false; 	// (true/false) use mysql_pconnect

// Advanced Source
$impexconfig['source']['charset']		= '';
$impexconfig['source']['persistent']	= false;

//pagespeed is the second(s) wait before the page refreshes.

$impexconfig['system']['language']		= '/impex_language.php';
$impexconfig['system']['pagespeed']		= 1;

$impexconfig['system']['errorlogging']	= false;

define('impexdebug', false);
define('emailcasesensitive', false);
define('forcesqlmode', false);
define('skipparentids', false);
define('shortoutput', false);
define('do_mysql_fetch_assoc', false);
define('step_through', false);
define('lowercase_table_names', false);
define('use_utf8_encode', false);
define('use_utf8_decode', true);

define('CUSTOMER_NUMBER', md5($impexconfig['passcode']));
