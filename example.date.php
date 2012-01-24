<?php
echo '<pre>';
require 'lib/Date.php';
echo "COMPARISON TESTS\n=======================\n";
echo "Before Test\n=======================\n";
$date = '2012-01-01';
$compare = '2012-02-01';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::BEFORE: (',Date::compare($date, $compare) === Date::BEFORE,")\n";
echo 'Date::compare($date, $compare) < 0: (',Date::compare($date, $compare) < 0,")\n";
echo 'Date::isBefore($date, $compare): (',Date::isBefore($date, $compare),")\n\n";

echo "After Test\n=======================\n";
$date = '2013-01-01';
$compare = '2012-02-23';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::AFTER: (',Date::compare($date, $compare) === Date::AFTER,")\n";
echo 'Date::compare($date, $compare) > 0: (',Date::compare($date, $compare) === Date::AFTER,")\n"; 
echo 'Date::isAfter($date, $compare): (',Date::isAfter($date, $compare),")\n\n";

echo "Identical Test\n=======================\n";
$date = '2013-01-01';
$compare = '2013-01-01';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::compare($date, $compare) === Date::IDENTICAL: (',Date::compare($date, $compare) === Date::IDENTICAL,")\n";
echo 'Date::compare($date, $compare) === 0: (',Date::compare($date, $compare) === 0,")\n";
echo 'Date::isOnOrBefore($date, $compare): (',Date::isOnOrBefore($date, $compare),")\n";
echo 'Date::isOnOrAfter($date, $compare): (',Date::isOnOrAfter($date, $compare),")\n\n";

echo "ADD TESTS\n=======================\n";
echo "Add Units Test\n=======================\n";

$date = '2012-01-01';
$number = 10;
$units = 'days';  //

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Date::addUnits($date, $number, $units): (',Date::addUnits($date, $number, $units),")\n";
echo 'Date::addDays($date, $number): (',Date::addDays($date, $number),")\n";
echo 'Date::add($date, $number . \' \' . $units): (',Date::add($date, $number . ' ' . $units),")\n\n";

echo "Subtract Units Test\n=======================\n";
$date = '2012-01-01';
$number = -10;
$units = 'months';

echo '$date = ',$date,"\n";
echo '$number = ',$number,"\n";
echo '$units = ',$units,"\n\n";

echo 'Date::addUnits($date, $number, $units): (',Date::addUnits($date, $number, $units),")\n";
echo 'Date::addMonths($date, $number): (',Date::addMonths($date, $number),")\n";
echo 'Date::add($date, $number . \' \' . $units): (',Date::add($date, $number . ' ' . $units),")\n\n";

echo "DIFFERENCE TESTS\n=======================\n";
$date = '2012-01-01';
$compare = '2012-01-12';

echo '$date = ',$date,"\n";
echo '$compare = ',$compare,"\n\n";

echo 'Date::difference($date, $compare))',"\n";
print_r(Date::difference($date, $compare));
echo "\n",'Date::difference($date, $compare, "years"): (',Date::difference($date, $compare, "years"),')';
echo "\n",'Date::yearsDifferent($date, $compare): (',Date::yearsDifferent($date, $compare),')';
