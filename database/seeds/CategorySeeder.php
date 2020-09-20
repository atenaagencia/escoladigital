<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Design',
            'description' => 'lorem',
            'image' => 'url',
        ]);
        DB::table('categories')->insert([
            'title' => 'Desenvolvimento',
            'description' => 'lorem',
            'image' => 'url',
        ]);
        DB::table('categories')->insert([
            'title' => 'Marketing Digital',
            'description' => 'lorem',
            'image' => 'url',
        ]);
    }
}
