<?php

class PagesController extends \BaseController
{

	public function showHome()
	{
		return View::make('pages.home');
	}


}
