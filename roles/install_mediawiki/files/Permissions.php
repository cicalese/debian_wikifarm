<?php

$wgGroupPermissions['*']['read'] = true;
$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['*']['createaccount'] = false;

$wgGroupPermissions['confirmed' ]['read'] = true;
$wgGroupPermissions['confirmed' ]['edit'] = true;
$wgGroupPermissions['confirmed' ]['createpage'] = true;
$wgGroupPermissions['confirmed' ]['createtalk'] = true;
$wgGroupPermissions['confirmed' ]['move'] = true;
$wgGroupPermissions['confirmed' ]['upload'] = true;
$wgGroupPermissions['confirmed' ]['reupload'] = true;
$wgGroupPermissions['confirmed' ]['reupload-shared'] = true;
$wgGroupPermissions['confirmed' ]['minoredit'] = true;
$wgGroupPermissions['confirmed' ]['purge'] = true;

$wgGroupPermissions['sysop']['editinterface']  = true;

$wgGroupPermissions['*']['viewedittab']=false;
$wgGroupPermissions['sysop']['viewedittab']=true;
