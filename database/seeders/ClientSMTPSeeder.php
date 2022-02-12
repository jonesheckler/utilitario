<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSMTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_smpt')->insert([
            'title' => 'Test',
            'client_id' => 1,
            'key' => 'password',
            'ip' => '127.0.0.1'
        ]);



        DB::table('client_smpt')->insert([
            'title' => 'Test 2',
            'client_id' => 2,
            'key' => 'password2',
            'ip' => '127.0.0.1'
        ]);

    }
}
