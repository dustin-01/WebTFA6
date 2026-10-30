<?php

namespace Tests\Feature;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PosDatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeding_is_repeatable(): void
    {
        $this->seed();
        $this->seed();

        $this->assertDatabaseCount('customers', 5);
        $this->assertDatabaseCount('users', 5);
        $this->assertDatabaseHas('customers', ['full_name' => 'Andrea Santos']);
        $this->assertDatabaseHas('users', ['username' => 'admin01']);
    }

    public function test_pages_display_new_database_records_and_escape_content(): void
    {
        $customer = Customer::factory()->create(['full_name' => '<script>customer</script>']);
        $user = User::factory()->create(['username' => 'newstaff']);

        $this->get('/customers')->assertOk()->assertSee($customer->full_name)
            ->assertDontSee($customer->full_name, false);
        $this->get('/users')->assertOk()->assertSee($user->username)->assertSee($user->full_name);
    }

    public function test_username_must_be_unique(): void
    {
        User::factory()->create(['username' => 'sameuser']);

        $this->expectException(QueryException::class);

        User::factory()->create(['username' => 'sameuser']);
    }

    public function test_empty_lists_render(): void
    {
        $this->get('/customers')->assertOk();
        $this->get('/users')->assertOk();
    }
}
