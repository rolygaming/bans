<?php
/**
 * =============================================================================
 * This file will setup our defs, and configure php
 * 
 * @author SteamFriends Development Team
 * @version 1.0.0
 * @copyright SourceBans (C)2007 SteamFriends.com.  All rights reserved.
 * @package SourceBans
 * @link http://www.sourcebans.net
 * 
 * @version $Id: config.php.template 190 2008-12-30 02:06:27Z peace-maker $
 * =============================================================================
 */
 
if(!defined('IN_SB')){echo 'You should not be here. Only follow links!';die();}

define('DB_HOST', '-');   			// The host/ip to your SQL server
define('DB_USER', '-');					// The username to connect with
define('DB_PASS', '-');						// The password
define('DB_NAME', '-');  			// Database name	
define('DB_PREFIX', 'sb');					// The table prefix for SourceBans
define('DB_PORT','3306');					// The SQL port (Default: 3306)

//define('DEVELOPER_MODE', true);			// Use if you want to show debugmessages
//define('SB_MEM', '128M'); 				// Override php memory limit, if isn't enough
?>
