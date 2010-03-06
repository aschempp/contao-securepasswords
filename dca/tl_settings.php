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
 * Palettes
 */
if (version_compare(VERSION, '2.7', '<'))
{
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(';enableSearch', ';pw_length,pw_validate,pw_chars;enableSearch', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
}
else
{
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = preg_replace('@([,|;]disableIpCheck)([,|;])@', '$1,pw_length,pw_chars,pw_validate$2', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
}


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['pw_length'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['pw_length'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 8,
	'eval'				=> array('rgxp'=>'digit', 'mandatory'=>true, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['pw_validate'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['pw_validate'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'options'			=> array('uppercase', 'lowercase', 'number', 'specialchar'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_settings'],
	'eval'				=> array('multiple'=>true, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['pw_chars'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['pw_chars'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('rgxp'=>'extnd', 'tl_class'=>'w50'),
);

