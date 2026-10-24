<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_customers_page_displays_at_least_five_complete_records_and_navigation(): void
    {
        $this->seed();
        $response = $this->get('/customers');

        $response->assertOk()
            ->assertSee('Customer Accounts')
            ->assertViewHas('customers', fn (Collection $customers): bool => count($customers) >= 5);

        foreach ($response->viewData('customers') as $customer) {
            $response->assertSee($customer['full_name'])
                ->assertSee($customer['email'])
                ->assertSee($customer['phone']);
        }

        foreach (['home', 'about', 'customers.index', 'users.index'] as $route) {
            $response->assertSee('href="'.route($route).'"', false);
        }
    }
}
