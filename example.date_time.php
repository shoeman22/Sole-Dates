<?php
echo '<pre>';
require 'lib/Date.php';
require 'lib/Date_Time.php';

echo "COMPARISON TESTS\n=======================\n";
echo "Before Test\n=======================\n";
$date = '2012-01-01 11:30:12';
$compare = '2012-02-01 11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::BEFORE: (',Date::compare($date, $compare) === Date::BEFORE,")\n";
echo 'Date::compare($date, $compare) < 0: (',Date::compare($date, $compare) < 0,")\n";
echo 'Date::isBefore($date, $compare): (',Date::isBefore($date, $compare),")\n\n";

echo "After Test\n=======================\n";
$date = '2013-01-01 11:30:12';
$compare = '2012-02-23 11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::AFTER: (',Date::compare($date, $compare) === Date::AFTER,")\n";
echo 'Date::compare($date, $compare) > 0: (',Date::compare($date, $compare) === Date::AFTER,")\n"; 
echo 'Date::isAfter($date, $compare): (',Date::isAfter($date, $compare),")\n\n";

echo "Identical Test\n=======================\n";
$date = '2013-01-01 11:30:12';
$compare = '2013-01-01 11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::IDENTICAL: (',Date::compare($date, $compare) === Date::IDENTICAL,")\n";
echo 'Date::compare($date, $compare) === 0: (',Date::compare($date, $compare) === 0,")\n";
echo 'Date::isOnOrBefore($date, $compare): (',Date::isOnOrBefore($date, $compare),")\n";
echo 'Date::isOnOrAfter($date, $compare): (',Date::isOnOrAfter($date, $compare),")\n\n";

echo "ADD TESTS\n=======================\n";
echo "Add Units Test\n=======================\n";
$date = '2012-01-01 11:30:12';
$number = 10;
$units = 'minutes';  //

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Date_Time::addUnits($date, $number, $units): (',Date_Time::addUnits($date, $number, $units),")\n";
echo 'Date_Time::addMinutes($date, $number): (',Date_Time::addMinutes($date, $number),")\n";
echo 'Date_Time::add($date, $number . \' \' . $units): (',Date_Time::add($date, $number . ' ' . $units),")\n\n";
echo 'Date::addUnits($date, $number, $units, Date::DATETIME_FORMAT): (',Date::addUnits($date, $number, $units, Date::DATETIME_FORMAT),")\n";
echo 'Date::addMinutes($date, $number, Date::DATETIME_FORMAT): (',Date::addMinutes($date, $number, Date::DATETIME_FORMAT),")\n";
echo 'Date::add($date, $number . \' \' . $units, Date::DATETIME_FORMAT): (',Date::add($date, $number . ' ' . $units, Date::DATETIME_FORMAT),")\n\n";

echo "Subtract Units Test\n=======================\n";
$date = '2012-01-01 11:30:12';
$number = -10;
$units = 'hours';

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Date_Time::addUnits($date, $number, $units): (',Date_Time::addUnits($date, $number, $units),")\n";
echo 'Date_Time::addHours($date, $number): (',Date_Time::addHours($date, $number),")\n";
echo 'Date_Time::add($date, $number . \' \' . $units): (',Date_Time::add($date, $number . ' ' . $units),")\n\n";
echo 'Date::addUnits($date, $number, $units, Date::DATETIME_FORMAT): (',Date::addUnits($date, $number, $units, Date::DATETIME_FORMAT),")\n";
echo 'Date::addHours($date, $number, Date::DATETIME_FORMAT): (',Date::addHours($date, $number, Date::DATETIME_FORMAT),")\n";
echo 'Date::add($date, $number . \' \' . $units, Date::DATETIME_FORMAT): (',Date::add($date, $number . ' ' . $units, Date::DATETIME_FORMAT),")\n\n";

echo "DIFFERENCE TESTS\n=======================\n";
$date = '2012-01-01 11:30:12';
$compare = '2012-01-01 15:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::difference($date, $compare))',"\n";
print_r(Date::difference($date, $compare));
echo "\n",'Date::difference($date, $compare, "minutes"): (',Date::difference($date, $compare, "minutes"),')';
echo "\n",'Date::minutesDifferent($date, $compare): (',Date::minutesDifferent($date, $compare),')';
