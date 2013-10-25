<?php

namespace Contao;

class ContentMuTabStart extends \ContentElement
{
	protected $strTemplate = 'ce_mutab_start';
	
	protected function compile()
	{
		if (TL_MODE == 'FE')
		{
			$this->strTemplate = 'ce_mutab_start';
			$this->Template = new \FrontendTemplate($this->strTemplate);
			$this->Template->setData($this->arrData);
		}
		else
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = $this->mutab_headline;
		}
		
		//return parent::generate();
	}
}
?>