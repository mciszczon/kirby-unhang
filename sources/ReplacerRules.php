<?php

/**
* Replacer Rules class to store rules for different languages.
**/
class ReplacerRules {

  private $rules;

  // Set up $rules attribute
  public function __construct() {
    $this->rules = array(
      'en' => '/ ([A-z]{1}) /',
      'pl' => '/ ([A-z]{1}) /',
    );
  }

  /**
  * getRules() for getting all the rules defined in the $rules attribute
  * @return array
  **/
  public function getRules() {
    return $this->rules ? $this->rules : [];
  }

  /**
  * getRule() for getting rules for defined language
  * @param string $language
  * @return string
  **/
  public function getRule($language = 'en') {
    return $this->rules[$language] ? $this->rules[$language] : 'en';
  }

}
