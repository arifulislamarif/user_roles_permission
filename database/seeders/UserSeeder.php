<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "arif";
        $user->email = "arif@gmail.com";
        $user->password = bcrypt('12345678');
        $user->save();

    }
}
