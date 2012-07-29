<?php

class ContentTwigTest1 extends TwigContentElement
{
	protected $strTemplate = 'ce_twig_test_1';

	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		$this->Template->message = 'Hallo Welt!';
	}
}
