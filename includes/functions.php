<?php 
# This is the custome functions library
# You don't need to remember to include this as it's 
# included by the config file.  Do remember to put code
# in here if it will be needed by multiple scripts

# Dates Difference
# This function is used to calculate the number of days between two
# dates.  It should take two dates in text format
# and return an integer number of days.  It will return zero if
# either date is missing or if....   best before date or if the
# purcase date was after the best before date.  The fisrt date should be the 
function bbdaysremaining ($purch, $best) {
    if ($best == "" OR $purch == "") return array (0, "One of the dates is missing");
    $datebb = date_create($best);
    $datepu = date_create($purch);
    if ($datepu > $datebb) return array (0, "Date a > date b");
    $canlife = date_diff($datepu, $datebb);
    $days = intval($canlife->format('%a'));
    return array ($days, "No error");
  }
 
#The below two functions are used to sanatize strings that are recived via post requests or via get varables etc.
 function sanitizeString($value) {
    $value = strip_tags($value);
    $value = filter_var($value, FILTER_SANITIZE_STRING);
    return $value;
}
function sanitizeEmail($value) {
    $value = strip_tags($value);
    $value = filter_var($value, FILTER_SANITIZE_STRING);
    $value = filter_var($value, FILTER_SANITIZE_EMAIL);
    return $value;
}
?>