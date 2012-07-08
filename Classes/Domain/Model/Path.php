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
class Tx_Sfsvgapi_Domain_Model_Path extends Tx_Sfsvgapi_Domain_Model_AbstractGeo {
	
	protected $tagName = 'path';
	
	/**
	 * path commands
	 * 
	 * @var array
	 */
	protected $d;
	
	
	
	
	
	/**
	 * getter for: path commands
	 * 
	 * @return array
	 */
	public function getD() {
		return $this->d;
	}
	
	/**
	 * setter for: path commands
	 * 
	 * @param array $d
	 * @return Tx_Sfsvgapi_Domain_Model_Path
	 */
	public function setD($d) {
		$this->attributes['d'] = $d;
		$this->d = $d;
		return $this;
	}
}
?>