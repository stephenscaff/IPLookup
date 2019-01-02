# IP Lookup

A simple php class to help determine the user's originating country.
Uses [ip-api.com/json/ ](http://ip-api.com/json/ ) as the check.

### Usage


```
require_once 'iplookup.php';

$iplookup = new IPLookup;
$country = $iplookup->country();

if ($country !== 'United States') {
  $class = 'is-not-us';
} else {
  $class = 'is-us';
}
```

### Methods
```
/**
 * ip
 * User's IP Address
 */
$iplookup->ip();

/**
 * country
 * Full country name
 */
$iplookup->country();


/**
 * countryCode
 * Abbreviated country code
 */
$iplookup->countryCode();


/**
 * city
 */
$iplookup->country();


/**
 * region
 * Abbreviated state code
 */
$iplookup->region();


/**
 * regionName
 * Full state/region name
 */
$iplookup->regionName();
```
