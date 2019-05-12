<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('display'))
{
    function display($array) {
		echo '<br><pre>';
		print_r($array);
		echo '</pre>';
	}

}

if ( ! function_exists('show'))
{
    function show($array) {
		echo '<br><pre>';
		print_r($array);
		echo '</pre>';
		exit;
	}

}

if ( ! function_exists('valArr'))
{
    function valArr($array) {

    	if( true == is_array( $array ) && 0 < count( $array ) ) {
    		return true;
    	} 

    	return false;
    }
}

if ( ! function_exists('valStr'))
{
    function valStr($strString) {

    	if( true == isset( $strString ) && false == empty( $strString ) ) {
    		return true;
    	}

    	return false;
    }
}
?>