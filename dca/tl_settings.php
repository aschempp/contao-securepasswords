<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *
 * PHP version 5
 * @copyright  terminal42 gmbh 2009-2013
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @license    LGPL
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

