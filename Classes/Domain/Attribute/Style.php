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
class Tx_Sfsvgapi_Domain_Attribute_Style {
	
	protected $attributeName = 'style';
	
	/**
	 * style for clipPath
	 * 
	 * @var string
	 */
	protected $clipPath;
	
	/**
	 * style for clipRule
	 * 
	 * @var string
	 */
	protected $clipRule;
	
	/**
	 * style for mask
	 * 
	 * @var string
	 */
	protected $mask;
	
	/**
	 * style for opacity
	 * 
	 * @var string
	 */
	protected $opacity;
	
	/**
	 * style for enableBackground
	 * 
	 * @var string
	 */
	protected $enableBackground;
	
	/**
	 * style for filter
	 * 
	 * @var string
	 */
	protected $filter;
	
	/**
	 * style for floodColor
	 * 
	 * @var string
	 */
	protected $floodColor;
	
	/**
	 * style for floodOpacity
	 * 
	 * @var string
	 */
	protected $floodOpacity;
	
	/**
	 * style for lightingColor
	 * 
	 * @var string
	 */
	protected $lightingColor;
	
	/**
	 * style for stopColor
	 * 
	 * @var string
	 */
	protected $stopColor;
	
	/**
	 * style for stopOpacity
	 * 
	 * @var string
	 */
	protected $stopOpacity;
	
	/**
	 * style for pointerEvents
	 * 
	 * @var string
	 */
	protected $pointerEvents;
	
	/**
	 * style for colorInterpolation
	 * 
	 * @var string
	 */
	protected $colorInterpolation;
	
	/**
	 * style for colorInterpolationFilters
	 * 
	 * @var string
	 */
	protected $colorInterpolationFilters;
	
	/**
	 * style for colorProfile
	 * 
	 * @var string
	 */
	protected $colorProfile;
	
	/**
	 * style for colorRendering
	 * 
	 * @var string
	 */
	protected $colorRendering;
	
	/**
	 * style for fill
	 * 
	 * @var string
	 */
	protected $fill;
	
	/**
	 * style for fillOpacity
	 * 
	 * @var string
	 */
	protected $fillOpacity;
	
	/**
	 * style for fillRule
	 * 
	 * @var string
	 */
	protected $fillRule;
	
	/**
	 * style for imageRendering
	 * 
	 * @var string
	 */
	protected $imageRendering;
	
	/**
	 * style for marker
	 * 
	 * @var string
	 */
	protected $marker;
	
	/**
	 * style for markerEnd
	 * 
	 * @var string
	 */
	protected $markerEnd;
	
	/**
	 * style for markerMid
	 * 
	 * @var string
	 */
	protected $markerMid;
	
	/**
	 * style for markerStart
	 * 
	 * @var string
	 */
	protected $markerStart;
	
	/**
	 * style for shapeRendering
	 * 
	 * @var string
	 */
	protected $shapeRendering;
	
	/**
	 * style for stroke
	 * 
	 * @var string
	 */
	protected $stroke;
	
	/**
	 * style for strokeDasharray
	 * 
	 * @var string
	 */
	protected $strokeDasharray;
	
	/**
	 * style for strokeDashoffset
	 * 
	 * @var string
	 */
	protected $strokeDashoffset;
	
	/**
	 * style for strokeLinecap
	 * 
	 * @var string
	 */
	protected $strokeLinecap;
	
	/**
	 * style for strokeLinejoin
	 * 
	 * @var string
	 */
	protected $strokeLinejoin;
	
	/**
	 * style for strokeMiterlimit
	 * 
	 * @var string
	 */
	protected $strokeMiterlimit;
	
	/**
	 * style for strokeOpacity
	 * 
	 * @var string
	 */
	protected $strokeOpacity;
	
	/**
	 * style for strokeWidth
	 * 
	 * @var string
	 */
	protected $strokeWidth;
	
	/**
	 * style for textRendering
	 * 
	 * @var string
	 */
	protected $textRendering;
	
	/**
	 * style for alignmentBaseline
	 * 
	 * @var string
	 */
	protected $alignmentBaseline;
	
	/**
	 * style for baselineShift
	 * 
	 * @var string
	 */
	protected $baselineShift;
	
	/**
	 * style for dominantBaseline
	 * 
	 * @var string
	 */
	protected $dominantBaseline;
	
	/**
	 * style for glyphOrientationHorizontal
	 * 
	 * @var string
	 */
	protected $glyphOrientationHorozontal;
	
	/**
	 * style for glyphOrientationVartical
	 * 
	 * @var string
	 */
	protected $glyphOrientationVertical;
	
	/**
	 * style for kerning
	 * 
	 * @var string
	 */
	protected $kerning;
	
	/**
	 * style for textAnchor
	 * 
	 * @var string
	 */
	protected $textAnchor;
	
	/**
	 * style for writingMode
	 * 
	 * @var string
	 */
	protected $writingMode;
	
	/**
	 * parentObject
	 * 
	 * @var Tx_Sfsvgapi_Domain_Model_AbstractTag
	 */
	protected $parentObject;
	
	/**
	 * array containing all attributes for tag generation
	 * 
	 * @var array
	 */
	protected $attributes;
	
	
	
	
	
	/**
	 * getter for clipPath
	 *
	 * @return string
	 */
	public function getClipPath() {
		return $this->clipPath;
	}
	
	/**
	 * setter for clipPath
	 *
	 * @param string $clipPath
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setClipPath($clipPath) {
		$this->attributes['clip-path'] = $clipPath;
		$this->clipPath = $clipPath;
		return $this;
	}
	
	/**
	 * getter for clipRule
	 *
	 * @return string
	 */
	public function getClipRule() {
		return $this->clipRule;
	}
	
	/**
	 * setter for clipRule
	 *
	 * @param string $clipRule
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setClipRule($clipRule) {
		$this->attributes['clip-rule'] = $clipRule;
		$this->clipRule = $clipRule;
		return $this;
	}
	
	/**
	 * getter for mask
	 *
	 * @return string
	 */
	public function getMask() {
		return $this->mask;
	}
	
	/**
	 * setter for mask
	 *
	 * @param string $mask
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setMask($mask) {
		$this->attributes['mask'] = $mask;
		$this->mask = $mask;
		return $this;
	}
	
	/**
	 * getter for opacity
	 *
	 * @return string
	 */
	public function getOpacity() {
		return $this->opacity;
	}
	
	/**
	 * setter for opacity
	 *
	 * @param string $opacity
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setOpacity($opacity) {
		$this->attributes['opacity'] = $opacity;
		$this->opacity = $opacity;
		return $this;
	}
	
	/**
	 * getter for enableBackground
	 *
	 * @return string
	 */
	public function getEnableBackground() {
		return $this->enableBackground;
	}
	
	/**
	 * setter for enableBackground
	 *
	 * @param string $enableBackground
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setEnableBackground($enableBackground) {
		$this->attributes['enable-background'] = $enableBackground;
		$this->enableBackground = $enableBackground;
		return $this;
	}
	
	/**
	 * getter for filter
	 *
	 * @return string
	 */
	public function getFilter() {
		return $this->filter;
	}
	
	/**
	 * setter for filter
	 *
	 * @param string $filter
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFilter($filter) {
		$this->attributes['filter'] = $filter;
		$this->filter = $filter;
		return $this;
	}
	
	/**
	 * getter for floodColor
	 *
	 * @return string
	 */
	public function getFloodColor() {
		return $this->floodColor;
	}
	
	/**
	 * setter for floodColor
	 *
	 * @param string $floodColor
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFloodColor($floodColor) {
		$this->attributes['flood-color'] = $floodColor;
		$this->floodColor = $floodColor;
		return $this;
	}
	
	/**
	 * getter for floodOpacity
	 *
	 * @return string
	 */
	public function getFloodOpacity() {
		return $this->floodOpacity;
	}
	
	/**
	 * setter for floodOpacity
	 *
	 * @param string $floodOpacity
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFloodOpacity($floodOpacity) {
		$this->attributes['flood-opacity'] = $floodOpacity;
		$this->floodOpacity = $floodOpacity;
		return $this;
	}
	
	/**
	 * getter for lightingColor
	 *
	 * @return string
	 */
	public function getLightingColor() {
		return $this->lightingColor;
	}
	
	/**
	 * setter for lightingColor
	 *
	 * @param string $lightingColor
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setLightingColor($lightingColor) {
		$this->attributes['lighting-color'] = $lightingColor;
		$this->lightingColor = $lightingColor;
		return $this;
	}
	
	/**
	 * getter for stopColor
	 *
	 * @return string
	 */
	public function getStopColor() {
		return $this->stopColor;
	}
	
	/**
	 * setter for stopColor
	 *
	 * @param string $stopColor
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStopColor($stopColor) {
		$this->attributes['stop-color'] = $stopColor;
		$this->stopColor = $stopColor;
		return $this;
	}
	
	/**
	 * getter for stopOpacity
	 *
	 * @return string
	 */
	public function getStopOpacity() {
		return $this->stopOpacity;
	}
	
	/**
	 * setter for stopOpacity
	 *
	 * @param string $stopOpacity
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStopOpacity($stopOpacity) {
		$this->attributes['stop-opacity'] = $stopOpacity;
		$this->stopOpacity = $stopOpacity;
		return $this;
	}
	
	/**
	 * getter for pointerEvents
	 *
	 * @return string
	 */
	public function getPointerEvents() {
		return $this->pointerEvents;
	}
	
	/**
	 * setter for pointerEvents
	 *
	 * @param string $pointerEvents
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setPointerEvents($pointerEvents) {
		$this->attributes['pointer-events'] = $pointerEvents;
		$this->pointerEvents = $pointerEvents;
		return $this;
	}
	
	/**
	 * getter for colorInterpolation
	 *
	 * @return string
	 */
	public function getColorInterpolation() {
		return $this->colorInterpolation;
	}
	
	/**
	 * setter for colorInterpolation
	 *
	 * @param string $colorInterpolation
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setColorInterpolation($colorInterpolation) {
		$this->attributes['color-interpolation'] = $colorInterpolation;
		$this->colorInterpolation = $colorInterpolation;
		return $this;
	}
	
	/**
	 * getter for colorInterpolationFilters
	 *
	 * @return string
	 */
	public function getColorInterpolationFilters() {
		return $this->colorInterpolationFilters;
	}
	
	/**
	 * setter for colorInterpolationFilters
	 *
	 * @param string $colorInterpolationFilters
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setColorInterpolationFilters($colorInterpolationFilters) {
		$this->attributes['color-interpolation-filters'] = $colorInterpolationFilters;
		$this->colorInterpolationFilters = $colorInterpolationFilters;
		return $this;
	}
	
	/**
	 * getter for colorProfile
	 *
	 * @return string
	 */
	public function getColorProfile() {
		return $this->colorProfile;
	}
	
	/**
	 * setter for colorProfile
	 *
	 * @param string $colorProfile
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setColorProfile($colorProfile) {
		$this->attributes['color-profile'] = $colorProfile;
		$this->colorProfile = $colorProfile;
		return $this;
	}
	
	/**
	 * getter for colorRendering
	 *
	 * @return string
	 */
	public function getColorRendering() {
		return $this->colorRendering;
	}
	
	/**
	 * setter for colorRendering
	 *
	 * @param string $colorRendering
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setColorRendering($colorRendering) {
		$this->attributes['color-rendering'] = $colorRendering;
		$this->colorRendering = $colorRendering;
		return $this;
	}
	
	/**
	 * getter for fill
	 *
	 * @return string
	 */
	public function getFill() {
		return $this->fill;
	}
	
	/**
	 * setter for fill
	 *
	 * @param string $fill
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFill($fill) {
		$this->attributes['fill'] = $fill;
		$this->fill = $fill;
		return $this;
	}
	
	/**
	 * getter for fillOpacity
	 *
	 * @return string
	 */
	public function getFillOpacity() {
		return $this->fillOpacity;
	}
	
	/**
	 * setter for fillOpacity
	 *
	 * @param string $fillOpacity
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFillOpacity($fillOpacity) {
		$this->attributes['fill-opacity'] = $fillOpacity;
		$this->fillOpacity = $fillOpacity;
		return $this;
	}
	
	/**
	 * getter for fillRule
	 *
	 * @return string
	 */
	public function getFillRule() {
		return $this->fillRule;
	}
	
	/**
	 * setter for fillRule
	 *
	 * @param string $fillRule
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setFillRule($fillRule) {
		$this->attributes['fill-rule'] = $fillRule;
		$this->fillRule = $fillRule;
		return $this;
	}
	
	/**
	 * getter for imageRendering
	 *
	 * @return string
	 */
	public function getImageRendering() {
		return $this->imageRendering;
	}
	
	/**
	 * setter for imageRendering
	 *
	 * @param string $imageRendering
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setImageRendering($imageRendering) {
		$this->attributes['image-rendering'] = $imageRendering;
		$this->imageRendering = $imageRendering;
		return $this;
	}
	
	/**
	 * getter for marker
	 *
	 * @return string
	 */
	public function getMarker() {
		return $this->marker;
	}
	
	/**
	 * setter for marker
	 *
	 * @param string $marker
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setMarker($marker) {
		$this->attributes['marker'] = $marker;
		$this->marker = $marker;
		return $this;
	}
	
	/**
	 * getter for markerEnd
	 *
	 * @return string
	 */
	public function getMarkerEnd() {
		return $this->markerEnd;
	}
	
	/**
	 * setter for markerEnd
	 *
	 * @param string $markerEnd
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setMarkerEnd($markerEnd) {
		$this->attributes['marker-end'] = $markerEnd;
		$this->markerEnd = $markerEnd;
		return $this;
	}
	
	/**
	 * getter for markerMid
	 *
	 * @return string
	 */
	public function getMarkerMid() {
		return $this->markerMid;
	}
	
	/**
	 * setter for markerMid
	 *
	 * @param string $markerMid
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setMarkerMid($markerMid) {
		$this->attributes['marker-mid'] = $markerMid;
		$this->markerMid = $markerMid;
		return $this;
	}
	
	/**
	 * getter for markerStart
	 *
	 * @return string
	 */
	public function getMarkerStart() {
		return $this->markerStart;
	}
	
	/**
	 * setter for markerStart
	 *
	 * @param string $markerStart
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setMarkerStart($markerStart) {
		$this->attributes['marker-start'] = $markerStart;
		$this->markerStart = $markerStart;
		return $this;
	}
	
	/**
	 * getter for shapeRendering
	 *
	 * @return string
	 */
	public function getShapeRendering() {
		return $this->shapeRendering;
	}
	
	/**
	 * setter for shapeRendering
	 *
	 * @param string $shapeRendering
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setShapeRendering($shapeRendering) {
		$this->attributes['shape-rendering'] = $shapeRendering;
		$this->shapeRendering = $shapeRendering;
		return $this;
	}
	
	/**
	 * getter for Stroke
	 *
	 * @return string
	 */
	public function getStroke() {
		return $this->Stroke;
	}
	
	/**
	 * setter for Stroke
	 *
	 * @param string $Stroke
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStroke($Stroke) {
		$this->attributes['stroke'] = $Stroke;
		$this->Stroke = $Stroke;
		return $this;
	}
	
	/**
	 * getter for strokeDasharray
	 *
	 * @return string
	 */
	public function getStrokeDasharray() {
		return $this->strokeDasharray;
	}
	
	/**
	 * setter for strokeDasharray
	 *
	 * @param string $strokeDasharray
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeDasharray($strokeDasharray) {
		$this->attributes['stroke-dasharray'] = $strokeDasharray;
		$this->strokeDasharray = $strokeDasharray;
		return $this;
	}
	
	/**
	 * getter for strokeDashoffset
	 *
	 * @return string
	 */
	public function getStrokeDashoffset() {
		return $this->strokeDashoffset;
	}
	
	/**
	 * setter for strokeDashoffset
	 *
	 * @param string $strokeDashoffset
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeDashoffset($strokeDashoffset) {
		$this->attributes['stroke-dashoffset'] = $strokeDashoffset;
		$this->strokeDashoffset = $strokeDashoffset;
		return $this;
	}
	
	/**
	 * getter for strokeLinecap
	 *
	 * @return string
	 */
	public function getStrokeLinecap() {
		return $this->strokeLinecap;
	}
	
	/**
	 * setter for strokeLinecap
	 *
	 * @param string $strokeLinecap
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeLinecap($strokeLinecap) {
		$this->attributes['stroke-linecap'] = $strokeLinecap;
		$this->strokeLinecap = $strokeLinecap;
		return $this;
	}
	
	/**
	 * getter for strokeLinejoin
	 *
	 * @return string
	 */
	public function getStrokeLinejoin() {
		return $this->strokeLinejoin;
	}
	
	/**
	 * setter for strokeLinejoin
	 *
	 * @param string $strokeLinejoin
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeLinejoin($strokeLinejoin) {
		$this->attributes['stroke-linejoin'] = $strokeLinejoin;
		$this->strokeLinejoin = $strokeLinejoin;
		return $this;
	}
	
	/**
	 * getter for strokeMiterlimit
	 *
	 * @return string
	 */
	public function getStrokeMiterlimit() {
		return $this->strokeMiterlimit;
	}
	
	/**
	 * setter for strokeMiterlimit
	 *
	 * @param string $strokeMiterlimit
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeMiterlimit($strokeMiterlimit) {
		$this->attributes['stroke-miterlimit'] = $strokeMiterlimit;
		$this->strokeMiterlimit = $strokeMiterlimit;
		return $this;
	}
	
	/**
	 * getter for strokeOpacity
	 *
	 * @return string
	 */
	public function getStrokeOpacity() {
		return $this->strokeOpacity;
	}
	
	/**
	 * setter for strokeOpacity
	 *
	 * @param string $strokeOpacity
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeOpacity($strokeOpacity) {
		$this->attributes['stroke-opacity'] = $strokeOpacity;
		$this->strokeOpacity = $strokeOpacity;
		return $this;
	}
	
	/**
	 * getter for strokeWidth
	 *
	 * @return string
	 */
	public function getStrokeWidth() {
		return $this->strokeWidth;
	}
	
	/**
	 * setter for strokeWidth
	 *
	 * @param string $strokeWidth
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setStrokeWidth($strokeWidth) {
		$this->attributes['stroke-width'] = $strokeWidth;
		$this->strokeWidth = $strokeWidth;
		return $this;
	}
	
	/**
	 * getter for textRendering
	 *
	 * @return string
	 */
	public function getTextRendering() {
		return $this->textRendering;
	}
	
	/**
	 * setter for textRendering
	 *
	 * @param string $textRendering
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setTextRendering($textRendering) {
		$this->attributes['text-rendering'] = $textRendering;
		$this->textRendering = $textRendering;
		return $this;
	}
	
	/**
	 * getter for alignmentBaseline
	 *
	 * @return string
	 */
	public function getAlignmentBaseline() {
		return $this->alignmentBaseline;
	}
	
	/**
	 * setter for alignmentBaseline
	 *
	 * @param string $alignmentBaseline
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setAlignmentBaseline($alignmentBaseline) {
		$this->attributes['alignment-baseline'] = $alignmentBaseline;
		$this->alignmentBaseline = $alignmentBaseline;
		return $this;
	}
	
	/**
	 * getter for baselineShift
	 *
	 * @return string
	 */
	public function getBaselineShift() {
		return $this->baselineShift;
	}
	
	/**
	 * setter for baselineShift
	 *
	 * @param string $baselineShift
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setBaselineShift($baselineShift) {
		$this->attributes['baseline-shift'] = $baselineShift;
		$this->baselineShift = $baselineShift;
		return $this;
	}
	
	/**
	 * getter for dominantBaseline
	 *
	 * @return string
	 */
	public function getDominantBaseline() {
		return $this->dominantBaseline;
	}
	
	/**
	 * setter for dominantBaseline
	 *
	 * @param string $dominantBaseline
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setDominantBaseline($dominantBaseline) {
		$this->attributes['dominant-baseline'] = $dominantBaseline;
		$this->dominantBaseline = $dominantBaseline;
		return $this;
	}
	
	/**
	 * getter for glyphOrientationHorizontal
	 *
	 * @return string
	 */
	public function getGlyphOrientationHorizontal() {
		return $this->glyphOrientationHorizontal;
	}
	
	/**
	 * setter for glyphOrientationHorizontal
	 *
	 * @param string $glyphOrientationHorizontal
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setGlyphOrientationHorizontal($glyphOrientationHorizontal) {
		$this->attributes['glypth-orientation-horizontal'] = $glyphOrientationHorizontal;
		$this->glyphOrientationHorizontal = $glyphOrientationHorizontal;
		return $this;
	}
	
	/**
	 * getter for glyphOrientationVertical
	 *
	 * @return string
	 */
	public function getGlyphOrientationVertical() {
		return $this->glyphOrientationVertical;
	}
	
	/**
	 * setter for glyphOrientationVertical
	 *
	 * @param string $glyphOrientationVertical
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setGlyphOrientationVertical($glyphOrientationVertical) {
		$this->attributes['glypth-orientation-vertical'] = $glyphOrientationVertical;
		$this->glyphOrientationVertical = $glyphOrientationVertical;
		return $this;
	}
	
	/**
	 * getter for kerning
	 *
	 * @return string
	 */
	public function getKerning() {
		return $this->kerning;
	}
	
	/**
	 * setter for kerning
	 *
	 * @param string $kerning
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setKerning($kerning) {
		$this->attributes['kerning'] = $kerning;
		$this->kerning = $kerning;
		return $this;
	}
	
	/**
	 * getter for textAnchor
	 *
	 * @return string
	 */
	public function getTextAnchor() {
		return $this->textAnchor;
	}
	
	/**
	 * setter for textAnchor
	 *
	 * @param string $textAnchor
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setTextAnchor($textAnchor) {
		$this->attributes['text-anchor'] = $textAnchor;
		$this->textAnchor = $textAnchor;
		return $this;
	}
	
	/**
	 * getter for writingMode
	 *
	 * @return string
	 */
	public function getWritingMode() {
		return $this->writingMode;
	}
	
	/**
	 * setter for writingMode
	 *
	 * @param string $writingMode
	 * @return Tx_Sfsvgapi_Domain_Attribute_Style
	 */
	public function setWritingMode($writingMode) {
		$this->attributes['writing-mode'] = $writingMode;
		$this->writingMode = $writingMode;
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
	 * @param Tx_Sfsvgapi_Domain_Model_AbstractTag $parentObject
	 */
	public function setParentObject(Tx_Sfsvgapi_Domain_Model_AbstractTag $parentObject) {
		$this->parentObject = $parentObject;
	}
	
	/**
	 * As in jQuery this method exits editing of this object and return the parent one
	 * 
	 * @return Tx_Sfsvgapi_Domain_Model_AbstractTag
	 */
	public function end() {
		return $this->parentObject;
	}
}
?>