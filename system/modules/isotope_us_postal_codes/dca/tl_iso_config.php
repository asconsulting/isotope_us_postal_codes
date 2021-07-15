<?php

/**
 * Isotope US Postal Code Ranges extension. 
 *
 * Copyright (C) 2021 Andrew Stevens Consulting
 *
 * @package    isotope_us_postal_codes
 * @link       https://andrewstevens.consulting
 */



/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default'] = preg_replace('/{config_legend}[^;]+/', '${0},useLegacyPostalRanges', $GLOBALS['TL_DCA']['tl_iso_config']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_config']['fields']['useLegacyPostalRanges'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_iso_config']['useLegacyPostalRanges'],
	'exclude'               => true,
	'inputType'             => 'checkbox',
	'default'				=> '1',
	'eval'                  => array('tl_class'=>'w50'),
	'sql'                   => "char(1) NOT NULL default '1'",
);
