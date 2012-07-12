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
class Tx_Sfsvgapi_Domain_Model_Animate extends Tx_Sfsvgapi_Domain_Model_AbstractTag {
	
	protected $tagName = 'animate';
	
	/**
	 * Specifies the name of the target attribute
	 * 
	 * @var string
	 */
	protected $attributeName;
	
	/**
	 * Specifies the namespace in which the target attribute and its associated values are defined
	 * The attribute value is one of the following (values are case-sensitive):
	 * CSS|XML|auto
	 * 
	 * @var string
	 */
	protected $attributeType;

	/**
	 * Defines when the element should begin (i.e. become active).
	 * 
	 * @var string
	 */
	protected $begin;

	/**
	 * Specifies the simple duration.
	 * 
	 * @var string
	 */
	protected $dur;
	
	/**
	 * Defines an end value for the animation that can constrain the active duration.
	 * 
	 * @var string
	 */
	protected $end;
	
	/**
	 * Specifies the minimum value of the active duration.
	 * 
	 * @var string
	 */
	protected $min;
	
	/**
	 * Specifies the maximum value of the active duration.
	 * 
	 * @var string
	 */
	protected $max;
	
	/**
	 * Restart the animation
	 * Valid values: always|whenNotActive|never
	 * 
	 * @var string
	 */
	protected $restart;
	
	/**
	 * Specifies the number of iterations of the animation function.
	 * 
	 * @var string
	 */
	protected $repeatCount;
	
	/**
	 * Specifies the total duration for repeat.
	 * 
	 * @var string
	 */
	protected $repeatDur;
	
	/**
	 * What should happen when the anamation id over?
	 * Valid values: freeze|remove
	 * 
	 * @var string
	 */
	protected $fill;
	
	/**
	 * Specifies the interpolation mode for the animation.
	 * 
	 * @var string
	 */
	protected $calcMode;
	
	/**
	 * A semicolon-separated list of one or more values.
	 * 
	 * @var string
	 */
	protected $values;
	
	/**
	 * A semicolon-separated list of time values used to control the pacing of the animation.
	 * 
	 * @var string
	 */
	protected $keyTimes;
	
	/**
	 * A set of Bézier control points associated with the 'keyTimes' list, defining a cubic Bézier function that controls interval pacing.
	 * 
	 * @var string
	 */
	protected $keySplines;
	
	/**
	 * Specifies the starting value of the animation.
	 * 
	 * @var string
	 */
	protected $from;
	
	/**
	 * Specifies the ending value of the animation.
	 * 
	 * @var string
	 */
	protected $to;
	
	/**
	 * Specifies a relative offset value for the animation.
	 * 
	 * @var string
	 */
	protected $by;
	
	/**
	 * Controls whether or not the animation is additive.
	 * Valid values: replace|sum
	 * 
	 * @var string
	 */
	protected $additive;
	
	/**
	 * Controls whether or not the animation is cumulative.
	 * Valid values: none|sum
	 * 
	 * @var string
	 */
	protected $accumulate;
	
	
	
	
	/**
	 * getter for attributeName
	 *
	 * @return string
	 */
	public function getAttributeName() {
		return $this->attributeName;
	}
	
	/**
	 * setter: Specifies the name of the target attribute
	 *
	 * @param string $attributeName
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setAttributeName($attributeName) {
		$this->attributes['attributeName'] = $attributeName;
		$this->attributeName = $attributeName;
		return $this;
	}

	/**
	 * getter for attributeType
	 *
	 * @return string
	 */
	public function getAttributeType() {
		return $this->attributeType;
	}
	
	/**
	 * Setter: Specifies the namespace in which the target attribute and its associated values are defined
	 * The attribute value is one of the following (values are case-sensitive):
	 * CSS|XML|auto
	 *
	 * @param string $attributeType
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setAttributeType($attributeType) {
		$this->attributes['attributeType'] = $attributeType;
		$this->attributeType = $attributeType;
		return $this;
	}
	
	/**
	 * getter for begin
	 *
	 * @return string
	 */
	public function getBegin() {
		return $this->begin;
	}
	
	/**
	 * setter for begin
	 *
	 * @link http://www.w3.org/TR/SVG11/interact.html#SVGEvents
	 * @param string $begin
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setBegin($begin) {
		$this->attributes['begin'] = $begin;
		$this->begin = $begin;
		return $this;
	}
	
	/**
	 * getter for dur
	 * Valid values: media|indefinite
	 *
	 * @return string
	 */
	public function getDur() {
		return $this->dur;
	}
	
	/**
	 * setter: Specifies the simple duration.
	 *
	 * @param string $dur
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setDur($dur) {
		$this->attributes['dur'] = $dur;
		$this->dur = $dur;
		return $this;
	}
	
	/**
	 * getter for end
	 *
	 * @return string
	 */
	public function getEnd() {
		return $this->end;
	}
	
	/**
	 * setter: Defines an end value for the animation that can constrain the active duration.
	 *
	 * @param string $end
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setEnd($end) {
		$this->attributes['end'] = $end;
		$this->end = $end;
		return $this;
	}
	
	/**
	 * getter for min
	 *
	 * @return string
	 */
	public function getMin() {
		return $this->min;
	}
	
	/**
	 * setter: Specifies the minimum value of the active duration.
	 *
	 * @param string $min
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setMin($min) {
		$this->attributes['min'] = $min;
		$this->min = $min;
		return $this;
	}
	
	/**
	 * getter for max
	 *
	 * @return string
	 */
	public function getMax() {
		return $this->max;
	}
	
	/**
	 * setter: Specifies the maximum value of the active duration.
	 *
	 * @param string $max
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setMax($max) {
		$this->attributes['max'] = $max;
		$this->max = $max;
		return $this;
	}
	
	/**
	 * getter for restart
	 *
	 * @return string
	 */
	public function getRestart() {
		return $this->restart;
	}
	
	/**
	 * setter: Restart the animation
	 * Valid values: always|whenNotActive|never
	 *
	 * @param string $restart
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setRestart($restart) {
		$this->attributes['restart'] = $restart;
		$this->restart = $restart;
		return $this;
	}
	
	/**
	 * getter for repeatCount
	 *
	 * @return string
	 */
	public function getRepeatCount() {
		return $this->repeatCount;
	}
	
	/**
	 * setter: Specifies the number of iterations of the animation function.
	 *
	 * @param string $repeatCount
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setRepeatCount($repeatCount) {
		$this->attributes['repeatCount'] = $repeatCount;
		$this->repeatCount = $repeatCount;
		return $this;
	}
	
	/**
	 * getter for repeatDur
	 *
	 * @return string
	 */
	public function getRepeatDur() {
		return $this->repeatDur;
	}
	
	/**
	 * setter: Specifies the total duration for repeat.
	 *
	 * @param string $repeatDur
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setRepeatDur($repeatDur) {
		$this->attributes['repeatDur'] = $repeatDur;
		$this->repeatDur = $repeatDur;
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
	 * setter: What should happen when the anamation id over?
	 * Valid values: freeze|remove
	 *
	 * @param string $fill
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setFill($fill) {
		$this->attributes['fill'] = $fill;
		$this->fill = $fill;
		return $this;
	}
	
	/**
	 * getter for calcMode
	 *
	 * @return string
	 */
	public function getCalcMode() {
		return $this->calcMode;
	}
	
	/**
	 * setter: Specifies the interpolation mode for the animation.
	 *
	 * @param string $calcMode
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setCalcMode($calcMode) {
		$this->attributes['calcMode'] = $calcMode;
		$this->calcMode = $calcMode;
		return $this;
	}
	
	/**
	 * getter for values
	 *
	 * @return string
	 */
	public function getValues() {
		return $this->values;
	}
	
	/**
	 * setter: A semicolon-separated list of one or more values.
	 *
	 * @param string $values
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setValues($values) {
		$this->attributes['values'] = $values;
		$this->values = $values;
		return $this;
	}
	
	/**
	 * getter for keyTimes
	 *
	 * @return string
	 */
	public function getKeyTimes() {
		return $this->keyTimes;
	}
	
	/**
	 * setter: A semicolon-separated list of time values used to control the pacing of the animation.
	 *
	 * @param string $keyTimes
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setKeyTimes($keyTimes) {
		$this->attributes['keyTimes'] = $keyTimes;
		$this->keyTimes = $keyTimes;
		return $this;
	}
	
	/**
	 * getter for keySplines
	 *
	 * @return string
	 */
	public function getKeySplines() {
		return $this->keySplines;
	}
	
	/**
	 * setter: A set of Bézier control points associated with the 'keyTimes' list, defining a cubic Bézier function that controls interval pacing.
	 * calcMode has to be set to 'spline'
	 *
	 * @link http://www.w3.org/TR/SVG11/animate.html#KeySplinesAttribute
	 * @param string $keySplines
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setKeySplines($keySplines) {
		$this->attributes['keySplines'] = $keySplines;
		$this->keySplines = $keySplines;
		return $this;
	}
	
	/**
	 * getter for from
	 *
	 * @return string
	 */
	public function getFrom() {
		return $this->from;
	}
	
	/**
	 * setter: Specifies the starting value of the animation.
	 *
	 * @param string $from
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setFrom($from) {
		$this->attributes['from'] = $from;
		$this->from = $from;
		return $this;
	}
	
	/**
	 * getter for to
	 *
	 * @return string
	 */
	public function getTo() {
		return $this->to;
	}
	
	/**
	 * setter: Specifies the ending value of the animation.
	 *
	 * @param string $to
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setTo($to) {
		$this->attributes['to'] = $to;
		$this->to = $to;
		return $this;
	}
	
	/**
	 * getter for by
	 *
	 * @return string
	 */
	public function getBy() {
		return $this->by;
	}
	
	/**
	 * setter: Specifies a relative offset value for the animation.
	 * It adds the given value to the attributeName
	 * So...if the value of the attribute is 100 and by is 20 it results in 120
	 *
	 * @param string $by
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setBy($by) {
		$this->attributes['by'] = $by;
		$this->by = $by;
		return $this;
	}
	
	/**
	 * getter for additive
	 *
	 * @return string
	 */
	public function getAdditive() {
		return $this->additive;
	}
	
	/**
	 * setter: Controls whether or not the animation is additive.
	 * Valid values: replace|sum
	 *
	 * @param string $additive
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setAdditive($additive) {
		$this->attributes['additive'] = $additive;
		$this->additive = $additive;
		return $this;
	}
	
	/**
	 * getter for accumulate
	 *
	 * @return string
	 */
	public function getAccumulate() {
		return $this->accumulate;
	}
	
	/**
	 * setter: Controls whether or not the animation is cumulative.
	 * Valid values: none|sum
	 *
	 * @param string $accumulate
	 * @return Tx_Sfsvgapi_Domain_Model_Animate
	 */
	public function setAccumulate($accumulate) {
		$this->attributes['accumulate'] = $accumulate;
		$this->accumulate = $accumulate;
		return $this;
	}
}
?>