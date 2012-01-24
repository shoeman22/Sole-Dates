# Sole Dates - Flexible PHP date comparison and math.#
##How to compare dates:##

Date comparison works for any string strtotime can parse.  This allows for date formats like "YESTERDAY", "TODAY", or complex strings such as "2012-01-10 10:50 +4 days" along with standard date, datetime and time formats

```php
$date = '2014-01-01';
$compare_to = '2013-01-01';

//-1 === Date::BEFORE
//0 === Date::IDENTICAL
//1 === Date::AFTER
Date::compare($date, $compare_to); //1 === Date::AFTER

Date::isAfter($date, $compare_to) //true
Date::isOnOrAfter($date, $compare_to) //true

Date::isBefore($date, $compare_to) //false
Date::isOnOrBefore($date, $compare_to) //false
Date::isIdentical($date, $compare_to) //false
```

##How to format date:
Date::format is meant to be used with the returns from the add method to get a prettier format for presentation.  Works with any strtotime parsable string, so the returns from Date_Time::add and Time::add also work.

```php
$date = Date::addDays('2012-01-10',10);

Date::format($date,'m/d/Y') //01/20/2014
```

##How to get the difference between dates:##

Date::difference returns an array detailing how far off $date is from $compare.  If you just want a specific element, you can provide a $field option to difference, or use the convenience methods Date::yearsDifferent, Date::monthsDifferent, Date::daysDifferent, Date::hoursDifferend, Date::minutesDifferent, Date::secondsDifferent.

```php
$date = 2012-01-01
$compare = 2012-01-12

Date::difference($date, $compare))
/*Array
(
    [seconds] => -950400
    [minutes] => -15840
    [hours] => -264
    [days] => -11
    [years] => -0.030116977076874
    [months] => -0.36140372492248
)*/

Date::difference($date, $compare, "years") //-0.030116977076874)
Date::yearsDifferent($date, $compare) //same
Date::_difference(Date::getDifference($date, $compare), "years") //same
```

##How to perform date math:##

Date::add works for any date format strtotime supports.  The main method is Date::add, but convenience methods Date::addUnits, Date::addDays, Date::addMonths, Date::addYears, Date::addHours, Date::addMinutes, Date::addSeconds are provided as well.  Note that even with non-date type calls such as Date::addMinutes only the date portion of the result is returned.

```php
$date = '2014-01-01';
$number = 10
$units = 'days';

Date::addDays($date, $number); //2014-01-11
Date::addUnits($date, $number, $units); //same
Date::add($date, '10 days'); //same
```

##Optional: Date_Time specific math

Similar to Date math, but a full datetime string is returned (Y-m-d H:i:s).

```php
$date = '2014-01-01 10:40:00';
$number = 10
$units = 'minutes';

Date_Time::addMinutes($date, $number); //2014-01-01 10:50:00
Date_Time::addUnits($date, $number, $units); //same
Date_Time::add($date, '10 minutes'); //same

//you can force Date to return the full datetime instead:
Date::addMinutes($date, $number, Date::DATETIME_FORMAT); //same
Date::addUnits($date, $number, $units, Date::DATETIME_FORMAT);//same
Date::add($date, '10 minutes', Date::DATETIME_FORMAT);//same
```

##Optional: Time specific math

Similar to Date math, but a time string is returned (H:i:s).

```php
$date = '10:40:00';
$number = 10
$units = 'minutes';

Time::addMinutes($date, $number); //10:50:00
Time::addUnits($date, $number, $units); //same
Time::add($date, '10 minutes'); //same

//you can force Date to return the time instead:
Date::addMinutes($date, $number, Date::TIME_FORMAT); //same
Date::addUnits($date, $number, $units, Date::TIME_FORMAT);//same
Date::add($date, '10 minutes', Date::TIME_FORMAT);//same
```
