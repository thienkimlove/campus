<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");

        Model::unguard();

        User::truncate();

        factory(User::class)->create([
            'password' => bcrypt('232323'),
            'email' => 'tieumaster@yahoo.com'
        ]);

        Model::reguard();

        DB::statement("SET foreign_key_checks=1");

    }
}
