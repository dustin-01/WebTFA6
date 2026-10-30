<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            ['full_name' => 'Andrea Santos', 'email' => 'andrea.santos@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Miguel Reyes', 'email' => 'miguel.reyes@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Patricia Cruz', 'email' => 'patricia.cruz@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Joshua Garcia', 'email' => 'joshua.garcia@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Nicole Mendoza', 'email' => 'nicole.mendoza@example.com', 'phone' => '0921-567-8901'],
        ] as $record) {
            Customer::updateOrCreate(['email' => $record['email']], $record);
        }

        foreach ([
            ['username' => 'admin01', 'full_name' => 'Dustin Ramirez', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Angela Flores', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Paolo Torres', 'role' => 'Cashier'],
            ['username' => 'manager01', 'full_name' => 'Camille Aquino', 'role' => 'Manager'],
            ['username' => 'staff01', 'full_name' => 'Luis Navarro', 'role' => 'Inventory Staff'],
        ] as $record) {
            User::updateOrCreate(['username' => $record['username']], $record);
        }

    }
}
