<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['pw_length']		= array('Passwortlänge', 'Bitte geben Sie die minimale Passwortlänge an. Beachten Sie dass TYPOlight mindestens 8 Zeichen erfordert, kleiner Werte haben keinen Einfluss.');
$GLOBALS['TL_LANG']['tl_settings']['pw_validate']	= array('Passwort-Prüfung', 'Bitte wählen Sie welche Richtlinien für neue Passwörter bei Mitgliedern gelten.');
$GLOBALS['TL_LANG']['tl_settings']['pw_chars']		= array('Sonderzeichen', 'Bitte geben Sie eine Liste der gewünschten Sonderzeichen ein. Wenn Sie keine Eingabe machen werden alle Sonderzeichen (ausser [=<>()#/]) erlaubt.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['uppercase']		= 'Mindestens einen Grossbuchstaben';
$GLOBALS['TL_LANG']['tl_settings']['lowercase']		= 'Mindestens einen Kleinbuchstaben';
$GLOBALS['TL_LANG']['tl_settings']['number']		= 'Mindestens eine Zahl';
$GLOBALS['TL_LANG']['tl_settings']['specialchar']	= 'Mindestens ein Sonderzeichen';

