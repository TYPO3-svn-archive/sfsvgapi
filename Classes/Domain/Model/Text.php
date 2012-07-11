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
class Tx_Sfsvgapi_Domain_Model_Text extends Tx_Sfsvgapi_Domain_Model_AbstractTag {
	
	protected $tagName = 'text';
	
	/**
	 * horizontal position of the first letter
	 * 
	 * @var string
	 */
	protected $x;
	
	/**
	 * this is the baseline of the text. The text will appear above this baseline
	 * so in most cases it should be greater than 9 
	 * 
	 * @var string
	 */
	protected $y;
	
	/**
	 * child node
	 * in this case it is plain text
	 * 
	 * @var string
	 */
	protected $child;
	
	
	
	
	
	/**
	 * This is a shorter possibility to configure the rect with ONE Method
	 * 
	 * @param string $x
	 * @param string $y
	 * @param string $child
	 * @return Tx_Sfsvgapi_Domain_Model_Text
	 */
	public function shortInit($x, $y, $child) {
		$this->setX($x);
		$this->setY($y);
		$this->setChild($child);
		return $this;
	}
	
	/**
	 * getter for: horizontal position of the upper left corner
	 * 
	 * @return 
	 */
	public function getX() {
		return $this->x;
	}
	
	/**
	 * setter for: horizontal position of the upper left corner
	 * 
	 * @param  $x
	 * @return Tx_Sfsvgapi_Domain_Model_Text
	 */
	public function setX($x) {
		$this->attributes['x'] = $x;
		$this->x = $x;
		return $this;
	}

	/**
	 * getter for: vertical position of the upper left corner
	 * 
	 * @return 
	 */
	public function getY() {
		return $this->y;
	}
	
	/**
	 * setter for: vertical position of the upper left corner
	 * 
	 * @param  $y
	 * @return Tx_Sfsvgapi_Domain_Model_Text
	 */
	public function setY($y) {
		$this->attributes['y'] = $y;
		$this->y = $y;
		return $this;
	}
	
	/**
	 * getter for: child
	 * 
	 * @return string
	 */
	public function getChild() {
		return $this->child;
	}
	
	/**
	 * setter for: child
	 * in this case it is the setter for plain text
	 * 
	 * @param string $child
	 * @return Tx_Sfsvgapi_Domain_Model_Text
	 */
	public function setChild($child) {
		$this->child = $child;
		return $this;
	}
}
?>