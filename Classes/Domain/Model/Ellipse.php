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
class Tx_Sfsvgapi_Domain_Model_Ellipse extends Tx_Sfsvgapi_Domain_Model_AbstractTag {
	
	protected $tagName = 'ellipse';
	
	/**
	 * horizontal position of the middle of the ellipse
	 * 
	 * @var string
	 */
	protected $cx;
	
	/**
	 * vertical position of the middle of the ellipse
	 * 
	 * @var string
	 */
	protected $cy;

	/**
	 * width of the ellipse
	 * 
	 * @var string
	 */
	protected $rx;

	/**
	 * height of the ellipse
	 * 
	 * @var string
	 */
	protected $ry;	
	
	
	
	
	
	/**
	 * getter for: horizontal position of the middle of the ellipse
	 * 
	 * @return string
	 */
	public function getCx() {
		return $this->cx;
	}
	
	/**
	 * setter for: horizontal position of the middle of the ellipse
	 * 
	 * @param string $cx
	 * @return Tx_Sfsvgapi_Domain_Model_Ellipse
	 */
	public function setCx($cx) {
		$this->attributes['cx'] = $cx;
		$this->cx = $cx;
		return $this;
	}

	/**
	 * getter for: vertical position of the middle of the ellipse
	 * 
	 * @return string
	 */
	public function getCy() {
		return $this->cy;
	}
	
	/**
	 * setter for: vertical position of the middle of the ellipse
	 * 
	 * @param string $cy
	 * @return Tx_Sfsvgapi_Domain_Model_Ellipse
	 */
	public function setCy($cy) {
		$this->attributes['cy'] = $cy;
		$this->cy = $cy;
		return $this;
	}

	/**
	 * getter for: width of the ellipse
	 * 
	 * @return string
	 */
	public function getRx() {
		return $this->rx;
	}
	
	/**
	 * setter for: width of the ellipse
	 * 
	 * @param string $rx
	 * @return Tx_Sfsvgapi_Domain_Model_Ellipse
	 */
	public function setRx($rx) {
		$this->attributes['rx'] = $rx;
		$this->rx = $rx;
		return $this;
	}

	/**
	 * getter for: height of the ellipse
	 * 
	 * @return string
	 */
	public function getRy() {
		return $this->ry;
	}
	
	/**
	 * setter for: height of the ellipse
	 * 
	 * @param string $ry
	 * @return Tx_Sfsvgapi_Domain_Model_Ellipse
	 */
	public function setRy($ry) {
		$this->attributes['ry'] = $ry;
		$this->ry = $ry;
		return $this;
	}
}
?>