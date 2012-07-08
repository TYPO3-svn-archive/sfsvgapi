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
 *
 *
 * @package sfsvgapi
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Sfsvgapi_Domain_Model_AbstractGeo {
	
	/**
	 * the name of the tag to create
	 * 
	 * @var string
	 */
	protected $tagName = '';
	
	/**
	 * the ID Attribute of the tag to create
	 * 
	 * @var string
	 */
	protected $id = '';
	
	/**
	 * the class Attribute of the tag to create
	 * 
	 * @var string
	 */
	protected $class = '';
	
	/**
	 * define some style attributes which are also available for CSS2
	 * 
	 * @var Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	protected $css;
	
	/**
	 * define some style attributes which are only valid for SVG
	 * 
	 * @var Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	protected $style;
		
	/**
	 * array containing all attributes for tag generation
	 * 
	 * @var array
	 */
	protected $attributes;
	
	
	
	
	
	/**
	 * Constructor of this class
	 */
	public function __construct() {
		$this->css = new Tx_Sfsvgapi_Domain_Attribute_Css;
		$this->css->setParentObject($this);
		$this->style = new Tx_Sfsvgapi_Domain_Attribute_Style;
		$this->style->setParentObject($this);
	}
	
	/**
	 * @return string
	 */
	public function getTagName() {
		return $this->tagName;
	}
	
	/**
	 * getter for ID attribute
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * setter for ID attribute
	 * 
	 * @param string $id
	 */
	public function setId($id) {
		$this->attributes['id'] = $id;
		$this->id = $id;
	}
	
	/**
	 * getter for class
	 *
	 * @return string
	 */
	public function getClass() {
		return $this->class;
	}
	
	/**
	 * setter for class
	 *
	 * @param string $class
	 */
	public function setClass($class) {
		$this->class = $class;
	}
	
	/**
	 * getter: define some style attributes which are also available for CSS2
	 * 
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function getCss() {
		return $this->css;
	}
	
	/**
	 * setter: define some style attributes which are also available for CSS2
	 * 
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setCss() {
		return $this->css;
	}
	
	/**
	 * getter: define some style attributes which are only valid for SVG
	 * 
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function getStyle() {
		return $this->style;
	}
	
	/**
	 * setter: define some style attributes which are only valid for SVG
	 * 
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStyle() {
		return $this->style;
	}
	
	/**
	 * getter for all attributes which are needed for tag generation
	 * 
	 * @return array Tag attributes
	 */
	public function getAttributes() {
		foreach($this->getCss()->getAttributes() as $key => $value) {
			$styleAttributes[] = $key . ': ' . $value;
		}
		foreach($this->getStyle()->getAttributes() as $key => $value) {
			$styleAttributes[] = $key . ': ' . $value;
		}
		$this->attributes['style'] = implode('; ', $styleAttributes);
		return $this->attributes;
	}	
}
?>