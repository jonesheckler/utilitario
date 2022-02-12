<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_templates')->insert([
            'title' => 'Template Test',
            'client_smtp_id' => 1,
        ]);


        DB::table('client_templates')->insert([
            'title' => 'Template Test 2',
            'client_smtp_id' => 2,
        ]);
    }
}
