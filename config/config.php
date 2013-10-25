<?php

/**
* CE 
*/
array_insert($GLOBALS['TL_CTE'],1,array(
	'mutab' => array
	(
		'mutabNav'   => 'ContentMuTabNav',
		'mutabStart' => 'ContentMuTabStart',
		'mutabStop'  => 'ContentMuTabStop',
	)
));

if (TL_MODE == 'FE')
{
	$GLOBALS['TL_JAVASCRIPT'][] = "system/modules/mutabs/assets/js/mutabs.js";
}