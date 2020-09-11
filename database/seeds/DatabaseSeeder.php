<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Herbet',
            'email' => 'herbetjr@atenaagencia.com',
            'password' => Hash::make('01072015'),
        ]);
    }
}
