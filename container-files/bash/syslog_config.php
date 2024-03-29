<?php
/*
 +-------------------------------------------------------------------------+
 | Copyright (C) 2007 The Cacti Group                                      |
 |                                                                         |
 | This program is free software; you can redistribute it and/or           |
 | modify it under the terms of the GNU General Public License             |
 | as published by the Free Software Foundation; either version 2          |
 | of the License, or (at your option) any later version.                  |
 |                                                                         |
 | This program is distributed in the hope that it will be useful,         |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
 | GNU General Public License for more details.                            |
 +-------------------------------------------------------------------------+
 | Cacti: The Complete RRDTool-based Graphing Solution                     |
 +-------------------------------------------------------------------------+
 | This code is designed, written, and maintained by the Cacti Group. See  |
 | about.php and/or the AUTHORS file for specific developer information.   |
 +-------------------------------------------------------------------------+
 | http://www.cacti.net/                                                   |
 +-------------------------------------------------------------------------+
*/

global $config, $database_type, $database_default, $database_hostname;
global $database_username, $database_password, $database_port;

/* revert if you dont use the Cacti database */
$use_cacti_db = false;

if (!$use_cacti_db) {
	$syslogdb_type     = 'mysql';
	$syslogdb_default  = 'syslog';
	$syslogdb_hostname = 'DB_HOST';
	$syslogdb_username = 'DB_USER';
	$syslogdb_password = 'DB_PASSWORD';
	$syslogdb_port     = DB_PORT;
}else{
	$syslogdb_type     = $database_type;
        $syslogdb_default  = $database_default;
        $syslogdb_hostname = $database_hostname;
        $syslogdb_username = $database_username;
        $syslogdb_password = $database_password;
        $syslogdb_port     = $database_port;
}

/* field in the incomming table */
$syslog_incoming_config['dateField']          = 'date';
$syslog_incoming_config['timeField']          = 'time';
$syslog_incoming_config['priorityField']      = 'priority';
$syslog_incoming_config['facilityField']      = 'facility';
$syslog_incoming_config['hostField']          = 'host';
$syslog_incoming_config['textField']          = 'message';
$syslog_incoming_config['id']                 = 'seq';

?>
