<?php

########################################################################
# Extension Manager/Repository config file for ext "sfsvgapi".
#
# Auto generated 11-07-2012 23:04
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'SF SVG API',
	'description' => 'This is a SVG API. Create Rect, Text, Ellipse, circle and some more. You also can create groups, symbol and use objects. Render SVG by inline, object, iframe or embed.',
	'category' => 'plugin',
	'author' => 'Stefan Froemken',
	'author_email' => 'firma@sfroemken.de',
	'author_company' => 'Stefan Froemken',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:32:{s:12:"ext_icon.gif";s:4:"e922";s:14:"ext_tables.php";s:4:"ce51";s:14:"ext_tables.sql";s:4:"d41d";s:36:"Classes/Controller/SvgController.php";s:4:"4fa9";s:32:"Classes/Domain/Attribute/Css.php";s:4:"e0d1";s:34:"Classes/Domain/Attribute/Style.php";s:4:"62f7";s:36:"Classes/Domain/Model/AbstractTag.php";s:4:"6b37";s:31:"Classes/Domain/Model/Circle.php";s:4:"e2b5";s:32:"Classes/Domain/Model/Ellipse.php";s:4:"522d";s:30:"Classes/Domain/Model/Group.php";s:4:"7267";s:29:"Classes/Domain/Model/Line.php";s:4:"0187";s:29:"Classes/Domain/Model/Path.php";s:4:"2e71";s:32:"Classes/Domain/Model/Polygon.php";s:4:"cc3a";s:33:"Classes/Domain/Model/Polyline.php";s:4:"35ed";s:29:"Classes/Domain/Model/Rect.php";s:4:"1c1d";s:31:"Classes/Domain/Model/Symbol.php";s:4:"d9ef";s:29:"Classes/Domain/Model/Text.php";s:4:"facb";s:28:"Classes/Domain/Model/Use.php";s:4:"c72d";s:22:"Classes/Lib/Svgapi.php";s:4:"e53d";s:28:"Classes/Lib/TagGenerator.php";s:4:"c6df";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"3e94";s:38:"Configuration/TypoScript/constants.txt";s:4:"9414";s:34:"Configuration/TypoScript/setup.txt";s:4:"a67a";s:50:"Resources/Private/Backend/Templates/Svg/Sample.svg";s:4:"e250";s:49:"Resources/Private/Backend/Templates/Svg/Show.html";s:4:"bddb";s:40:"Resources/Private/Language/locallang.xml";s:4:"d89b";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"85f5";s:53:"Resources/Private/Language/locallang_sfsvgapitest.xml";s:4:"a72b";s:26:"Resources/Public/Show.html";s:4:"0110";s:27:"Resources/Public/symbol.svg";s:4:"0110";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>