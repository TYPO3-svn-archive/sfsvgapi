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
class Tx_Sfsvgapi_Lib_Svgapi {
	
	protected $width = 400;
	protected $height = 300;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage
	 */
	protected $svgContainer;
	
	/**
	 * @var Tx_Extbase_Object_ObjectManagerInterface
	 */
	protected $objectManager;
	
	/**
	 * @var Tx_Sfsvgapi_Lib_TagGenerator
	 */
	protected $tagGenerator;
	
	
	
	
	
	/**
	 * Injects the svg container
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $svgContainer
	 * @return void
	 */
	public function injectSvgContainer(Tx_Extbase_Persistence_ObjectStorage $svgContainer) {
		$this->svgContainer = $svgContainer;
	}
	
	/**
	 * Injects the object manager
	 *
	 * @param Tx_Extbase_Object_ObjectManagerInterface $objectManager
	 * @return void
	 */
	public function injectObjectManager(Tx_Extbase_Object_ObjectManagerInterface $objectManager) {
		$this->objectManager = $objectManager;
	}
	
	/**
	 * inject TagGenerator
	 *
	 * @param Tx_Sfsvgapi_Lib_TagGenerator
	 * @return void
	 */
	public function injectTagGenerator(Tx_Sfsvgapi_Lib_TagGenerator $tagGenerator) {
		$this->tagGenerator = $tagGenerator;
	}
	
	
	
	
	
	/**
	 * set the width of the svg object
	 * 
	 * @param integer $width
	 */
	public function setWidth($width) {
		$this->width = $width;
	}
	
	
	/**
	 * set the height of the svg object
	 * 
	 * @param integer $height
	 */
	public function setHeight($height) {
		$this->height = $height;
	}
	
	/**
	 * Create a rect object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Rect
	 */
	public function createRect() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Rect');
	}
	
	
	/**
	 * Create a circle object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Circle
	 */
	public function createCircle() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Circle');
	}
		
	
	/**
	 * Create a ellipse object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Ellipse
	 */
	public function createEllipse() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Ellipse');
	}
	
	
	/**
	 * Create a line object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Line
	 */
	public function createLine() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Line');
	}
	
	
	/**
	 * Create a polyline object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Polyline
	 */
	public function createPolyline() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Polyline');
	}
	
	
	/**
	 * Create a polygon object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Polygon
	 */
	public function createPolygon() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Polygon');
	}
	
	
	/**
	 * Create a path object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Path
	 */
	public function createPath() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Path');
	}
	
	
	/**
	 * Create a text object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Text
	 */
	public function createText() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Text');
	}
	
	
	/**
	 * add the created and modified rect, circle or what ever to the svg container
	 * 
	 * @param Tx_Sfsvgapi_Domain_Model_AbstractGeo $object
	 */
	public function add(Tx_Sfsvgapi_Domain_Model_AbstractGeo $object) {
		$this->svgContainer->attach($object);
	}

	
	/**
	 * get svg source code as HTML
	 * 
	 * @return string
	 */
	public function getSvg() {
		if($this->svgContainer->count()) {
			foreach($this->svgContainer as $object) {
				$html[] = $this->tagGenerator->generateTag($object);
			}
			return '
				<svg xmlns="http://www.w3.org/2000/svg" width="' . $this->width . '" height="' . $this->height . '" version="1.1">
				' . implode(CHR(10), $html) . '
				</svg>
			';
		} else return '';
	}
}
?>