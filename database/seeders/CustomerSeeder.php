<?php

namespace Database\Seeders;

use App\Models\Customers;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customers::factory()
            ->count(300)
            ->has(Order::factory()->count(50), 'orders')
            ->create();
    }
}
