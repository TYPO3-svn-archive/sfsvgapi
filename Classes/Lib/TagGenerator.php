<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Stefan Froemken <firma@sfroemken.de>, Stefan Froemken
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * @package sfsvgapi
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Sfsvgapi_Lib_TagGenerator {
	
	/**
	 * @var Tx_Extbase_Configuration_ConfigurationManagerInterface
	 */
	protected $configurationManager;
		
	/**
	 * @var tslib_cObj
	 */
	protected $contentObject;
		
	/**
	 * @param Tx_Extbase_Configuration_ConfigurationManagerInterface $configurationManager
	 * @return void
	 */
	public function injectConfigurationManager(Tx_Extbase_Configuration_ConfigurationManagerInterface $configurationManager) {
		$this->configurationManager = $configurationManager;
		$this->contentObject = $this->configurationManager->getContentObject();
		//$this->settings = $this->configurationManager->getConfiguration(Tx_Extbase_Configuration_ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);
	}
	
	/**
	 * generate the HTML Tag with help of the infomations in the given object
	 * 
	 * @param Tx_Sfsvgapi_Domain_Model_AbstractGeo
	 * @return string HTML-Tag
	 */
	public function generateTag(Tx_Sfsvgapi_Domain_Model_AbstractGeo $object) {
		if(!is_string($object->getTagName()) || $object->getTagName() == '') return '';
		
		foreach($object->getAttributes() as $key => $value) {
			$attributes[] = $key . '="' . $value . '"';
		}
		
		if(method_exists($object, 'getChild')) {
			// builds: <tag attribute="value">My own Text</tag>
			$startTag = '<|>';
			$endTag = '</|>';
			$startTag = $this->contentObject->wrap($object->getTagName() . ' ' . implode(' ', $attributes), $startTag);
			$endTag = $this->contentObject->wrap($object->getTagName(), $endTag);
			$tag = $startTag . $object->getChild() . $endTag;
		} else {
			// builds: <tag attribute="value" />
			$emptyTag = '<|/>';
			$tag = $this->contentObject->wrap($object->getTagName() . ' ' . implode(' ', $attributes) . ' ', $emptyTag);
		}
		
		return $tag;
	}
}
?>