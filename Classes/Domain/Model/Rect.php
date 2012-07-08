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
class Tx_Sfsvgapi_Domain_Model_Rect extends Tx_Sfsvgapi_Domain_Model_AbstractGeo {
	
	protected $tagName = 'rect';
	
	/**
	 * horizontal position of the upper left corner
	 * 
	 * @var integer
	 */
	protected $x;
	
	/**
	 * vertical position of the upper left corner
	 * 
	 * @var integer
	 */
	protected $y;

	/**
	 * width of the rect
	 * 
	 * @var integer
	 */
	protected $width;

	/**
	 * height of the rect
	 * 
	 * @var integer
	 */
	protected $height;

	/**
	 * horiconal width for rounded corners
	 * 
	 * @var integer
	 */
	protected $rx;

	/**
	 * vertical height for rounded corners
	 * 
	 * @var integer
	 */
	protected $ry;
	
	
	
	
	
	/**
	 * This is a shorter possibility to configure the rect with ONE Method
	 * 
	 * @param integer $x
	 * @param integer $y
	 * @param integer $width
	 * @param integer $height
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function shortInit($x, $y, $width, $height) {
		$this->setX($x);
		$this->setY($y);
		$this->setWidth($width);
		$this->setHeight($height);
		return $this;
	}
	
	/**
	 * getter for: horizontal position of the upper left corner
	 * 
	 * @return integer
	 */
	public function getX() {
		return $this->x;
	}
	
	/**
	 * setter for: horizontal position of the upper left corner
	 * 
	 * @param integer $x
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setX($x) {
		$this->attributes['x'] = $x;
		$this->x = $x;
		return $this;
	}

	/**
	 * getter for: vertical position of the upper left corner
	 * 
	 * @return integer
	 */
	public function getY() {
		return $this->y;
	}
	
	/**
	 * setter for: vertical position of the upper left corner
	 * 
	 * @param integer $y
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setY($y) {
		$this->attributes['y'] = $y;
		$this->y = $y;
		return $this;
	}

	/**
	 * getter for: width of the rect
	 * 
	 * @return integer
	 */
	public function getWidth() {
		return $this->width;
	}
	
	/**
	 * setter for: width of the rect
	 * 
	 * @param integer $width
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		$this->width = $width;
		return $this;
	}

	/**
	 * getter for: height of the rect
	 * 
	 * @return integer
	 */
	public function getHeight() {
		return $this->height;
	}
	
	/**
	 * setter for: height of the rect
	 * 
	 * @param integer $height
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		$this->height = $height;
		return $this;
	}

	/**
	 * getter for: horiconal width for rounded corners
	 * 
	 * @return integer
	 */
	public function getRx() {
		return $this->rx;
	}
	
	/**
	 * setter for: horiconal width for rounded corners
	 * 
	 * @param integer $rx
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setRx($rx) {
		$this->attributes['rx'] = $rx;
		$this->rx = $rx;
		return $this;
	}

	/**
	 * getter for: vertical position of the upper left corner
	 * 
	 * @return integer
	 */
	public function getRy() {
		return $this->ry;
	}
	
	/**
	 * setter for: vertical position of the upper left corner
	 * 
	 * @param integer $ry
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function setRy($ry) {
		$this->attributes['ry'] = $ry;
		$this->ry = $ry;
		return $this;
	}
}
?>