<?php

require_once dirname(__FILE__).'/ReplacerRules.php';

/**
* Replacer class
**/
class Replacer {

  private $rules;

  public function __construct() {
      $this->rules = new ReplacerRules();
  }

  /**
  * Replace function to replace given text
  * @param string $text
  * @param string $langauge
  * @return string
  **/
  public function replace($text, $language) {
    return preg_replace(
      $this->rules->getRule($language),
      " $1&nbsp;",
      $text
    );
  }
}
