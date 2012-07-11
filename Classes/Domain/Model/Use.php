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
class Tx_Sfsvgapi_Domain_Model_Use extends Tx_Sfsvgapi_Domain_Model_AbstractTag {
	
	protected $tagName = 'use';
	
	/**
	 * horizontal position of the referenced object
	 * 
	 * @var string
	 */
	protected $x;
	
	/**
	 * vertical position of the referenced object
	 * 
	 * @var string
	 */
	protected $y;
	
	/**
	 * width
	 * 
	 * @var string
	 */
	protected $width;
	
	/**
	 * height
	 * 
	 * @var string
	 */
	protected $height;
	
	/**
	 * reference link
	 * 
	 * @var string
	 */
	protected $reference;
	
	
	
	
	
	/**
	 * getter for: horizontal position of the referenced object
	 * 
	 * @return string
	 */
	public function getX() {
		return $this->x;
	}
	
	/**
	 * setter for: horizontal position of the referenced object
	 * 
	 * @param string $x
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function setX($x) {
		$this->attributes['x'] = $x;
		$this->x = $x;
		return $this;
	}

	/**
	 * getter for: vertical position of the referenced object
	 * 
	 * @return string
	 */
	public function getY() {
		return $this->y;
	}
	
	/**
	 * setter for: vertical position of the referenced object
	 * 
	 * @param string $y
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function setY($y) {
		$this->attributes['y'] = $y;
		$this->y = $y;
		return $this;
	}
	
	/**
	 * getter for: width
	 * 
	 * @return string
	 */
	public function getWidth() {
		return $this->width;
	}
	
	/**
	 * setter for: width
	 * 
	 * @param string $width
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		$this->width = $width;
		return $this;
	}

	/**
	 * getter for: height
	 * 
	 * @return string
	 */
	public function getHeight() {
		return $this->height;
	}
	
	/**
	 * setter for: height
	 * 
	 * @param string $height
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		$this->height = $height;
		return $this;
	}
	
	/**
	 * getter for: reference link
	 * 
	 * @return string
	 */
	public function getReference() {
		return $this->reference;
	}
	
	/**
	 * setter for: reference link
	 * give it an id (#MyBlueRect) of an object you have inserted within the defs section ($this->svg->addDef()) for example
	 * 
	 * @param string $reference
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function setReference($reference) {
		$this->attributes['xlink:href'] = $reference;
		$this->reference = $reference;
		return $this;
	}
}
?>