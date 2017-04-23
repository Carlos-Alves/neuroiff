<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Neuroiff\User::class, 1)->create([
            'email' => 'admin@neuroiff.com'
        ]);
    }
}
