<?php
/**
* Kirby Unhang 0.1.0
* by Mateusz Ciszczoń <contact@mciszczon.pl>
* https://github.com/mciszczon/kirby-unhang
* License: MIT
*
* TODO: Extend replacing function
* TODO: Allow passing arguments for different languages
**/

/**
* Replace all occurences of hanging conjugators like ` w `
* with ` w&nbsp`.
**/
function unhang($text){
  return preg_replace('/ ([A-z]{1}) /', " $1&nbsp;", $text);
}

/**
* Custom field method for applying unhang() function.
* It's meant to be chained, so use like this:
* $page->aFieldWithText()->unhang()->kirbytext()
**/
field::$methods['unhang'] = function($field) {
  $field->value = unhang($field->value());

  return $field;
};
