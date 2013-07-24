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


class SecurePasswords extends Controller
{
	public function validatePassword($strRegexp, $varValue, Widget $objWidget)
	{
		if ($strRegexp == 'password')
		{
			$intLength = $GLOBALS['TL_CONFIG']['pw_length'];
			$arrValidate = deserialize($GLOBALS['TL_CONFIG']['pw_validate'], true);
			$strChars = strlen($GLOBALS['TL_CONFIG']['pw_chars']) ? $GLOBALS['TL_CONFIG']['pw_chars'] : '.,:;+*%&?-_!$£€§@';

			if (strlen($varValue) < $intLength)
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['passwordLength'], $intLength));
			}

			if (in_array('uppercase', $arrValidate) && preg_match('([A-Z]+)', $varValue) === 0)
			{
				$objWidget->addError($GLOBALS['TL_LANG']['ERR']['passwordUppercase']);
			}

			if (in_array('lowercase', $arrValidate) && preg_match('([a-z]+)', $varValue) === 0)
			{
				$objWidget->addError($GLOBALS['TL_LANG']['ERR']['passwordLowercase']);
			}

			if (in_array('number', $arrValidate) && preg_match('([0-9]+)', $varValue) === 0)
			{
				$objWidget->addError($GLOBALS['TL_LANG']['ERR']['passwordNumber']);
			}

			if (in_array('specialchar', $arrValidate))
			{
				if (!strlen($strChars) && preg_match('([^A-Za-z0-9]+)', $varValue) === 0)
				{
					$objWidget->addError($GLOBALS['TL_LANG']['ERR']['passwordSpecialchar']);
				}
				else
				{
					$arrChars = array();
					for( $i=0; $i<strlen($strChars); $i++)
					{
						// Fix für PHP < 5.3, escapt "-" nicht korrekt
						if ($strChars[$i] == '-' && version_compare(PHP_VERSION, '5.3', '<'))
						{
							$arrChars[$i] = '\-';
						}
						else
						{
							$arrChars[$i] = preg_quote($strChars[$i]);
						}
					}

					if (preg_match('([' . implode('|', $arrChars) . ']+)', $varValue) === 0)
					{
						$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['passwordSelectedSpecialchar'], $strChars));
					}
				}
			}

			// Do not allow any characters that are usually encoded by class Input [=<>()#/])
			// This is the TYPOlight default validation "extnd"
			if (preg_match('/[#\(\)\/<=>]/', $varValue))
			{
				$objWidget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['extnd'], $objWidget->strLabel));
			}

			return true;
		}

		return false;
	}
}

