<?php
/**
 * Facebook API - config.inc.php
 * @author m[dot]lorch[at]it-kult[dot]de Markus Lorch
 * @package redaxo4
 * @version 3.1.1
 */

/*
ini_set('error_reporting', 'E_ALL');
ini_set('display_errors', 'On');
*/

$mypage = "facebook_sdk";
//$REX['ADDON']['name'][$mypage] = 'Facebook API';
$REX['ADDON']['version'][$mypage] = '3.1.1';
$REX['ADDON']['author'][$mypage] = 'Markus Lorch / ITKULT';
$REX['ADDON']['supportpage'][$mypage] = 'http://www.it-kult.de';
$REX['ADDON']['basedir'][$mypage] = dirname(__FILE__);

$REX['PERM'][] = $mypage.'[]';

## Include Class
if(!class_exists('Facebook'))
	include $REX['ADDON']['basedir'][$mypage].'/classes/facebook.php';

/*
//
// Los geht's: Die Daten Deiner Facebook App
// http://developers.facebook.com
//
$fbconf['appId'] = '';
$fbconf['secret'] = '';
$fbconf['fileUploadSupport'] = true;

// Initalisieren der Facebook-Klasse
$facebook = new Facebook($fbconf);
*/
?>