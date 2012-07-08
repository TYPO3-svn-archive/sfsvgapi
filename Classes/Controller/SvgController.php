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
class Tx_Sfsvgapi_Controller_SvgController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_Sfsvgapi_Lib_Svgapi
	 */
	protected $svg;
	
	/**
	 * inject Svgapi
	 *
	 * @param Tx_Sfsvgapi_Lib_Svgapi $svg
	 * @return void
	 */
	public function injectSvgApi(Tx_Sfsvgapi_Lib_Svgapi $svg) {
		$this->svg = $svg;
	}
	
	
	/**
	 * Show some results of the svg api
	 *
	 * @return void
	 */
	public function showAction() {
		// initialize SVG
		$this->svg->setHeight(300);
		$this->svg->setWidth(400);
		
		$circle1 = $this->svg->createCircle()
			->setCx(100)
			->setCy(50)
			->setR(20)
			->setStyle()
				->setFill('#FF0000')
				->setOpacity('0.3')
				->end()
			->setCss()
				->setVisibility('visible')
				->end();
		$this->svg->add($circle1);
		
		$text = $this->svg->createText()
			->setX(10)
			->setY(40)
			->setChild('Hello everybody')
			->setCss()
				->setFontFamily('Arial')
				->setFontSize('12')
				->end();
		$this->svg->add($text);
		
		// get svg code and assign it to a fluid var
		$this->view->assign('svg', $this->svg->getSvg());
	}
}
?>