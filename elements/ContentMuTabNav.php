<?php

namespace Contao;

class ContentMuTabNav extends \ContentElement
{
	protected $strTemplate = 'ce_mutabnav';
	
	public function compile()
	{
		if (TL_MODE == 'FE')
		{
			$arrItems = array();
			$items = deserialize($this->mutab_tabs);
			$limit = count($items) - 1;

			for ($i=0, $c=count($items); $i<$c; $i++)
			{
				$arrItems[] = array
				(
					'id' => $i+1,
					'class' => (($i == 0) ? 'first' : (($i == $limit) ? 'last' : '')),
					'content' => $items[$i]
				);
			}

			$this->Template->items = $arrItems;
		}
		else
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = $this->headline;
		}
	}
}
?>