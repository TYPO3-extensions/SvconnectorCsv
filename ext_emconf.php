<?php

########################################################################
# Extension Manager/Repository config file for ext "svconnector_csv".
#
# Auto generated 23-09-2012 18:38
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Connector service - CSV',
	'description' => 'Connector service for reading a CSV or similar flat file',
	'category' => 'services',
	'author' => 'Francois Suter (Cobweb)',
	'author_email' => 'typo3@cobweb.ch',
	'shy' => '',
	'dependencies' => 'svconnector',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.7.99',
			'svconnector' => '2.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:9:"ChangeLog";s:4:"d48f";s:16:"ext_autoload.php";s:4:"1911";s:21:"ext_conf_template.txt";s:4:"1f2a";s:12:"ext_icon.gif";s:4:"559f";s:17:"ext_localconf.php";s:4:"8c7f";s:13:"locallang.xml";s:4:"81be";s:10:"README.txt";s:4:"dfb5";s:42:"Resources/Public/Samples/Configuration.txt";s:4:"8813";s:14:"doc/manual.pdf";s:4:"87db";s:14:"doc/manual.sxw";s:4:"158e";s:35:"sv1/class.tx_svconnectorcsv_sv1.php";s:4:"e650";s:17:"sv1/locallang.xml";s:4:"e842";}',
	'suggests' => array(
	),
);

?>