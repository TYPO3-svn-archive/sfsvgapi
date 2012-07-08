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
 *
 */
class Tx_Sfsvgapi_Domain_Attribute_Css {
	
	protected $attributeName = 'style';
	
	/**
	 * css for font
	 * 
	 * @var string
	 */
	protected $font;
	
	/**
	 * css for fontFamily
	 * 
	 * @var string
	 */
	protected $fontFamily;
	
	/**
	 * css for fontSize
	 * 
	 * @var string
	 */
	protected $fontSize;
	
	/**
	 * css for fontSizeAdjust
	 * 
	 * @var string
	 */
	protected $fontSizeAdjust;
	
	/**
	 * css for fontStretch
	 * 
	 * @var string
	 */
	protected $fontStretch;
	
	/**
	 * css for fontStyle
	 * 
	 * @var string
	 */
	protected $fontStyle;
	
	/**
	 * css for fontVariant
	 * 
	 * @var string
	 */
	protected $fontVariant;
	
	/**
	 * css for fontWeight
	 * 
	 * @var string
	 */
	protected $fontWeight;
	
	/**
	 * css for direction
	 * 
	 * @var string
	 */
	protected $direction;
	
	/**
	 * css for letterSpacing
	 * 
	 * @var string
	 */
	protected $letterSpacing;
	
	/**
	 * css for textDecoration
	 * 
	 * @var string
	 */
	protected $textDecoration;
	
	/**
	 * css for unicodeBidi
	 * 
	 * @var string
	 */
	protected $unicodeBidi;
	
	/**
	 * css for wordSpacing
	 * 
	 * @var string
	 */
	protected $wordSpacing;
	
	/**
	 * css for clip
	 * 
	 * @var string
	 */
	protected $clip;
	
	/**
	 * css for color
	 * 
	 * @var string
	 */
	protected $color;
	
	/**
	 * css for cursor
	 * 
	 * @var string
	 */
	protected $cursor;
	
	/**
	 * css for display
	 * 
	 * @var string
	 */
	protected $display;
	
	/**
	 * css for overflow
	 * 
	 * @var string
	 */
	protected $overflow;
	
	/**
	 * css for visibility
	 * 
	 * @var string
	 */
	protected $visibility;
	
	/**
	 * parentObject
	 * 
	 * @var Tx_Sfsvgapi_Domain_Model_AbstractGeo
	 */
	protected $parentObject;
	
	/**
	 * array containing all attributes for tag generation
	 * 
	 * @var array
	 */
	protected $attributes;
	
	
	
	
	
	/**
	 * getter for font
	 *
	 * @return string
	 */
	public function getFont() {
		return $this->font;
	}
	
	/**
	 * setter for font
	 *
	 * @param string $font
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFont($font) {
		$this->attributes['font'] = $font;
		$this->font = $font;
		return $this;
	}
	
	/**
	 * getter for fontFamily
	 *
	 * @return string
	 */
	public function getFontFamily() {
		return $this->fontFamily;
	}
	
	/**
	 * setter for fontFamily
	 *
	 * @param string $fontFamily
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontFamily($fontFamily) {
		$this->attributes['font-family'] = $fontFamily;
		$this->fontFamily = $fontFamily;
		return $this;
	}
	
	/**
	 * getter for fontSize
	 *
	 * @return string
	 */
	public function getFontSize() {
		return $this->fontSize;
	}
	
	/**
	 * setter for fontSize
	 *
	 * @param string $fontSize
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontSize($fontSize) {
		$this->attributes['font-size'] = $fontSize;
		$this->fontSize = $fontSize;
		return $this;
	}
	
	/**
	 * getter for fontSizeAdjust
	 *
	 * @return string
	 */
	public function getFontSizeAdjust() {
		return $this->fontSizeAdjust;
	}
	
	/**
	 * setter for fontSizeAdjust
	 *
	 * @param string $fontSizeAdjust
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontSizeAdjust($fontSizeAdjust) {
		$this->attributes['font-size-adjust'] = $fontSizeAdjust;
		$this->fontSizeAdjust = $fontSizeAdjust;
		return $this;
	}
	
	/**
	 * getter for fontStretch
	 *
	 * @return string
	 */
	public function getFontStretch() {
		return $this->fontStretch;
	}
	
	/**
	 * setter for fontStretch
	 *
	 * @param string $fontStretch
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontStretch($fontStretch) {
		$this->attributes['font-stretch'] = $fontStretch;
		$this->fontStretch = $fontStretch;
		return $this;
	}
	
	/**
	 * getter for fontStyle
	 *
	 * @return string
	 */
	public function getFontStyle() {
		return $this->fontStyle;
	}
	
	/**
	 * setter for fontStyle
	 *
	 * @param string $fontStyle
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontStyle($fontStyle) {
		$this->attributes['font-style'] = $fontStyle;
		$this->fontStyle = $fontStyle;
		return $this;
	}
	
	/**
	 * getter for fontVariant
	 *
	 * @return string
	 */
	public function getFontVariant() {
		return $this->fontVariant;
	}
	
	/**
	 * setter for fontVariant
	 *
	 * @param string $fontVariant
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontVariant($fontVariant) {
		$this->attributes['font-variant'] = $fontVariant;
		$this->fontVariant = $fontVariant;
		return $this;
	}
	
	/**
	 * getter for fontWeight
	 *
	 * @return string
	 */
	public function getFontWeight() {
		return $this->fontWeight;
	}
	
	/**
	 * setter for fontWeight
	 *
	 * @param string $fontWeight
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setFontWeight($fontWeight) {
		$this->attributes['font-weight'] = $fontWeight;
		$this->fontWeight = $fontWeight;
		return $this;
	}
	
	/**
	 * getter for direction
	 *
	 * @return string
	 */
	public function getDirection() {
		return $this->direction;
	}
	
	/**
	 * setter for direction
	 *
	 * @param string $direction
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setDirection($direction) {
		$this->attributes['direction'] = $direction;
		$this->direction = $direction;
		return $this;
	}
	
	/**
	 * getter for letterSpacing
	 *
	 * @return string
	 */
	public function getLetterSpacing() {
		return $this->letterSpacing;
	}
	
	/**
	 * setter for letterSpacing
	 *
	 * @param string $letterSpacing
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setLetterSpacing($letterSpacing) {
		$this->attributes['letter-spacing'] = $letterSpacing;
		$this->letterSpacing = $letterSpacing;
		return $this;
	}
	
	/**
	 * getter for textDecoration
	 *
	 * @return string
	 */
	public function getTextDecoration() {
		return $this->textDecoration;
	}
	
	/**
	 * setter for textDecoration
	 *
	 * @param string $textDecoration
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setTextDecoration($textDecoration) {
		$this->attributes['text-decoration'] = $textDecoration;
		$this->textDecoration = $textDecoration;
		return $this;
	}
	
	/**
	 * getter for unicodeBidi
	 *
	 * @return string
	 */
	public function getUnicodeBidi() {
		return $this->unicodeBidi;
	}
	
	/**
	 * setter for unicodeBidi
	 *
	 * @param string $unicodeBidi
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setUnicodeBidi($unicodeBidi) {
		$this->attributes['unicode-bidi'] = $unicodeBidi;
		$this->unicodeBidi = $unicodeBidi;
		return $this;
	}
	
	/**
	 * getter for wordSpacing
	 *
	 * @return string
	 */
	public function getWordSpacing() {
		return $this->wordSpacing;
	}
	
	/**
	 * setter for wordSpacing
	 *
	 * @param string $wordSpacing
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setWordSpacing($wordSpacing) {
		$this->attributes['word-spacing'] = $wordSpacing;
		$this->wordSpacing = $wordSpacing;
		return $this;
	}
	
	/**
	 * getter for clip
	 *
	 * @return string
	 */
	public function getClip() {
		return $this->clip;
	}
	
	/**
	 * setter for clip
	 *
	 * @param string $clip
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setClip($clip) {
		$this->attributes['clip'] = $clip;
		$this->clip = $clip;
		return $this;
	}
	
	/**
	 * getter for color
	 *
	 * @return string
	 */
	public function getColor() {
		return $this->color;
	}
	
	/**
	 * setter for color
	 *
	 * @param string $color
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setColor($color) {
		$this->attributes['color'] = $color;
		$this->color = $color;
		return $this;
	}
	
	/**
	 * getter for cursor
	 *
	 * @return string
	 */
	public function getCursor() {
		return $this->cursor;
	}
	
	/**
	 * setter for cursor
	 *
	 * @param string $cursor
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setCursor($cursor) {
		$this->attributes['cursor'] = $cursor;
		$this->cursor = $cursor;
		return $this;
	}
	
	/**
	 * getter for display
	 *
	 * @return string
	 */
	public function getDisplay() {
		return $this->display;
	}
	
	/**
	 * setter for display
	 *
	 * @param string $display
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setDisplay($display) {
		$this->attributes['display'] = $display;
		$this->display = $display;
		return $this;
	}
	
	/**
	 * getter for overflow
	 *
	 * @return string
	 */
	public function getOverflow() {
		return $this->overflow;
	}
	
	/**
	 * setter for overflow
	 *
	 * @param string $overflow
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setOverflow($overflow) {
		$this->attributes['overflow'] = $overflow;
		$this->overflow = $overflow;
		return $this;
	}
	
	/**
	 * getter for visibility
	 *
	 * @return string
	 */
	public function getVisibility() {
		return $this->visibility;
	}
	
	/**
	 * setter for visibility
	 *
	 * @param string $visibility
	 * @return Tx_Sfsvgapi_Domain_Attribute_Css
	 */
	public function setVisibility($visibility) {
		$this->attributes['visibility'] = $visibility;
		$this->visibility = $visibility;
		return $this;
	}
	
	/**
	 * getter for all attributes which are needed for tag generation
	 * 
	 * @return array Tag attributes
	 */
	public function getAttributes() {
		return $this->attributes;
	}	

	/**
	 * setter for parentObject
	 * this is useful to quit editing this object
	 * 
	 * @param $parentObject
	 */
	public function setParentObject(Tx_Sfsvgapi_Domain_Model_AbstractGeo $parentObject) {
		$this->parentObject = $parentObject;
	}
	
	/**
	 * As in jQuery this method exits editing of this object and return the parent one
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_AbstractGeo
	 */
	public function end() {
		return $this->parentObject;
	}
}
?>