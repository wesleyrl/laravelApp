<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\client as Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(15)->create();
    }
}
