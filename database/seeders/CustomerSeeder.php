<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating 25 customers with 10 invoice each
        Customer::factory()
        ->count(25)
        ->hasInvoices(10)
        ->create();

        //creating 100 customers with 5 invoice each
        Customer::factory()
        ->count(100)
        ->hasInvoices(5)
        ->create(); 

        //creating 5 customers with no invoice 
        Customer::factory()
        ->count(5) 
        ->create();
    }
}
