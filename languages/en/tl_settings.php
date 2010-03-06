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
$GLOBALS['TL_LANG']['tl_settings']['pw_length']		= array('Password length', 'Please set the minimum password length. Be aware that 8 characters is always the minimum (because the TYPOlight core implies it).');
$GLOBALS['TL_LANG']['tl_settings']['pw_validate']	= array('Password validation', 'Please check here which rules you want to apply to new member passwords.');
$GLOBALS['TL_LANG']['tl_settings']['pw_chars']		= array('Special characters', 'Please enter a list of special characters a user can use in passwords. If you leave this field blank, all characters (expect [=<>()#/]) are allowed.');


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_settings']['uppercase']		= 'At least one uppercase character';
$GLOBALS['TL_LANG']['tl_settings']['lowercase']		= 'At least one lowercase character';
$GLOBALS['TL_LANG']['tl_settings']['number']		= 'At least one number';
$GLOBALS['TL_LANG']['tl_settings']['specialchar']	= 'At least one special character';

