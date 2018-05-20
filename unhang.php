<?php

/**
* Kirby Unhang 0.2.0
* by Mateusz Ciszczoń <contact@mciszczon.pl>
* https://github.com/mciszczon/kirby-unhang
* License: MIT
*
* TODO: Extend replacing function for Polish
**/

// Load Replacer class
require_once dirname(__FILE__).'/sources/Replacer.php';

/**
* Custom field method for applying replace() method.
* It's meant to be chained, so use like this:
* $page->aFieldWithText()->unhang()->kirbytext()
**/
field::$methods['unhang'] = function($field, $language = null) {
  // Create Replacer instance
  $replacer = new Replacer();
  // If $language is not given, default to site's language
  if (!isset($language)) $language = kirby()->site()->language()->code();
  // Use Replacer replace() method
  $field->value = $replacer->replace($field->value(), $language);

  return $field;
};
