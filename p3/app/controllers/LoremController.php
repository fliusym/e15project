<?php

class LoremController extends BaseController
{
	public function showLorem()
	{
		return View::make('lorem');
	}

	public function generateLorem()
	{
		$numberparagraphs = Input::get('how_many_paragraphs');
		$gentext = $this->generateLoremText($numberparagraphs);
	//	var_dump($gentext);
		Input::flash();
		return View::make('lorem')
		->with('gentext',$gentext);	
		


	}

	private function generateLoremText($numberparagraphs)
	{
		$generator = new Badcow\LoremIpsum\Generator();
		return $generator->getParagraphs($numberparagraphs);
	}
}