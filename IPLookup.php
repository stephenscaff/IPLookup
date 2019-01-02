<?php

/**
 * Ip Lookup
 * A simple class for returning the users GeoLocation info based on their IP
 * @author Stephen Scaff
 */
class IPLookup {


  function _constructor(){
    $this->lookup();
  }

  /**
   * Get IP
   * @return string $ip - users ip address
   */
  function ip(){
    $ip = '';
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }

  /**
   * Lookup
   * @return object $details - object of location info
   * @see ip-api.com
   */
  function lookup(){
    $ip = $this->ip();
    $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

    return $details;
  }

  /**
   * Get Country
   * @return string
   */
  function country(){
    $lookup = $this->lookup();
    $country = $lookup->country;

    return $country;
  }

  /**
   * Get Country Code
   * @return string
   */
  function countryCode(){
    $lookup = $this->lookup();
    $countryCode = $lookup->countryCode;

    return $countryCode;
  }

  /**
   * Get City
   * @return string
   */
  function city(){
    $lookup = $this->lookup();
    $city = $lookup->city;

    return $city;
  }

  /**
   * Get Region (abbrv state)
   * @return string
   */
  function region(){
    $lookup = $this->lookup();
    $region = $lookup->region;

    return $region;
  }

  /**
   * Get RegionName (Full state name)
   * @return string
   */
  function regionName(){
    $lookup = $this->lookup();
    $regionName = $lookup->regionName;

    return $regionName;
  }
}

new IPLookup();
