<?php
echo '<pre>';
require 'lib/Date.php';
require 'lib/Time.php';

echo "COMPARISON TESTS\n=======================\n";
echo "Before Test\n=======================\n";
$date = '10:30:12';
$compare = '11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::BEFORE: (',Date::compare($date, $compare) === Date::BEFORE,")\n";
echo 'Date::compare($date, $compare) < 0: (',Date::compare($date, $compare) < 0,")\n";
echo 'Date::isBefore($date, $compare): (',Date::isBefore($date, $compare),")\n\n";

echo "After Test\n=======================\n";
$date = '11:35:12';
$compare = '11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::AFTER: (',Date::compare($date, $compare) === Date::AFTER,")\n";
echo 'Date::compare($date, $compare) > 0: (',Date::compare($date, $compare) === Date::AFTER,")\n"; 
echo 'Date::isAfter($date, $compare): (',Date::isAfter($date, $compare),")\n\n";

echo "Identical Test\n=======================\n";
$date = '11:30:12';
$compare = '11:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::IDENTICAL: (',Date::compare($date, $compare) === Date::IDENTICAL,")\n";
echo 'Date::compare($date, $compare) === 0: (',Date::compare($date, $compare) === 0,")\n";
echo 'Date::isOnOrBefore($date, $compare): (',Date::isOnOrBefore($date, $compare),")\n";
echo 'Date::isOnOrAfter($date, $compare): (',Date::isOnOrAfter($date, $compare),")\n\n";

echo "ADD TESTS\n=======================\n";
echo "Add Units Test\n=======================\n";
$date = '11:30:12';
$number = 10;
$units = 'minutes';  //

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Time::addUnits($date, $number, $units): (',Time::addUnits($date, $number, $units),")\n";
echo 'Time::addMinutes($date, $number): (',Time::addMinutes($date, $number),")\n";
echo 'Time::add($date, $number . \' \' . $units): (',Time::add($date, $number . ' ' . $units),")\n\n";
echo 'Date::addUnits($date, $number, $units, Date::TIME_FORMAT): (',Date::addUnits($date, $number, $units, Date::TIME_FORMAT),")\n";
echo 'Date::addMinutes($date, $number, Date::TIME_FORMAT): (',Date::addMinutes($date, $number, Date::TIME_FORMAT),")\n";
echo 'Date::add($date, $number . \' \' . $units, Date::TIME_FORMAT): (',Date::add($date, $number . ' ' . $units, Date::TIME_FORMAT),")\n\n";

echo "Subtract Units Test\n=======================\n";
$date = '11:30:12';
$number = -10;
$units = 'hours';

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Time::addUnits($date, $number, $units): (',Time::addUnits($date, $number, $units),")\n";
echo 'Time::addHours($date, $number): (',Time::addHours($date, $number),")\n";
echo 'Time::add($date, $number . \' \' . $units): (',Time::add($date, $number . ' ' . $units),")\n\n";
echo 'Date::addUnits($date, $number, $units, Date::TIME_FORMAT): (',Date::addUnits($date, $number, $units, Date::TIME_FORMAT),")\n";
echo 'Date::addHours($date, $number, Date::TIME_FORMAT): (',Date::addHours($date, $number, Date::TIME_FORMAT),")\n";
echo 'Date::add($date, $number . \' \' . $units, Date::TIME_FORMAT): (',Date::add($date, $number . ' ' . $units, Date::TIME_FORMAT),")\n\n";

echo "DIFFERENCE TESTS\n=======================\n";
$date = '11:30:12';
$compare = '15:30:12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::difference($date, $compare))',"\n";
print_r(Date::difference($date, $compare));
echo "\n",'Date::difference($date, $compare, "minutes"): (',Date::difference($date, $compare, "minutes"),')';
echo "\n",'Date::minutesDifferent($date, $compare): (',Date::minutesDifferent($date, $compare),')';
echo "\n",'Date::_difference(Date::getDifference($date, $compare), "minutes"): (',Date::_difference(Date::getDifference($date, $compare), "minutes"),')';
