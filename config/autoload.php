<?php

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentMuTabNav'    => 'system/modules/mutabs/elements/ContentMuTabNav.php',
	'Contao\ContentMuTabStart'  => 'system/modules/mutabs/elements/ContentMuTabStart.php',
	'Contao\ContentMuTabStop'   => 'system/modules/mutabs/elements/ContentMuTabStop.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_mutabnav'     => 'system/modules/mutabs/templates/elements',
	'ce_mutab_start'  => 'system/modules/mutabs/templates/elements',
	'ce_mutab_stop'    => 'system/modules/mutabs/templates/elements'
));