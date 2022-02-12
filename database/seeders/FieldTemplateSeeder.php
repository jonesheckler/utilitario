<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_templates')->insert([
            'label' => 'name',
            'type' => 'string',
            'client_template_id' => 1,
            'order' => 1,
        ]);

        DB::table('field_templates')->insert([
            'label' => 'city',
            'type' => 'string',
            'client_template_id' => 1,
            'order' => 2,
        ]);

        DB::table('field_templates')->insert([
            'label' => 'message',
            'type' => 'text',
            'client_template_id' => 1,
            'order' => 3,
        ]);


        DB::table('field_templates')->insert([
            'label' => 'message2',
            'type' => 'text',
            'client_template_id' => 2,
            'order' => 1,
        ]);

    }
}
