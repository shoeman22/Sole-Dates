<?php
class Date {
  const BEFORE = -1;
  const AFTER = 1;
  const IDENTICAL = 0;
  
  const DATE_FORMAT = 'Y-m-d';
  const DATETIME_FORMAT = 'Y-m-d H:i:s';
  const TIME_FORMAT = 'H:i:s';
  
  public static function format($date, $format = null) {
    if(is_null($format)) $format = static::DATE_FORMAT;
    return date($format, strtotime($date));
  }
  
  public static function getDifference($date, $compare_to) {
    return strtotime($date) - strtotime($compare_to);
  }
  
  public static function isBefore($date, $compare_to) {
    return static::getDifference($date, $compare_to) < 0;
  }
  
  public static function isOnOrBefore($date, $compare_to) {
    return static::getDifference($date, $compare_to) <= 0;
  }
  
  public static function isAfter($date, $compare_to) {
    return static::getDifference($date, $compare_to) > 0;
  }
  
  public static function isOnOrAfter($date, $compare_to) {
    return static::getDifference($date, $compare_to) >= 0;
  }
  
  public static function isIdentical($date, $compare_to) {
    return static::getDifference($date, $compare_to) === 0;
  }
  
  public static function compare($date, $compare_to) {
    $difference = static::getDifference($date, $compare_to);
    
    switch(true) {
      case $difference === 0:
        return static::IDENTICAL;
      case $difference < 0:
        return static::BEFORE;
    }
    
    return static::AFTER;
  }
  
  public static function _add($date, $str, $format = null) {
    if(is_null($format)) $format = static::DATE_FORMAT;
    return date($format,strtotime(date($format,strtotime($date)) . $str));
  }
  
  public static function add($date, $str, $format = null) {
    return static::_add($date, ' +' . $str, $format);
  }
  
  //convenience methods  
  public static function addUnits($date, $number, $units, $format = null) {
    return static::add($date, $number . ' ' . $units, $format);
  }
  
  public static function addYears($date, $number, $format = null) {
    return static::addUnits($date, $number, 'years', $format);
  }
  
  public static function addMonths($date, $number, $format = null) {
    return static::addUnits($date, $number, 'months', $format);
  }
  
  public static function addDays($date, $number, $format = null) {
    return static::addUnits($date, $number, 'days', $format);
  }
  
  public static function addHours($date, $number, $format = null) {
    return static::addUnits($date, $number, 'hours', $format);
  }
  
  public static function addMinutes($date, $number, $format = null) {
    return static::addUnits($date, $number, 'minutes', $format);
  }
  
  public static function addSeconds($date, $number, $format = null) {
    return static::addUnits($date, $number, 'seconds', $format);
  }
}
