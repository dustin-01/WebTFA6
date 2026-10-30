<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_page_displays_at_least_five_complete_records_and_navigation(): void
    {
        $this->seed();
        $response = $this->get('/users');

        $response->assertOk()
            ->assertSee('User Accounts')
            ->assertViewHas('users', fn (Collection $users): bool => count($users) >= 5);

        foreach ($response->viewData('users') as $user) {
            $response->assertSee($user['username'])
                ->assertSee($user['full_name'])
                ->assertSee($user['role']);
        }

        foreach (['home', 'about', 'customers.index', 'users.index'] as $route) {
            $response->assertSee('href="'.route($route).'"', false);
        }
    }
}
