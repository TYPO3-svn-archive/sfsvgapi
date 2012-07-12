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
	 * @var Tx_Extbase_Persistence_ObjectStorage
	 */
	protected $defContainer;
	
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
	 * Injects the def container
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $defContainer
	 * @return void
	 */
	public function injectDefContainer(Tx_Extbase_Persistence_ObjectStorage $defContainer) {
		$this->defContainer = $defContainer;
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
	 * @param string $width
	 */
	public function setWidth($width) {
		$this->width = $width;
	}
	
	
	/**
	 * set the height of the svg object
	 * 
	 * @param string $height
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
	 * Create a g (group) object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Group
	 */
	public function createGroup() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Group');
	}
	
	
	/**
	 * Create a symbol object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Symbol
	 */
	public function createSymbol() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Symbol');
	}
	
	
	/**
	 * Create an use object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Use
	 */
	public function createUse() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Use');
	}
	
	
	/**
	 * Create an animate object
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function createAnimate() {
		return $this->objectManager->get('Tx_Sfsvgapi_Domain_Model_Animate');
	}
	
	
	/**
	 * Add an object to the def definition
	 * This is useful for objects which should not be visible at startup
	 * In normal cases you reference them with help of the id attribute
	 * 
	 * @return Tx_Sfsvgapi_Lib_Svgapi
	 */
	public function addDef(Tx_Sfsvgapi_Domain_Model_AbstractTag $object) {
		$this->defContainer->attach($object);
		return $this;
	}
	
	
	/**
	 * add the created and modified rect, circle or what ever to the svg container
	 * 
	 * @param Tx_Sfsvgapi_Domain_Model_AbstractTag $object
	 */
	public function add(Tx_Sfsvgapi_Domain_Model_AbstractTag $object) {
		$this->svgContainer->attach($object);
	}

	
	/**
	 * get svg source code as HTML
	 * 
	 * @param string return svg as inline, object, embed or iframe. object is default
	 * @return string HTML with the rendered SVG Image
	 */
	public function getSvg($returnAs = 'object') {
		$svg = array();
		if($this->defContainer->count()) {
			$svg[] = '<defs>';
			foreach($this->defContainer as $object) {
				$svg[] = $this->tagGenerator->generateTag($object);
			}
			$svg[] = '</defs>';
		}
		if($this->svgContainer->count()) {
			foreach($this->svgContainer as $object) {
				$svg[] = $this->tagGenerator->generateTag($object);
			}
			$svg = implode(CHR(10), $svg);
			switch($returnAs) {
				case 'inline':
					$html = $this->getSvgAsInline($svg);
					break;
				case 'embed':
					$html = $this->getSvgAsEmbed($svg);
					break;
				case 'iframe':
					$html = $this->getSvgAsIframe($svg);
					break;
				case 'object':
				default:
					$html = $this->getSvgAsObject($svg);
					break;
			}
			return $html;
		} else return '';
	}
	
	
	protected function getSvgAsInline($svg) {
		if(is_string($svg) && !empty($svg)) {
			return '
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="' . $this->width . '" height="' . $this->height . '" version="1.1">
				' . implode(CHR(10), $svg) . '
				</svg>
			';
		}
	}
	
	protected function getSvgAsObject($svg) {
		if(is_string($svg) && !empty($svg)) {
			$svg = '<?xml version="1.0"?>
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="' . $this->width . '" height="' . $this->height . '">
					' . $svg . '
				</svg>
			';
		}
		return '<object data="' . $this->createRelativeFilePath($svg) . '" type="image/svg+xml"></object>';
	}
	
	protected function getSvgAsEmbed($svg) {
		if(is_string($svg) && !empty($svg)) {
			$svg = '<?xml version="1.0"?>
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="' . $this->width . '" height="' . $this->height . '">
					' . $svg . '
				</svg>
			';
		}
		return '<embed src="' . $this->createRelativeFilePath($svg) . '" type="image/svg+xml" />';
	}
	
	protected function getSvgAsIframe($svg) {
		if(is_string($svg) && !empty($svg)) {
			$svg = '<?xml version="1.0"?>
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="' . $this->width . '" height="' . $this->height . '">
					' . $svg . '
				</svg>
			';
		}
		return '<iframe src="' . $this->createRelativeFilePath($svg) . '"></iframe>';
	}
	
	protected function createRelativeFilePath($svg) {
		// create a unique filename
		$fileName = md5($svg);
		$path = PATH_site . 'typo3temp/sfsvgapi/' . $fileName . '.svg';
		// write file to typo3temp
		t3lib_div::writeFileToTypo3tempDir($path, $svg);
		// make relative filepath
		if(TYPO3_MODE === 'BE') {
			$backPath = '../';
		} else $backPath = '';
		return $backPath . str_replace(PATH_site, '', $path);
	}
}
?>