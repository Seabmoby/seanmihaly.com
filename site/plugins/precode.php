<?php
kirbytext::$post[] = function($kirbytext, $value) {
   return str_replace('{{','(',str_replace('}}',')',$value));
};