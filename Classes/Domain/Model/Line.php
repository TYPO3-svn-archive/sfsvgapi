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
class Tx_Sfsvgapi_Domain_Model_Line extends Tx_Sfsvgapi_Domain_Model_AbstractTag {
	
	protected $tagName = 'line';
	
	/**
	 * horizontal position of the starting point
	 * 
	 * @var integer
	 */
	protected $x1;
	
	/**
	 * vertical position of the starting point
	 * 
	 * @var integer
	 */
	protected $y1;

	/**
	 * horizontal position of the ending point
	 * 
	 * @var integer
	 */
	protected $x2;

	/**
	 * vertical position of the ending point
	 * 
	 * @var integer
	 */
	protected $y2;

	
	
	
	
	/**
	 * getter for: horizontal position of the starting point
	 * 
	 * @return integer
	 */
	public function getX1() {
		return $this->x1;
	}
	
	/**
	 * setter for: horizontal position of the starting point
	 * 
	 * @param integer $x1
	 * @return Tx_Sfsvgapi_Domain_Model_Line
	 */
	public function setX1($x1) {
		$this->attributes['x1'] = $x1;
		$this->x1 = $x1;
		return $this;
	}

	/**
	 * getter for: vertical position of the starting point
	 * 
	 * @return integer
	 */
	public function getY1() {
		return $this->y1;
	}
	
	/**
	 * setter for: vertical position of the starting point
	 * 
	 * @param integer $y1
	 * @return Tx_Sfsvgapi_Domain_Model_Line
	 */
	public function setY1($y1) {
		$this->attributes['y1'] = $y1;
		$this->y1 = $y1;
		return $this;
	}

		/**
	 * getter for: horizontal position of the ending point
	 * 
	 * @return integer
	 */
	public function getX2() {
		return $this->x2;
	}
	
	/**
	 * setter for: horizontal position of the ending point
	 * 
	 * @param integer $x2
	 * @return Tx_Sfsvgapi_Domain_Model_Line
	 */
	public function setX2($x2) {
		$this->attributes['x2'] = $x2;
		$this->x2 = $x2;
		return $this;
	}

	/**
	 * getter for: vertical position of the ending point
	 * 
	 * @return integer
	 */
	public function getY2() {
		return $this->y2;
	}
	
	/**
	 * setter for: vertical position of the ending point
	 * 
	 * @param integer $y2
	 * @return Tx_Sfsvgapi_Domain_Model_Line
	 */
	public function setY2($y2) {
		$this->attributes['y2'] = $y2;
		$this->y2 = $y2;
		return $this;
	}
}
?>