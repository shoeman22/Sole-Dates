<?php
class Date_Time extends Date {
  public static function format($date, $format = null) {
    return parent::format($date, is_null($format) ? static::DATETIME_FORMAT : $format);
  }
  
  public static function _add($date, $str, $format = null) {  
    return parent::_add($date, $str, is_null($format) ? static::DATETIME_FORMAT : $format);
  }
}
