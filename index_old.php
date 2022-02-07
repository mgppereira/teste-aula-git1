<?php

/**
 * Define a default date format.
 */
$skeleton = "YYYY-MM-dd";
/**
 * Parse a time string (for today) according to a specified format.
 */
$today = \DateTimeImmutable::createFromFormat('Y-m-d', date('Y-m-d'));
/**
 * ===========================
 * PRINTING DATE IN USA FORMAT
 * ===========================
 * Initiate an instance for the IntlDatePatternGenerator class
 * and provide the locale information.
 * In the below example, I've used locale: en_US.
 */ 
$intlDatePatternGenerator = new \IntlDatePatternGenerator("en_US");
/**
 * Get the correct date format for the locale: en_US.
 * Following function "getBestPattern" will return:
 * MM/dd/YYYY
 */
$enUSDatePattern = $intlDatePatternGenerator->getBestPattern($skeleton);
/**
 * Use the "formatObject" function of IntlDateFormatter to print as per specified pattern.
 * This will print the following:
 * Date in en-US: 12/03/2021
 */
echo "Date in en-US: ". \IntlDateFormatter::formatObject($today, $enUSDatePattern, "en_US"). "\n";

/**
 * =============================
 * PRINTING DATE IN INDIA FORMAT
 * =============================
 * Initiate an instance for the IntlDatePatternGenerator class
 * and provide the locale information.
 * In the below example, I've used locale: en_IN.
 */
$intlDatePatternGenerator = new \IntlDatePatternGenerator("en_IN");
/**
 * Get the correct date format for the locale: en_IN.
 * Following function "getBestPattern" will return:
 * dd/MM/YYYY
 */
$enINDatePattern = $intlDatePatternGenerator->getBestPattern($skeleton);
/**
 * Use the "formatObject" function of IntlDateFormatter to print as per specified pattern.
 * This will print the following:
 * Date in en-IN: 03/12/2021
 */
echo "Date in en-IN: ". \IntlDateFormatter::formatObject($today, $enINDatePattern, "en_IN"). "\n";





?>