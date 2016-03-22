<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
	public function test_it_displays_homepage()
	{
		$this->visit('/');
	}

	public function test_it_displays_menus_page()
	{
		$this->visit('/menus');
	}
}
