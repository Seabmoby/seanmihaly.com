<?php

kirbytext::$pre[] = function($kirbytext, $text) {
  $text = preg_replace_callback('!\(custom(…|\.{3})\)(.*?)\((…|\.{3})custom(\s*)?(class:\s?)?(.*?)?\)!is', function($matches) use($kirbytext) {
    $custom = $matches[2];
    if(! empty($matches[6])) {
      $class = $matches[6];
    }
    else {
      $class = "";
    }
    $html    = "";
    $field = new Field($kirbytext->field->page, null, trim($custom));
    $html = '<div class="customtext ' . $class . '">' . $field->kt() . '</div>';
    return $html;
  }, $text);
  return $text;
};