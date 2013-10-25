<?php 

$GLOBALS['TL_DCA']['tl_content']['palettes']['mutabNav'] = '{type_legend},type,mutab_tabs;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mutabStart'] = '{type_legend},type;mutab_headline;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible';
$GLOBALS['TL_DCA']['tl_content']['palettes']['mutabStop'] = '{type_legend},type,mutab_classes;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible';

$GLOBALS['TL_DCA']['tl_content']['fields']['mutab_tabs'] = array
(
	/*'label' => &$GLOBALS['TL_LANG']['tl_content']['mutab_tabs'],
	'exclude' => true,
	'inputType' => 'multiColumnWizard',
	'eval' => array
	(
		'columnFields' => array
		(
			'mutab_tabs_name' => array
			(
				'label' 		=> &$GLOBALS['TL_LANG']['tl_content']['mutab_tabs_name'],
				'inputType' 		=> 'text',
				'eval'                  => array('mandatory'=>true, 'style'=>'width:400px', 'allowHtml'=>true)
			),
			'mutab_tabs_value' => array
			(
				'label' 		=> &$GLOBALS['TL_LANG']['tl_content']['mutab_tabs_value'],
				'inputType' 		=> 'text',
				'eval'                  => array('style'=>'width:75px')
			)
		)
	),
	'sql' => "blob NULL"*/
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mutab_tabs'],
	'exclude'                 => true,
	'inputType'               => 'listWizard',
	//'eval'                    => array('allowHtml'=>false),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mutab_headline'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mutab_headline'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'allowHtml'=>true),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mutab_classes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['mutab_classes'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'alnum', 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
?>