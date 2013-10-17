<?php namespace PHPWhois;
 
require 'phpwhois/whois.main.php';
use PWhois;


class PHPWhois extends PWhois {
 
  public static function get( $domain )
  {
  	$whois = new PWhois();
  	return $whois->Lookup( $domain, true);
  }
 
}