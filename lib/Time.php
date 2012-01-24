<?php
class Time extends Date {
  public static function _add($date, $str, $format = null) { 
    return parent::_add($date, $str, is_null($format) ? static::TIME_FORMAT : $format);
  }
}
