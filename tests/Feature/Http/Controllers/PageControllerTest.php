<?php

namespace Tests\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\TestWith;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    #[TestWith(['/', 'Welcome to Simple POS'])]
    #[TestWith(['/about', 'Current Version'])]
    public function test_page_displays_content_and_navigation(string $path, string $heading): void
    {
        $response = $this->get($path);

        $response->assertOk()->assertSee($heading);

        foreach (['home', 'about', 'customers.index', 'users.index'] as $route) {
            $response->assertSee('href="'.route($route).'"', false);
        }
    }
}
